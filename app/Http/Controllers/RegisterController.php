<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller
{
    //注册页面
    public function index()
    {
        return view('user.register');
    }

    //注册行为
    public function register()
    {
        //验证
        $this->validate(\request(),[
            'name' => 'required|min:3|max:10|unique:users,name',
            'email' => 'required|unique:users,email|email',
            'password' => 'required|min:3|max:10|confirmed',
        ]);
        //逻辑
        $name = \request('name');
        $email = \request('email');
        //明文密码加密成密文
        $password = bcrypt(\request('password'));
        User::create(compact('name','email','password'));

        //渲染(注册成功跳转到登录页面)
        return view('user.login');


    }
}
