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
    	$data = (new \App\EloCalculator)::calculateElo($winner, $loser);
    	$winner->win($data['winner']);
    	$loser->lose($data['loser']);
    	return view('game.results', compact('data', 'winner', 'loser'));
    }

    public function leaderboard()
    {
    	$top_10 = Image::orderBy('elo', 'desc')->take(10)->get();
    	// return $top_10;
    	return view('game.leaderboard', compact('top_10'));
    }

}
