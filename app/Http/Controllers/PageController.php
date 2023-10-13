<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function index()
    {
        $movies = Movie::all();

        return view('homepage', compact('movies'));
    }
}