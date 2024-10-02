<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class manajemenUsersController extends Controller
{
    // get data
    public function index(){
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    // create data
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

        // tampilan edit user
        public function editUser($id){
            $user = User::find($id);
            return view('admin.edit', compact('user'));
        }

    // edit data
    public function updateUser(Request $request, $id){

        $request->validate([
            'name'=>'required|max:255',
            'email'=>'required|email',
            'role'=>'required',
        ]);

        $user = User::find($id)->update(
            [
            'name'=>$request->name,
            'email'=>$request->email,
            'role'=>$request->role,
        ]);
        return redirect()->to('/admin/users');
    }



}
