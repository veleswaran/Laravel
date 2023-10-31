<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    use HasFactory;
    protected $table = '_user_';
    //create  fucntion
    protected $fillable = ['username','fullname','email','password','phone','is_active'];
}
