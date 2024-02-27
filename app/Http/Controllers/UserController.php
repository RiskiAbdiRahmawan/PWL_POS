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
        $data = [
            'nama' => 'Pelanggan Pertama'
        ];
        m_user::where('username', 'customer-1')->update($data);
        // //tambah data user dengan Eloquent model
        // $data = [
        //     'username' => 'customer-1',
        //     'nama' => 'Pelanggan',
        //     'password' => Hash::make('12345'),
        //     'level_id' => '5',
        // ];
        // m_user::insert($data); //tambahkan data ke tables m_users   
        // coba akses model UserModel
        $user = m_user::all(); // ambil semua data dari tabel m_users
        return view('user', ['data' => $user]);
    }
}
