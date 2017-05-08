<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

	protected $guarded = [];

	public function image()
	{
		return $this->belongsTo(Image::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}

}
