<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobSeeker extends Model
{
    //
    protected $fillable=['job_id','name','address','email','phone_no','gender'];
    
}
