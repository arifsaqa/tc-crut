<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardUserController extends Controller
{
    public function index(){
        return view('user.dashboard');
    }
}
