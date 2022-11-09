<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;


class login extends Controller
{
    function index()
    {
        return view("login/login");
    }
    function login(Request $request)
    {

        Session::flash('name', $request->input('name'));
        $request->validate([
            'name => required',
            'password => required',
        ],[
            'name.required' => 'Username Wajib Diisi',
            'password.required' => 'Password Wajib Diisi'
        ]);

        $infologin = [
            'name' => $request->name,
            'password'=> $request->password
        ];

        if(Auth::attempt($infologin)){
            return redirect('Admin/dasbord')->with('success', 'Berhasil login');
        } else{
            return redirect('login')->withErrors('Username dan password yang dimasukkan tidak sesuai');
        }
    }
}
