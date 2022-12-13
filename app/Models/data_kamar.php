<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_kamar extends Model
{
    use HasFactory;
    protected $fillable = ['nama_kamar','nama_penghuni','nik_penghuni','alamat','telepon_penghuni','harga_kamar','tanggal_masuk'];
    protected $table = 'kamars';
    public $timetaps = false;
}
