<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    public function users()
    {
        $users = User::all();
        return $users;
    }
}
