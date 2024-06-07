<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tamu extends Model
{
    use HasFactory;
    protected $table = 'tamu';
    protected $fillable = [
        'nama',
        'no_telp',
        'alamat',
        'pesan',
        'keperluan_kunjungan_id',
    ];

    public function keperluan_kunjungan(): BelongsTo
    {
        return $this->belongsTo(KeperluanKunjungan::class, 'keperluan_kunjungan_id');
    }
}