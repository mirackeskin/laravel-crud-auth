<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auth;

class AuthController extends Controller
{
    public function index(){
        return view("auth_views.login.content");
    }
}