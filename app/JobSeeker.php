<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class JobSeeker extends Model implements HasMedia
{
    //
	use HasMediaTrait;
	protected $fillable=['job_id','name','address','email','phone_no','gender'];
	
}
