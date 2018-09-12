<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\UserModel\users;
use Auth;
class LoginController extends Controller
{
  
    public function getLogin(){
        return view('login');
    }
    public function postLogin(LoginRequest $request){

		$user = $request->user;
		$pass = $request->pass;
		

		if((Auth::attempt(['user_email'=>$user,'password'=>$pass]))){
			return redirect('admin');
		}
		else {
			return view('login',['fail'=>'Đăng nhập thất bại']);
		}
		
	}
}
