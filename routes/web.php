<?php

use App\Http\Controllers\AuthController;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function (){
    return view('pages.dashboard');
});

Route::get('/inscription', function () {
    $roles = Role::all();
    return view('pages.adduser', ['roles' => $roles]);
})->name('inscription');

Route::get('/users', function () {
    $users = User::all();
    return view('pages.userlist', ['users' => $users]);
});

Route::get('/profile', function () {
    return view('pages.profile');
});

Route::post('/adduser', [AuthController::class, 'register'])->name('adduser');
Route::post('/login', [AuthController::class, 'login'])->name('login');


