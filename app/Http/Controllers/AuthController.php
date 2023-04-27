<?php

namespace App\Http\Controllers;

use App\Models\Ferme;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

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
        #dd($request->photo);
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'role' => 'required',
            'phone' => 'required|unique:users',
            'photo' => 'required|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
        $validatedData = $validator->validated();
        $user = new User;
        $user->first_name = $validatedData['first_name'];
        $user->last_name = $validatedData['last_name'];
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']);
        $user->role_id = $validatedData['role'];
        $user->phone = $validatedData['phone'];
        $user->statut = true;

        // Traitement de l'upload de la photo de profil
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            if (!in_array($image->getClientOriginalExtension(), ['jpeg', 'png', 'jpg', 'gif', 'svg'])) {
                return back()->withErrors(['photo' => 'Le type de fichier n\'est pas supporté.']);
            }
            $filename = time().'.'.$image->getClientOriginalExtension();
            $path = public_path('/uploads/profile_images/');
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            if (!$image->move($path, $filename)) {
                return back()->withErrors(['photo' => 'Erreur lors de l\'enregistrement de l\'image.']);
            }
            $user->profile_photo = $filename;
        }

        $user->save();
        return redirect()->route('userlist');
    }



}
