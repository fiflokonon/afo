<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GenerationController;
use App\Models\Generation;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
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
})->name('dashboard');

Route::get('/addgeneration', function (){
    return view('pages.addgeneration');
})->name('new-generation');
Route::get('/inscription', function () {
    $roles = Role::all();
    return view('pages.adduser', ['roles' => $roles]);
})->name('inscription');

Route::get('/generationlist', function (){
    $generations = Generation::all();
    foreach ($generations as $generation)
    {
        $carbonDate = Carbon::parse($generation->date_arrive);
        $generation->date_arrive = $carbonDate->locale('fr_FR')->isoFormat('LL');
    }
    $colors = [
        'bg-primary',
        'bg-secondary',
        'bg-info'
    ];

    return view('pages.generationlist', ['generations' => $generations, 'colors' => $colors] );
})->name('generationlist');

Route::get('/users', function () {
    $users = User::all();
    return view('pages.userlist', ['users' => $users]);
})->name('userlist');

Route::get('/profile/{id?}', function ($id = null) {
    $roles = Role::all();
    if ($id) {
        $user = User::findOrFail($id);
        if ($user)
            return view('pages.profile', ['user' => $user, 'roles' => $roles, 'title' => 'Détails Utilisateur']);
        else
            return redirect('/');
    }
    else
    {
        if (Auth::check())
        {
            return view('pages.profile', ['user' => Auth::user(), 'roles' => $roles, 'title' => 'Profil']);
        }
        else
        {
            return redirect('/');
        }
    }
})->name('profile');


Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/adduser', [AuthController::class, 'register'])->name('adduser');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/addphoto/{id}', [AuthController::class, 'uploadPhoto'])->name('addphoto');
Route::post('/updateuser/{id}', [AuthController::class, 'updateUser'])->name('updateuser');
Route::post('/addgeneration', [GenerationController::class, 'addGeneration'])->name('addgeneration');


