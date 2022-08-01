<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile_home()
    {
        dd(',fbl0');
        return view('profiles.home');
    }
}
