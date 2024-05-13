<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\t_penjualan;
use Illuminate\Support\Facades\Validator;

class TransaksiController extends Controller
{
    public function index()
    {
        // All penjualan
        $penjualan = t_penjualan::all();

        // Return Json Response
        return response()->json([
            'penjualan' => $penjualan
        ], 200);
    }
    public function store(Request $request)
    {
        // Validate request data
        $validator = validator($request->all(), [
            'user_id' => 'required|integer',
            'pembeli' => 'required|string|max:50',
            'penjualan_kode' => 'required|string|max:20|unique:t_penjualans,penjualan_kode',
            'penjualan_tanggal' => 'required|date_format:Y-m-d H:i:s',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->errors()->first()
            ], 400);
        }

        try {
            // Get file from request and store it
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('public/images', $imageName);

            // Create penjualan
            $penjualan = t_penjualan::create([
                'user_id' => $request->user_id,
                'pembeli' => $request->pembeli,
                'penjualan_kode' => $request->penjualan_kode,
                'penjualan_tanggal' => $request->penjualan_tanggal,
                'image' => $imageName // simpan nama file gambar, bukan hash name
            ]);

            // Return Json Response
            return response()->json([
                'success' => true,
                'penjualan' => $penjualan,
            ], 200);
        } catch (\Exception $e) {
            // Return Json Response with error message
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ], 500);
        }
    }


    public function show($id)
    {
        $penjualan = t_penjualan::find($id);
        if ($penjualan) {
            return response()->json($penjualan, 200);
        } else {
            return response()->json(['message' => 'penjualan tidak ditemukan'], 404);
        }
    }
    public function update(Request $request, $id)
    {
        // Validate request data
        $validator = validator($request->all(), [
            'user_id' => 'required|integer',
            'pembeli' => 'required|string|max:50',
            'penjualan_kode' => 'required|string|max:20|unique:t_penjualans,penjualan_kode',
            'penjualan_tanggal' => 'required|date_format:Y-m-d H:i:s',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->errors()->first()
            ], 400);
        }

        try {
            // Find penjualan
            $penjualan = t_penjualan::find($id);
            if (!$penjualan) {
                return response()->json([
                    'message' => 'penjualan tidak ditemukan'
                ], 404);
            }

            $penjualan->user_id = $request->user_id;
            $penjualan->pembeli = $request->pembeli;
            $penjualan->penjualan_kode = $request->penjualan_kode;
            $penjualan->penjualan_tanggal = $request->penjualan_tanggal;
            $penjualan->image = $request->image->hashName();

            // Update penjualan
            $penjualan->save();

            // Return Json Response
            return response()->json([
                'success' => true,
                'penjualan' => $penjualan,
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
            $penjualan = t_penjualan::find($id);
            if (!$penjualan) {
                return response()->json([
                    'message' => 'penjualan tidak ditemukan'
                ], 404);
            }

            // Delete penjualan
            $penjualan->delete();

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
