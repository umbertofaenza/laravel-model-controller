<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function index()
    {
        $page_title = 'Home';
        $movies = Movie::all();

        return view('homepage', compact('movies', 'page_title'));
    }
}