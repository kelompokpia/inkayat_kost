<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;
    protected $fillable = ['id','nama_kamar','nama_penghuni','telepon_penghuni'];
    protected $table = 'kamars';
    public $timetaps = false;
}