<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class manajemenUsersController extends Controller
{
    public function index(){
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    public function addUser(Request $request){
        $request->validate([
            'name'=>'required|max:255',
            'email'=>'required|email|unique',
            'role'=>'required',
            'password'=>'password|min:6',
        ]);
        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'role'=>$request->role,
            'password'=>Hash::make($request->password),
        ]);
        return redirect()->back();
    }
}
