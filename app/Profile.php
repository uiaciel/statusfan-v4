<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
	protected $fillable = ['kota','bio','user_id'];
	public function user()
	{
		return $this->belongsTo('App\User');
	}
    //
}
