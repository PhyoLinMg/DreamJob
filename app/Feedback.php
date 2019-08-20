<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    //
    protected $fillable=['description'];

    public function jobseeker()
    {
        return $this->belongsTo('App\JobSeeker','id');
    }
}
