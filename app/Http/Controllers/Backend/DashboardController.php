<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;
class DashboardController extends Controller
{
    public function __construct(){

    }
    public function index(){


        $template = 'backend.dashboard.index';

        return view('backend.dashboard');
    }
}