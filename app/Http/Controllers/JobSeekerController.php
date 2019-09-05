<?php

namespace App\Http\Controllers;

use App\JobSeeker;
use App\Job;
use Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        
    }
    public function save(Request $request){
        $this->count();
        $address=$request->address['addr_line1'].",".$request->address['city'].",".$request->address['state'];
        $name=$request->firstname." ".$request->lastname;
        $gender=$request->gender;
        $phone=$request->q7_phoneNumber['area'].$request->q7_phoneNumber['phone'];
        $email=$request->email;
        $job_id=$request->job_id;
        $jobseeker=JobSeeker::create([
            'job_id'=>$job_id,
            'name'=>$name,
            'address'=>$address,
            'email'=>$email,
            'phone_no'=>$phone,
            'gender'=>$gender
        ]);
        //save pdf file
        $file = $request->file('fileupload');
        $jobseeker->addMedia($file)->toMediaCollection();
        return redirect("/job");
    }
    public function download($id){
        $jobseeker=JobSeeker::findOrFail($id);
        $media=$jobseeker->getMedia();
        return response()->download($media[0]->getPath(), $media[0]->file_name);
    }
    public function adminindex(){
        $jobseekers=JobSeeker::get();
        return view('admin.panel.jobseeker.index',compact('jobseekers'));
    }
    public function updateStatus($id){
        $jobseeker=JobSeeker::findOrFail($id);
        if($jobseeker->status=="unhired"){
            $jobseeker->status='hired';
            $jobseeker->save();
            $this->sendEmail($jobseeker->name,$jobseeker->email,$jobseeker->status);
        }
        return redirect('/admin/jobseeker');
    }
    public function remove($id){

        $jobseeker=JobSeeker::findOrFail($id);
        $jobseeker->status='removed';
        $jobseeker->save();

        $this->sendEmail($jobseeker->name,$jobseeker->email,$jobseeker->status);
        return redirect('/admin/jobseeker');
        
    }
    public function count(){
        $user=\Auth::user();
        $count=$user->count;
        $user->count=$count+1;
        $user->save();
    }
    public function sendEmail($name,$email,$status){
        $fullName = "DreamJob Agency";
        $subject = "Replying to the job seeker";
        $fromEmail = 'gangsterplm@gmail.com';

        $data = array(
            "from" => $fromEmail,
            "subject" => $subject,
            'senderName' => $fullName,
            "toEmail" => $email,
            "status"=>$status,
            'name' => $name
        );

        Mail::send('email', $data, function ($message) use ($data) {
            $message->to($data['toEmail'], $data['name'])
                ->subject($data['subject']);
            $message->from('gangsterplm@gmail.com', $data['senderName']);
        });

    }
}
