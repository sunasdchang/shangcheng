<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //登录页面
    public function index()
    {
        return view('user.login');
    }

    //登录行为
    public function login()
    {
        return null;
    }

    //登出行为
    public function logout()
    {
        return null;
    }
}
