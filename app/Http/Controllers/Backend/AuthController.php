<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function __contruct(){

    }


    public function index(){
        return view ('backend/auth/login');
    }

    public function login() { 
        echo 1;die();
    }
}
