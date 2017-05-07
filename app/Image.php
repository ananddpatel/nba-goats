<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['url', 'title', 'user_id', 'elo', 'wins', 'losses'];

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

    public function win($data)
    {
        $this->update([
            'wins' => $this->wins + 1,
            'elo' => $data['updated']
        ]);
        // $this->save();
    }

    public function lose($data)
    {
        // return $this->losses;
        $this->update([
            'losses' => $this->losses + 1,
            'elo' => $data['updated']
        ]);
        // $this->save();
    }
}
