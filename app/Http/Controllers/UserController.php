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

        $user = m_user::where('level_id', 2)->count();
        // dd($user);
        return view('user', ['data' => $user]);
    }
}
