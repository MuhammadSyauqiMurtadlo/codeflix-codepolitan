<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $latestMovies = Movie::orderBy('created_at', 'desc')->limit(10)->get();
        $popularMovies = Movie::orderBy('average_rating', 'desc')->limit(10)->get();

        return view('movies.index', [
            'latestMovies' => $latestMovies,
            'popularMovies' => $popularMovies,
        ]);
    }
}
