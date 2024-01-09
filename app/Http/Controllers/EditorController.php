<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;

class EditorController extends Controller
{
    public function login(){
        return view('editor.login');
    }

    public function store(Request $request)
    {
        $user = $request->all();
        // dd($user); //dump and die

        if( Auth::guard('editor')->attempt(['email'=>$user['email'], 'password'=>$user['password']])){
            return redirect()->route('editor.dashboard');
        } else {
            return view('editor.login')->with('msg', 'check data correctly');
        }
    }

    public function dashboard(){
        return view('editor.dashboard');
    }
}
