<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        if(Auth::check()){
            return redirect()->route('leaf.home');
        }
        return view('portal.pages.login');
    }

    public function login(Request $request)
    {

        $credentials  = $request->only(['email','password']);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('leaf.home');
        }
        return back()->withInput()->with('status', 'Invalid login details!');
    }
}
