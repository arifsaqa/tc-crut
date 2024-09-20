<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class registerController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function adminRegister(Request $request){
        
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|unique:users',
            'password' => 'required|string|min:5'
        ]);

        User::create([

            'name' => $request-> name,
            'email' => $request-> email,
            'role' => 2,
            'password' => bcrypt($request->password)

        ]);

        return redirect()->route('login');
    }
}
