<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $fillable=[
        'class_id',
         'country_id',
          'name',
          'date_of_birth'
    ];
    public function countries(){
        
        return $this->belongsTo(Country::class,'country_id');
    }
    
    public function categories(){
        return $this->belongsTo(Category::class,'class_id');
     
    }
}
