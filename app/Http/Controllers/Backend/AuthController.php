<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;
use Flasher\Laravel\Facade\Flasher;
class AuthController extends Controller
{
    public function __contruct(){
    }

    public function index(){
        if(Auth::id() > 0 ){
            return redirect()->route('dashboard.index');
        }
        return view ('backend.auth.login');
    }
    
    public function login(AuthRequest $request)
{

    $credentials = [
        'email' => $request->input('Email'),
        'password' => $request->input('Password')
    ];


    if (Auth::attempt($credentials)) {

        toastr()->success('Login successful!');
        return redirect()->route('dashboard.index');
    }

    toastr()->error('Incorrect email or password. Please try again.');
    return redirect()->route('auth.admin');
}
    public function logout(request $request){
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
        
        toastr()->warning('Logout successful!');
        return redirect()->route('auth.admin');
    }
    
}
