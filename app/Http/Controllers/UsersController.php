<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\newUserRequest;
use Hash;

class UsersController extends Controller
{
    public function index(){

        $users = User::get();
        return view('users.list', compact('users'));
    }
    
    public function view_new(){
        return view('users.new');
    }

    public function add_user(newUserRequest $request){
        $userData = array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),

        );

        if(User::create($userData)){
            return redirect()->back()->with('userAdded', 'تم اضافة المستخدم بنجاح');   

        }else{
            return redirect()->back()->with('error', 'يوجد خطأ ما');   
        }

    }

    public function view_update(){
        return view('users.update');
    }
    public function delete_user($id){

        $user = User::find($id);

        if($user->delete()){
            return redirect()->back()->with('userDeleted', 'تم حذف المستخدم بنجاح');   
        }

    }

    
}
