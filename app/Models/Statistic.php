<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    use HasFactory;
    //convert birthdate to age
    protected $casts = [
        'date_of_birth' => 'date',
    ];

    public function getAgeAttribute()
    {
         return $this->date_of_birth->age;
    }
    //relations
    public function student(){
        return $this->belongsToMany(Student::class, 'name','id');
    }
    public function category(){
        return $this->belongsToMany(Category::class, 'class_name','id');
    }
    public function country(){
        return $this->belongsToMany(Country::class, 'name','id');
    }
}
