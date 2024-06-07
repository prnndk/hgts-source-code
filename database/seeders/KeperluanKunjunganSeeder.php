<?php

namespace Database\Seeders;

use App\Models\KeperluanKunjungan;
use Illuminate\Database\Seeder;

class KeperluanKunjunganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataKeperluanKunjungan = [
            ['id' => 1, 'keperluan' => 'Kunjungan Kerja'],
            ['id' => 2, 'keperluan' => 'Kunjungan Bisnis'],
            ['id' => 3, 'keperluan' => 'Kunjungan Umum'],
            ['id' => 4, 'keperluan' => 'Kunjungan Alumni'],
            ['id' => 5, 'keperluan' => 'Kunjungan Orang Tua'],
            ['id' => 6, 'keperluan' => 'Kunjungan Lainnya'],
        ];
        foreach ($dataKeperluanKunjungan as $data) {
            KeperluanKunjungan::create($data);
        }
    }
}
