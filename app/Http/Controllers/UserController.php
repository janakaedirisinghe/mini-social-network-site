<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
	public function getDashboard(){
		return view('dashboard');
	}

    public function postSignUp(Request $request){
    	$email = $request['email'];
    	$first_name = $request['first_name'];
    	$password =bcrypt($request['password'] );

    	$user = new User();
    	$user->email = $email;
    	$user->first_name = $first_name;
    	$user->password = $password;

    	$user->save();

    	return redirect()->route('dashboard');


    }

    public function postSignIn(Request $request){

    }

}

