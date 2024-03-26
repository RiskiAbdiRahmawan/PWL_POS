<?php

namespace App\Http\Controllers;

use App\Models\m_user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // Update data user dengan Eloquent model
        // $data = [
        //     'nama' => 'Pelanggan Pertama'
        // ];
        // m_user::where('username', 'customer-1')->update($data);
        // // //tambah data user dengan Eloquent model
        // // $data = [
        // //     'username' => 'customer-1',
        // //     'nama' => 'Pelanggan',
        // //     'password' => Hash::make('12345'),
        // //     'level_id' => '5',
        // // ];
        // // m_user::insert($data); //tambahkan data ke tables m_users   
        // // coba akses model UserModel
        // $user = m_user::all(); // ambil semua data dari tabel m_users
        // return view('user', ['data' => $user]);
        // $data = [
        //     'level_id' => 2,
        //     'username' => 'manager_tiga',
        //     'nama' => 'Manager 3',
        //     'password' => Hash::make('12345'),
        // ];
        // m_user::create($data);

        // $user = m_user::all();
        // return view('user',['data'=>$user]);

        // $user = m_user::find(1);
        // return view('user',['data'=>$user]);

        // $user = m_user::where('level_id', 1)->first();
        // return view('user', ['data' => $user]);

        // $user = m_user::firstwhere('level_id', 1);
        // return view('user', ['data' => $user]);

        // $user = m_user::findor(1, ['username', 'nama'], function () {
        //     abort(404);
        // });
        // return view('user', ['data' => $user]);
        // $user = m_user::findor(20, ['username', 'nama'], function () {
        //     abort(404);
        // });
        // return view('user', ['data' => $user]);

        // $user = m_user::findorfail(1);
        // return view('user', ['data' => $user]);
        // $user = m_user::where('username', 'manager9')->firstorfail();
        // return view('user', ['data' => $user]);

        // $user = m_user::where('level_id', 2)->count();
        // // dd($user);
        // return view('user', ['data' => $user]);
        // $user = m_user::firstOrCreate(
        //     [
        //         'username' => 'manager',
        //         'nama' => 'Manager',
        //     ],
        // );
        // return view('user', ['data' => $user]);
        // $user = m_user::firstOrCreate(
        //     [
        //         'username' => 'manager22',
        //         'nama' => 'Manager Dua Dua',
        //         'password' => Hash::make('12345'),
        //         'level_id' => 2,
        //     ],
        // );
        // return view('user', ['data' => $user]);

        // $user = m_user::firstOrNew(
        //     [
        //         'username' => 'manager',
        //         'nama' => 'Manager',
        //     ],
        // );
        // return view('user', ['data' => $user]);

        // $user = m_user::firstOrNew(
        //     [
        //         'username' => 'manager33',
        //         'nama' => 'Manager Tiga Tiga',
        //         'password' => Hash::make('12345'),
        //         'level_id' => 2,
        //     ],
        // );
        // $user->save();
        // return view('user', ['data' => $user]);

        // $user = m_user::create(
        //     [
        //         'username' => 'manager55',
        //         'nama' => 'Manager55',
        //         'password' => Hash::make('12345'),
        //         'level_id' => 2,
        //     ],
        // );
        // $user->username = 'manager56';

        // $user->isDirty();//true
        // $user->isDirty('username');//true
        // $user->isDirty('nama');//false
        // $user->isDirty(['nama','username']);//true

        // $user->isClean();//flase
        // $user->isClean('username');//flase
        // $user->isClean('nama');//true
        // $user->isClean(['nama','username']);//flase

        // $user->save();

        // $user->isDirty();//false
        // $user->isClean();//true
        // dd($user->isDirty());

        // $user = m_user::create(
        //     [
        //         'username' => 'manager11',
        //         'nama' => 'Manager11',
        //         'password' => Hash::make('12345'),
        //         'level_id' => 2,
        //     ],
        // );

        // $user->username = 'manager12';

        // $user->save();

        // $user->wasChanged();//true
        // $user->wasChanged('username');//true
        // $user->wasChanged(['username','level_id']);//true
        // $user->wasChanged('nama');//flase
        // dd($user->wasChanged(['nama','username']));//true

        // $user = m_user::all();
        // return view('user', ['data' => $user]);

        $user = m_user::with('level')->get();
        return view('user', ['data' => $user]);
    }

    public function tambah()
    {
        return view('user_tambah');
    }

    public function tambah_simpan(Request $request)
    {
        $validated = $request->validate([
            'username' => 'bail|required',
            'nama' => 'required',
            'password' => 'required',
            'level_id' => 'required',
        ]);
        m_user::create([
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => Hash::make($request->password),
            'level_id' => $request->level_id,
        ]);
        return redirect('/user');
    }

    public function ubah($id)
    {
        $user = m_user::find($id);
        return view('user_ubah', ['data' => $user]);
    }

    public function ubah_simpan($id, Request $request)
    {
        $user = m_user::find($id);

        $user->username = $request->username;
        $user->nama = $request->nama;
        $user->level_id = $request->level_id;

        $user->save();
        return redirect('/user');
    }

    public function hapus($id)
    {
        $user = m_user::find($id);
        $user->delete();

        return redirect('/user');
    }
    public function create()
    {
        return view('user.create');
    }
    public function update()
    {
        return view('user.edit');
    }
}
