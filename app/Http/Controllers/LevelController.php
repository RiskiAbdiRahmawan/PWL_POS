<?php

namespace App\Http\Controllers;

use App\DataTables\LevelDataTable;
use App\Models\m_level;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LevelController extends Controller
{
    public function index(LevelDataTable $datatable)
    {
        // DB::insert('insert into m_levels(level_kode, level_nama, created_at) values (?,?,?)', ['CUS', 'Pelanggan', now()]);
        // return 'insert data baru berhasil';

        // $row = DB::update('update m_levels set level_nama = ? where level_kode = ?', ['Customer', 'CUS']);
        // return 'update data berhasil. Jumlah data yang diupdate: ' .$row. ' baris';

        // $row = DB::delete('delete from m_levels where level_kode = ?', ['CUS']);
        // return 'Delete data berhasil. Jumlah data yang dihapus: ' . $row . ' baris';

        // $data = DB::select('select * from m_levels');
        // return view('level', ['data' => $data]);
        return $datatable->render('level.index');
    }
    public function create()
    {
        return view('level.create');
    }
    public function create_save(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'level_kode' => 'bail|required',
            'level_nama' => 'required',
        ]);

        m_level::create([
            'level_kode' => $request->level_kode,
            'level_nama' => $request->level_nama,
        ]);
        return redirect('/level');
    }
    public function update()
    {
        return view('level.edit');
    }
}
