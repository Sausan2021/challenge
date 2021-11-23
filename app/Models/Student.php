<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public function country(){
        
        return $this->belongsToMany(Country::class,'id');
    }
    
    public function category(){
        return $this->belongsToMany(Category::class,'id');
     
    }
}
