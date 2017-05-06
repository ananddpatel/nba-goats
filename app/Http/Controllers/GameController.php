<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;

class GameController extends Controller
{
    public function index()
    {
    	$goats = Image::all()->random(2);
    	// return $goats;
    	return view('game.game', compact('goats'));
    }

    public function battle(Image $winner, Image $loser)
    {
    	// return [$winner, $loser];
    	// return [
    	// 	$winner,
    	// 	$loser
    	// ];
    	return redirect('/play');
    }

}
