<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;

class PageController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('home', compact('movies'));
    }

    public function dettaglio($id)
    {
        $movie = Movie::FindOrFail($id);
        return view('movie-detail', compact('movie'));
    }
}
