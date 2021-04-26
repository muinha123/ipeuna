<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SiteIndexController;
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

Route::middleware('auth:sanctum')->get('/', function () {
    return view('welcome');
});

Route::get('/', [SiteIndexController::class, 'index'])->name('site.index');
Route::get('/{any}', [SiteIndexController::class, 'index'])->where('any', '^(?!api).*$')->name('site.index');

Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::group(['middleware' => 'auth:sanctum'], function () {

    // logout
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    // dashboard
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
});
