<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use App\DataTables\KategoriDataTable;
use App\Models\m_kategori;
use Illuminate\Http\Request;
use Illuminate\View\View;
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
    public function create()
    {
        return view('kategori.create');
    }
    // public function store(Request $request)
    // {
    //     m_kategori::create([
    //         'kategori_kode' => $request->kodeKategori,
    //         'kategori_nama' => $request->namaKategori,
    //     ]);
    //     return redirect('/kategori');
    // }
    // public function store(Request $request): RedirectResponse
    // {
    //     $validated = $request->validate([
    //         'kategori_kode' => 'required',
    //         'kategori_nama' => 'required',
    //         // 'created_at' => now()
    //     ]);
    //     return redirect('/kategori');
    // }
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'kategori_kode' => 'bail|required',
            'kategori_nama' => 'required',
            // 'created_at' => 'required|date', // Validasi agar 'created_at' diisi dengan nilai tanggal yang valid
        ]);

        // Lakukan operasi penyimpanan data atau tindakan lainnya setelah validasi berhasil

        m_kategori::create([
            'kategori_kode' => $request->kategori_kode,
            'kategori_nama' => $request->kategori_nama,
        ]);
        return redirect('/kategori');
    }

    // public function store(Request $request): RedirectResponse
    // {
    //     $validated = $request->validate([
    //         'kategori_kode' => 'bail|required|unique:posts|max:10',
    //         'kategori_nama' => 'required',
    //         // 'created_at' => now()
    //     ]);
    //     return redirect('/kategori');
    // }
    public function edit($id)
    {
        $user = m_kategori::find($id);
        return view('kategori/edit', ['data' => $user]);
    }
    public function edit_save($id, Request $request)
    {
        $kategori = m_kategori::find($id);

        $kategori->kategori_kode = $request->kodeKategori;
        $kategori->kategori_nama = $request->namaKategori;

        $kategori->save();

        return redirect('/kategori');
    }
    public function hapus($id)
    {
        $kategori = m_kategori::find($id);
        $kategori->delete();

        return redirect('/kategori');
    }
}
