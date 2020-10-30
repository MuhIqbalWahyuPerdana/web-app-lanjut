<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/about-me", function () {
	return "Nama Saya <b>Muhammad Iqbal Wahyu Perdana</b>";
});

Route::get("/testing-view", function () {
	return view('view-1');
});

use App\Http\Controllers\UtamaController;

Route::get("/utama/test", [UtamaController::class, "test"]);

/* Controller baru 1 */
use App\Http\Controllers\NewIweController;
Route::get("/new/iwe", [NewIweController::class, "iwe"]);
Route::get("/new/aku", [NewIweController::class, "aku"]);
Route::get("/new/iqbal", [NewIweController::class, "iqbal"]);

/* Controller baru 2 */
use App\Http\Controllers\IqbalWahyuController;
Route::get("iwe/kuy", [IqbalWahyuController::class, "kuy"]);
Route::get("iwe/hayuk", [IqbalWahyuController::class, "hayuk"]);
Route::get("iwe/gass", [IqbalWahyuController::class, "gass"]);

/* router dan URL baru */
Route::get("/iwe", function () {
	return "Tanggal Lahir saya 06 Februari 2000";
});

Route::get("/alamat", function () {
	return "Jl Long Bagun No.09 Rt.12";
});

Route::get("/makan", function () {
	return "makanan kesukaan saya <i><b>Sate</i></b>";
});

Route::get("/kuliah", function () {
	return "Saya menjadi Mahasiswa di <u>Universitas Muhammadiyah Kalimantan Timur</u>";
});

Route::get("/iwe1", function () {
	return "Saya Mahasiswa Semester 5";
});