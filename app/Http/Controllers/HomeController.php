<?php

namespace App\Http\Controllers;

use App\Movie;
use App\Schedule;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	function __construct()
	{

	}
	// Home View
	public function index()
	{
		$movies = Movie::latest()->get();
		return view('home.index' , compact('movies'));
	}

    	// Single Movie Details
	public function movieDetails(Movie $movie)
	{
		// Get Schedule Of Current Movie
		$schedules = Schedule::where('movie_id' , $movie->id)->get();
		// Return Movie And Schedule Details
		return view('movie.index' , compact('movie',  'schedules'));
	}

}
