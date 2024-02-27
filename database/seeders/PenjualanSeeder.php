<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 1,
                'user_id' => 3,
                'pembeli' => 'Ikhwan',
                'penjualan_kode' => 'PJ20240201-001',
                'penjualan_tanggal' => '2024-02-01',
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 3,
                'pembeli' => 'Joyo',
                'penjualan_kode' => 'PJ20240201-002',
                'penjualan_tanggal' => '2024-02-01',
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 3,
                'pembeli' => 'Sugito',
                'penjualan_kode' => 'PJ20240201-003',
                'penjualan_tanggal' => '2024-02-01',
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 3,
                'pembeli' => 'Ryuu',
                'penjualan_kode' => 'PJ20240201-004',
                'penjualan_tanggal' => '2024-02-01',
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 3,
                'pembeli' => 'Ryon',
                'penjualan_kode' => 'PJ20240201-005',
                'penjualan_tanggal' => '2024-02-01',
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 3,
                'pembeli' => 'Felix',
                'penjualan_kode' => 'PJ20240202-001',
                'penjualan_tanggal' => '2024-02-02',
            ],
            [
                'penjualan_id' => 7,
                'user_id' => 3,
                'pembeli' => 'Chyro',
                'penjualan_kode' => 'PJ20240202-002',
                'penjualan_tanggal' => '2024-02-02',
            ],
            [
                'penjualan_id' => 8,
                'user_id' => 3,
                'pembeli' => 'Lyro',
                'penjualan_kode' => 'PJ20240202-003',
                'penjualan_tanggal' => '2024-02-02',
            ],
            [
                'penjualan_id' => 9,
                'user_id' => 3,
                'pembeli' => 'Mathilda',
                'penjualan_kode' => 'PJ20240202-004',
                'penjualan_tanggal' => '2024-02-02',
            ],
            [
                'penjualan_id' => 10,
                'user_id' => 3,
                'pembeli' => 'Vanisa',
                'penjualan_kode' => 'PJ20240202-005',
                'penjualan_tanggal' => '2024-02-02',
            ],
        ];
        DB::table('t_penjualans')->insert($data);
    }
}
