<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Validator;
use Auth;

class AuthController extends Controller
{
    public function index(){
        return view('auth.login');
    }


    public function doLogin(LoginRequest $request){


        $user_data = array(
            'email'  => $request->get('email'),
            'password' => $request->get('password')
           );

        if(Auth::attempt($user_data)){
            return redirect('/');
        }else{
            return back()->withErrors(['err' => 'المستخدم غير موجود في السستم']);
        }

        
        
        
    }
    public function logout(){

        Auth::logout();
            return redirect('/login');
        


    }
}
