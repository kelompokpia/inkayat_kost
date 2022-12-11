<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengaturan extends Model
{
    use HasFactory;
    protected $fillable = ['name','email','email_verified_at','password','remember_token','created_at','updated_at'];
    protected $table = 'users';
    public $timetaps = false;
}