<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SystemProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login', [LoginController::class, 'authenticate'])->name('authenticate');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'auth:sanctum'], function () {

    // users
    Route::get('users', [UserController::class, 'getAll'])->name('admin.users');
    Route::post('user', [UserController::class, 'save'])->name('admin.users.save');
    Route::get('user/{id}', [UserController::class, 'get'])->name('admin.users.get');
    Route::put('user/{id}', [UserController::class, 'update'])->name('admin.users.update');
    Route::delete('user/{id}', [UserController::class, 'delete'])->name('admin.users.delete');

    // system profile
    Route::get('system/profile', [SystemProfileController::class, 'getAll'])->name('admin.system.profile');
});
