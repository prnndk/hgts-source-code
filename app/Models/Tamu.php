<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tamu extends Model
{
    use HasFactory;
    private static $dataTamu = [
        [
            'id' => 1,
            'nama' => 'Budi',
            'no_telp' => '08123456789',
            'alamat' => 'Jl. Merdeka No. 1',
            'keperluan_kunjungan_id' => 1,
            'pesan' => 'Halo, saya ingin berkunjung',
            'created_at' => '2021-01-01 00:00:00',
        ],
        [
            'id' => 2,
            'nama' => 'Dodi',
            'no_telp' => '08123456788',
            'alamat' => 'Jl. Merdeka No. 2',
            'keperluan_kunjungan_id' => 2,
            'pesan' => 'Halo, saya ingin berkunjung',
            'created_at' => '2021-01-02 00:00:00',
        ],
    ];

    public static function getAllTamu(): array
    {
        return self::$dataTamu;
    }
}