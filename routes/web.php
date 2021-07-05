<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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
    return view('admin/login');
});
// phải khai báo controller đang dùng là gì, ex: use App\Http\Controllers\tên_controller;
// route lấy funciton có dạng, ex: Route::get('/login', [tên_controller::class, 'tên_hàm']);
Route::get('/login', [AdminController::class, 'Signin']);
