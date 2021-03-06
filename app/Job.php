<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    //
	protected $fillable=['post','salary','company_id','category'];

	public function jobseekers()
	{
		return $this->belongsToMany('App\JobSeekers');
	}
	 public function company()
    {
        return $this->belongsTo('App\Company');
    }
}
