<?php

namespace App\Http\Controllers;

use App\Models\Ferme;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'statut' => true])) {
            return redirect()->intended('/dashboard');
        }
        session()->flash('error', 'Les informations de connexion sont incorrectes.');
        return redirect()->back();
    }

    public function register(Request $request)
    {
        $ferme = Ferme::first();
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed'
        ]);
        $user = new User([
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'email' => $validatedData['email'],
            'ferme_id' => $ferme->id,
            'role_id' => $request->role,
            'password' => Hash::make($validatedData['password']),
            'statut' => true
        ]);
        $user->save();
        Auth::login($user, true);
        return redirect('/users');
    }



}
