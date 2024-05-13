<?php

use App\Http\Controllers\Api\BarangController;
use App\Http\Controllers\Api\KategoriController as KController;
use App\Http\Controllers\Api\LevelController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TransaksiController;
use App\Models\t_penjualan;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register',App\Http\Controllers\Api\RegisterController::class)->name('register');
Route::post('/register1',App\Http\Controllers\Api\RegisterController::class)->name('register1');
Route::post('/login',App\Http\Controllers\Api\LoginController::class)->name('login');
Route::middleware('auth:api')->get('/user', function (Request $request){
    return $request->user();
});
Route::post('/logout', App\Http\Controllers\Api\LogoutController::class)->name('logout');

Route::get('levels',[LevelController::class,'index']);
Route::post('levels',[LevelController::class,'store']);
Route::get('levels/{level}',[LevelController::class,'show']);
Route::put('levels/{level}',[LevelController::class,'update']);
Route::delete('levels/{level}',[LevelController::class,'destroy']);
Route::get('users',[UserController::class,'index']);
Route::post('users',[UserController::class,'store']);
Route::get('users/{user}',[UserController::class,'show']);
Route::put('users/{user}',[UserController::class,'update']);
Route::delete('users/{user}',[UserController::class,'destroy']);
Route::get('kategoris',[KController::class,'index']);
Route::post('kategoris',[KController::class,'store']);
Route::get('kategoris/{kategori}',[KController::class,'show']);
Route::put('kategoris/{kategori}',[KController::class,'update']);
Route::delete('kategoris/{kategori}',[KController::class,'destroy']);
Route::get('barangs',[BarangController::class,'index']);
Route::post('barangs',[BarangController::class,'store']);
Route::get('barangs/{barang}',[BarangController::class,'show']);
Route::put('barangs/{barang}',[BarangController::class,'update']);
Route::delete('barangs/{barang}',[BarangController::class,'destroy']);
Route::get('penjualans', [TransaksiController::class, 'index']);
Route::post('penjualans', [TransaksiController::class, 'store']);
Route::get('penjualans/{penjualans}', [TransaksiController::class, 'show']);
Route::put('penjualans/{penjualans}', [TransaksiController::class, 'update']);
Route::delete('penjualans/{penjualans}', [TransaksiController::class, 'destroy']);
