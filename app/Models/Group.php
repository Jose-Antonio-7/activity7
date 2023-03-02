<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    public function course() { 
        return $this->hasMany(Course::class); 
    }

    public function user() { 
        return $this->hasMany(User::class); 
    } 
}
