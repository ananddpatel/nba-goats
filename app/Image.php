<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['url', 'title', 'user_id'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function getThumbnail()
    {
    	$link = explode('.jpg', $this->url);
    	$thumbnail = $link[0].'b.jpg';
    	return $thumbnail;
    }

}
