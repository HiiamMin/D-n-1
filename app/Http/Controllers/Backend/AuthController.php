<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function __contruct(){

    }

    public function login(){
        return view ('backend.auth.login');
    }
}
