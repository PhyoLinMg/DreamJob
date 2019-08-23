<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Job;
use App\JobSeeker;
use App\Company;

class AdminController extends Controller
{
	public function __construct(){
		$this->middleware(['auth','role:admin|company']); 
	}
	public function admin(){
		$jobseekers=JobSeeker::get();
		$jobs=Job::where('status','deny')->get();
		return view('admin.panel.dashboard',compact('jobseekers','jobs'));
	}

	public function adminregister(){
		$companies=Company::get();
		return view('admin.panel.adminregister',compact('companies'));
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
