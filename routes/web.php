<?php

use App\Http\Controllers\PacketController;
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

Route::get('/', [PacketController::class, 'index']);
Route::post('/',[PacketController::class, 'upload']);

Route::get('/download', [PacketController::class, 'export'])->name('download');

