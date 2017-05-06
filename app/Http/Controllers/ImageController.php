<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;

class ImageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = auth()->user()->images;
        return view('home', compact('images'));
    }

    public function create()
    {
        return view('goat.create');
    }

    public function store()
    {
        Image::create([
            'url' => request('url'),
            'title' => request('title'),
            'user_id' => auth()->user()->id
        ]);
        return redirect('home');
    }
}
