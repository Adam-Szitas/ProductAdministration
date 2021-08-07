<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

class UserController extends Controller
{

    public function index(){
        return view('welcome');
    }

    public function checkLogin(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'password' => 'required|min:3'
        ]);

        $user_data = array(
            'name'          => $request->get('name'),
            'password'      => $request->get('password')
        );

        if(Auth::attempt($user_data)){
            return redirect('user/successLogin');
        }else{
            return back()->with('error', 'Wrong Login Details');
        }
    }

    function successLogin(){
        return view('successLogin');
    }


    //
}
