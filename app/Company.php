<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
	protected $fillable=['name','address','description','number_of_jobs'];

	public function resume_selection()
	{
		return $this->hasOne('App\Resume_selection');
	}
	public function jobs()
    {
        return $this->hasMany('App\Job');
    }
}
