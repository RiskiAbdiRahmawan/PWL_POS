<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\m_barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
       return m_barang::all();
    }

    public function store(Request $request)
    {
        $barang = m_barang::create($request->all());
        return response()->json($barang, 201);
    }

    public function show(m_barang $barang)
    {
        return $barang;
    }

    public function update(Request $request, m_barang $barang)
    {
        $barang->update($request->all());
        return $barang;
    }

    public function destroy(m_barang $barang)
    {
        $barang->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data Terhapus',
        ]);
    }
}
