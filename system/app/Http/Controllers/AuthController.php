<?php 

namespace App\Http\Controllers;
use Auth;

class AuthController extends Controller
{
	function showLogin(){

		return view('login');

	}

	function loginProcess(){
		if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
			return redirect('admin/beranda')->with('success', 'login berhasil');
		}else{
			return back()->with('danger', 'Login gagal, Silahkan cek email dan password anda');
		}

	}

	function logout(){
		Auth::logout();
		return redirect('login');

	}

	function registration(){

	}

	function forgotPassword(){

	}
}