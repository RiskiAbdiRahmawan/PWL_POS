<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\m_barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class BarangController extends Controller
{
    public function index()
    {
        $barang = m_barang::all();

        // Return Json Response
        return response()->json([
            'barang' => $barang
        ], 200);
    }

    public function store(Request $request)
    {
        // Validate request data
        $validator = validator($request->all(), [
            'kategori_id' => 'required',
            'barang_kode' => 'required',
            'barang_nama' => 'required',
            'harga_beli' => 'required',
            'harga_jual' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->errors()->first()
            ], 400);
        }

        try {

            // Create barang
            $barang = m_barang::create([
                'kategori_id' => $request->kategori_id,
                'barang_kode' => $request->barang_kode,
                'barang_nama' => $request->barang_nama,
                'harga_beli' => $request->harga_beli,
                'harga_jual' => $request->harga_jual,
                'image' => $request->image->hashName(),
            ]);

            // Return Json Response
            return response()->json([
                'success' => true,
                'barang' => $barang,
            ], 200);
        } catch (\Exception $e) {
            // Return Json Response
            return response()->json([
                'success' => false,
            ], 500);
        }
    }

    public function show($id)
    {
        $barang = m_barang::find($id);
        if ($barang) {
            return response()->json($barang, 200);
        } else {
            return response()->json(['message' => 'Barang tidak ditemukan'], 404);
        }
    }

    public function update(Request $request, $id)
    {
        // Validate request data
        $validator = validator($request->all(), [
            'kategori_id' => 'required',
            'barang_kode' => 'required',
            'barang_nama' => 'required',
            'harga_beli' => 'required',
            'harga_jual' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->errors()->first()
            ], 400);
        }

        try {
            // Find barang
            $barang = m_barang::find($id);
            if (!$barang) {
                return response()->json([
                    'message' => 'Barang tidak ditemukan'
                ], 404);
            }

            $barang->kategori_id = $request->kategori_id;
            $barang->barang_kode = $request->barang_kode;
            $barang->barang_nama = $request->barang_nama;
            $barang->harga_beli = $request->harga_beli;
            $barang->harga_jual = $request->harga_jual;
            $barang->image = $request->image->hashName();

            // Update barang
            $barang->save();

            // Return Json Response
            return response()->json([
                'success' => true,
                'barang' => $barang,
            ], 200);
        } catch (\Exception $e) {
            // Return Json Response
            return response()->json([
                'success' => false,
            ], 500);
        }
    }

    public function destroy($id)
    {
        try {
            // Detail
            $barang = m_barang::find($id);
            if (!$barang) {
                return response()->json([
                    'message' => 'Barang tidak ditemukan'
                ], 404);
            }
            // Delete barang
            $barang->delete();

            // Return Json Response
            return response()->json([
                'success' => true,
                'message' => 'Data terhapus',
            ], 200);
        } catch (\Exception $e) {
            // Return Json Response
            return response()->json([
                'success' => false,
            ], 500);
        }
    }
}
