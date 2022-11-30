<?php

namespace App\Models;

use App\Models\Kamar;
use App\Models\Tahun;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pembayaran extends Model
{
    use HasFactory;

    protected $fillable = ['id_kamar', 'tahun', 'jan', 'feb', 'mar', 'apr', 'mei', 'jun', 'jul', 'ags', 'sep', 'okt', 'nov', 'des'];
    protected $guarded = ['id'];
    protected $table = 'pembayarans';

    public function kamar()
    {
        return $this->belongsTo(Kamar::class, 'id_kamar');
    }

    public function tahun()
    {
        return $this->belongsTo(Tahun::class, 'tahun');
    }
}