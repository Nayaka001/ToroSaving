<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function home(){
        return view('home');
    }
    public function login(){
        return view('login');
    }
    public function action(Request $request){
        $user = User::where('kode', $request->kode)->first();

        if ($user) {
            Auth::login($user);
            if ($user->role == 'Admin') {
                return redirect()->route('dashboard.admin')->with('Berhasil', 'Login Berhasil');
            } elseif ($user->role == 'Member') {
                return redirect()->intended('member/dashboard');
            }
        }
        return back();
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
