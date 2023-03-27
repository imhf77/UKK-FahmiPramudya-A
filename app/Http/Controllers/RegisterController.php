<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class RegisterController extends Controller
{
    public function index(){
        return view('Register.index');
    }
    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            "nik" => "required",
            "nama" => "required",
            "username" => "required",
            "telp" => "required",
            "password" => "required"
        ]);
        $validatedData['password'] = bcrypt($validatedData['password']);
        Masyarakat::create($validatedData);
        return redirect('/login')->with('success' , 'Registration Successfull,Please Sign-In Now!');
    }
}

