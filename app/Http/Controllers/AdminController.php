<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function getLogin()
    {
        return view('auth.login');
    }
    public function postLogin(Request $req)
    {
        $admin = Admin::query()->where("email", $req->email)->first();
        if(!$admin) {
            return redirect()->back()->withErrors(['email' => 'Admin does not exist']);
        }
        if(!Hash::check($req->password, $admin->password)) {
            return redirect()->back()->withErrors(['password' => 'Invalid Credentials']);
        }
        Auth::login($admin, $req->remember);
        return redirect()->intended(RouteServiceProvider::DASHBOARD);
    }

    public function adminLogin()
    {
        return view('admin.dashoard');
    }
}
