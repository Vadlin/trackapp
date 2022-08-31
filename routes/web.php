<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Database\QueryException;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PrinterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardInputController;
use App\Http\Controllers\DashboardDaftarController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ResetPasswordController;

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

Route::get('/dashboard', function () {
    return view('dashboard.index', [
        "title" => "dashboard"
    ]);
})->middleware('auth');

Route::get('/', function () {
    return view('login.index', [
        "title" => "Login"
    ]);
});

Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/forgot', function () {
    return view('forgot', [
        "title" => "Forgot"
    ]);
});
Route::get('/profile', function () {
    return view('profile.index', [
        "title" => "Forgot"
    ]);
});

Route::get('/orders', [OrdersController::class, 'index']);
Route::get('/orders/{id}', [OrdersController::class, 'show']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);



Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);


Route::resource('/dashboard/daftar', DashboardDaftarController::class)->middleware('auth');
Route::resource('/dashboard/print', PrinterController::class)->middleware('auth');
Route::resource('/dashboard/input', DashboardInputController::class)->middleware('auth');


Route::get("/trackbarang/{id}", [BarangController::class, 'track']);
Route::post("/track_by_invoice", [BarangController::class, 'trackByInvoice']);
Route::put("/profile", [ProfileController::class, 'updateProfile']);
Route::resource("/profile", ProfileController::class)->middleware('auth');


Route::get("/reset-password/invalid", [ResetPasswordController::class, 'invalid']);
Route::get("/reset-password/sent", [ResetPasswordController::class, 'sent']);
Route::get("/reset-password/success", [ResetPasswordController::class, 'success']);

Route::post("/reset-password/token", [ResetPasswordController::class, 'getToken']);
Route::post("/reset-password", [ResetPasswordController::class, 'resetAction']);

Route::get("/reset-password/{token}", [ResetPasswordController::class, 'resetView']);
