<?php

namespace App\Http\Controllers;

use App\JobSeeker;
use App\Job;
use Illuminate\Http\Request;

class JobSeekerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('user.jobseeker.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\JobSeeker  $jobSeeker
     * @return \Illuminate\Http\Response
     */
    public function show(JobSeeker $jobSeeker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JobSeeker  $jobSeeker
     * @return \Illuminate\Http\Response
     */
    public function edit(JobSeeker $jobSeeker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JobSeeker  $jobSeeker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JobSeeker $jobSeeker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JobSeeker  $jobSeeker
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobSeeker $jobSeeker)
    {
        //
    }
    public function save(Request $request){
        $address=$request->address['addr_line1'].",".$request->address['city'].",".$request->address['state'];
        $name=$request->firstname." ".$request->lastname;
        $gender=$request->gender;
        $phone=$request->q7_phoneNumber['area'].$request->q7_phoneNumber['phone'];
        $email=$request->email;
        $job_id=$request->job_id;
        JobSeeker::create([
            'job_id'=>$job_id,
            'name'=>$name,
            'address'=>$address,
            'email'=>$email,
            'phone_no'=>$phone,
            'gender'=>$gender
        ]);
        return redirect("/job");
    }
    
}
