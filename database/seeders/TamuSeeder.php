<?php

namespace Database\Seeders;

use App\Models\Tamu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TamuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataTamu = [
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
            [
                'id' => 3,
                'nama' => 'Rudi',
                'no_telp' => '08123456787',
                'alamat' => 'Jl. Merdeka No. 3',
                'keperluan_kunjungan_id' => 3,
                'pesan' => 'Halo, saya ingin berkunjung',
                'created_at' => '2021-01-03 00:00:00',
            ],
            [
                'id' => 4,
                'nama' => 'Susi',
                'no_telp' => '08123456786',
                'alamat' => 'Jl. Merdeka No. 4',
                'keperluan_kunjungan_id' => 4,
                'pesan' => 'Halo, saya ingin berkunjung',
                'created_at' => '2021-01-04 00:00:00',
            ],
            [
                'id' => 5,
                'nama' => 'Tuti',
                'no_telp' => '08123456785',
                'alamat' => 'Jl. Merdeka No. 5',
                'keperluan_kunjungan_id' => 5,
                'pesan' => 'Halo, saya ingin berkunjung',
                'created_at' => '2021-01-05 00:00:00',
            ],
            [
                'id' => 6,
                'nama' => 'Umi',
                'no_telp' => '08123456784',
                'alamat' => 'Jl. Merdeka No. 6',
                'keperluan_kunjungan_id' => 6,
                'pesan' => 'Halo, saya ingin berkunjung',
                'created_at' => '2021-01-06 00:00:00',
            ],
        ];
        DB::beginTransaction();
        try {
            foreach ($dataTamu as $tamu) {
                Tamu::create($tamu);
            }
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }
}
