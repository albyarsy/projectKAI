<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'email' => 'required|unique:users',
            'password' => 'required|min:5|max:50'
        ]);

        User::create($validatedData);
        
        return redirect()->to('/login')->with('success', 'Registrasi Berhasil!');
    }
}
