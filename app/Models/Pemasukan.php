<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemasukan extends Model
{
    use HasFactory;
    protected $fillable = ['jenis', 'tahun', 'bulan', 'pengekost', 'nominal', 'tgl_bayar', 'catatan'];
    protected $guarded = ['id'];
    protected $table = 'pemasukan';
}
