<?php

namespace App\Http\Controllers;

use App\Mail\RegisterMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Psy\Util\Str;

class UserRegisterController extends Controller
{
    public function showRegister(){
        return view('user.register');
    }

    public function register(){
        $this->validate(request(),[
            'username' => 'required | unique:users, username |alpha_dash',
            'full_name' => 'required|min:4',
            'email' => 'required| unique:users, email',
            'age' => 'required|numeric',
            'password '=>'required|confirmed|min:4',
        ]);
      User::create([
            'username' => request('username'),
            'full_name' => request('full_name'),
            'email' => request('email'),
            'age' => request('age'),
            'password' => bcrypt(request('password')),

        ]);


        /*$token= Str::random(30);
        $user->emailVerify()->create([
            'token'=> $token
        ]);

        $link= "www.example.com/".$user->email.'/'.$token;
        Mail::to($user->email)->send(new RegisterMail($link));*/
        return redirect('/');

    }

}
