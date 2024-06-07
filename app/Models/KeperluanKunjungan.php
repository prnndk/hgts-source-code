<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class KeperluanKunjungan extends Model
{
    use HasFactory;

    protected $table = 'keperluan_kunjungan';

    protected $fillable = ['keperluan'];

    public function tamu(): HasMany
    {
        return $this->hasMany(Tamu::class, 'keperluan_kunjungan_id');
    }
}
