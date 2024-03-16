<?php

namespace App\Http\Controllers;

use App\DataTables\KategoriDataTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    // public function index()
    // {
    // $data = [
    //     'kategori_kode' => 'SNK',
    //     'kategori_nama' => 'Snack/Makanan Ringan',
    //     'created_at' => now()
    // ];
    // DB::table('m_kategoris')->insert($data);
    // return 'Insert Data Baru Berhasil';

    // $row = DB::table('m_kategoris')->where('kategori_kode', 'SNK')->update(['kategori_nama' => 'Camilan']);
    // return 'Update Data Berhasil. Jumlah Data yang diupdate: ' . $row . ' baris';

    // $row = DB::table('m_kategoris')->where('kategori_kode', 'SNK')->delete();
    // return 'Delete Data Berhasil. Jumlah Data yang dihapus: ' . $row . ' baris';

    // $data = DB::table('m_kategoris')->get();
    // return view('kategori', ['data' => $data]);
    // }
    public function index(KategoriDataTable $dataTable)
    {
        return $dataTable->render('kategori.index');
    }
}
