<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'HP',
                'barang_nama' => 'Handphone',
                'harga_beli' => 2000000,
                'harga_jual' => 2500000,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'ERP',
                'barang_nama' => 'Earphone',
                'harga_beli' => 200000,
                'harga_jual' => 250000,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 2,
                'barang_kode' => 'XUA',
                'barang_nama' => 'X Urband',
                'harga_beli' => 300000,
                'harga_jual' => 350000,
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 2,
                'barang_kode' => 'ZR',
                'barang_nama' => 'Zara',
                'harga_beli' => 350000,
                'harga_jual' => 400000,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 3,
                'barang_kode' => 'KGN',
                'barang_nama' => 'Khong Guan',
                'harga_beli' => 60000,
                'harga_jual' => 75000,
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 3,
                'barang_kode' => 'OREO',
                'barang_nama' => 'OREO Vanila',
                'harga_beli' => 8000,
                'harga_jual' => 10000,
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 4,
                'barang_kode' => 'WJN',
                'barang_nama' => 'Wajan',
                'harga_beli' => 20000,
                'harga_jual' => 25000,
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 4,
                'barang_kode' => 'PSU',
                'barang_nama' => 'Pisau',
                'harga_beli' => 15000,
                'harga_jual' => 17000,
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 5,
                'barang_kode' => 'LT',
                'barang_nama' => 'Lato-Lato',
                'harga_beli' => 3000,
                'harga_jual' => 5000,
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 5,
                'barang_kode' => 'RBK',
                'barang_nama' => 'Rubik',
                'harga_beli' => 20000,
                'harga_jual' => 24000,
            ],
        ];
        DB::table('m_barangs')->insert($data);
    }
}
