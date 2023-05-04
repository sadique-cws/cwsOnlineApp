<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//changing extend for make model login able 
use Illuminate\Foundation\Auth\User as Authenticatable;
use Hash;


class Teacher extends Authenticatable
{
    use HasFactory;

    public function setPasswordAttribute($value){
        $this->attributes['password'] = Hash::make($value);
    }
}
