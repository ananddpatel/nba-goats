<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use App\Comment;

class CommentController extends Controller
{
    public function show(Image $image)
    {
    	return view('goat.comments', compact('image'));
    }

    public function store(Image $image)
    {
    	$this->validate(request(), ['body' => 'required']);
    	Comment::create([
    		'user_id' => auth()->user()->id,
    		'image_id' => $image->id,
    		'body' => request('body'),
    	]);
    	return back();
    }

}
