<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\JobSeeker;

class AdminController extends Controller
{
	public function __construct(){
		$this->middleware(['auth','role:admin|company']); 
	}
	public function admin(){
		$jobseekers=JobSeeker::get();
		return view('admin.panel.dashboard',compact('jobseekers'));
	}

	public function adminregister(){
		return view('admin.panel.adminregister');
	}


	public function adminstore(Request $request){
		$user=User::create([
			'name'=>$request->name,
			'email'=>$request->email,
			'password'=>bcrypt($request->password),
			'role'=>$request->role
		]);
		$user->save();
	}

}
