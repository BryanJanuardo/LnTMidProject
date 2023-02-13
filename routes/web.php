<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\karyawan;
use App\Models\karyawanmodel;
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
    return view('home');
});
Route::get('/Listworker', function () {
    $data = karyawanmodel::all();
    return view('Listworker', [
        "data" => $data,
    ]);
})->name("listKaryawan");


Route::get('/add-karyawan', function () {
    return view('add-karyawan');
})->name('addkaryawan');

Route::get('/aboutus', function () {
    return view('aboutus');
})->name('about-us');

Route::get('/edit', function () {
    return view('edit');
})->name('edit');

Route::get('/edit/{id}', [karyawan::class, "getupdateKaryawan"])->name('updateKaryawan');
Route::put('/edit/{id}', [karyawan::class, "updateKaryawan"])->name('updateKaryawan');
Route::patch('/edit/{id}', [karyawan::class, "updateKaryawan"])->name('updateKaryawan');

Route::post('/add-karyawan', [karyawan::class, "addKaryawan"])->name("postKaryawan");

// Route::patch('/edit', [karyawan::class, "updateKaryawan"])->name("updateKaryawan");

Route::delete('/add-karyawan/{id}', [karyawan::class, "deleteKaryawan"])->name("deletekaryawan");