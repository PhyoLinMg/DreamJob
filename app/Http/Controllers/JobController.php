<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware(['auth','role:admin|company|user']);
    }
    public function index()
    {
        //
        $jobs=Job::where('status','accept')->get();
        return view('user.job.index',compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.panel.job.create');
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
        Job::create([
            'post'=>$request->post,
            'salary'=>$request->salary,
            'company_id'=>\Auth::user()->company_id
        ]);
        return redirect('/admin/job');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        //
        $jj=$job;
        return view('admin.panel.job.edit',compact('jj'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job)
    {
        //
        $job->post=$request->post;
        $job->salary=$request->salary;
        $job->save();
        return redirect('/admin/job');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        $job->delete();
        return redirect('/admin/job');
    }
    public function adminindex(){
        $jobs=Job::where('status','accept')->get();
        return view('admin.panel.job.index',compact('jobs'));
    }
    public function statusUpdate($id){
        $job=Job::findOrFail($id);
        if($job->status=="deny"){
            $job->status="accept";
            $job->save();
        }
        return redirect('/admin');
    }
    public function get($id){
        // dd($id);
        $job_id=$id;
        return view('user.jobseeker.index',compact('job_id'));
    }
    public function search(Request $request){
        $jobname=$request->job;
        $job = Job::where('post','LIKE','%'.$jobname.'%')->get();
        return view('user.job.searched',compact('job'));

    }
}
