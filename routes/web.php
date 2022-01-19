<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginPetugasController;

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


Route::group([
    'prefix'=>config('invensa.prefix'),
],function () {
    Route::get('login',[LoginPetugasController::class, 'formLogin'])->name('petugas.login');
    Route::post('login',[LoginPetugasController::class, 'login']);

    Route::middleware(['auth:petugas'])->group(function () {
    Route::post('logout',[LoginPetugasController::class, 'logout'])->name('petugas.logout');
    Route::view('/', 'dashboard')->name('petugas.dashboard');

    Route::resource('petugas', 'PetugasController');

    });

});
