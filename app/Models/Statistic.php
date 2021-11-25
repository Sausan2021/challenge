<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    use HasFactory;
    protected $table = 'statistics';
    protected $fillable=[
        'student_id',
        'class_id',
            'country_id',
            'count_per_class',
            'count_per_country',
            'average'
    ];
    //convert birthdate to age
    protected $casts = [
        'date_of_birth' => 'date',
    ];

    public function getAgeAttribute()
    {
         return $this->date_of_birth->age;
    }

    //relations
    public function students(){
        return $this->hasMany(Student::class, 'student_id');
    }
    public function categories(){
        return $this->belongsTo(Category::class, 'class_id');
    }
    public function countries(){
        return $this->belongsTo(Country::class,'country_id');
    }
}
