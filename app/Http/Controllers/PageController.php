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

    function about()
    {
        $page_title = 'About';
        $about_msg = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et perspiciatis hic rerum voluptas quibusdam consequatur pariatur illo repellat, facilis velit praesentium, laboriosam consectetur laborum debitis repudiandae officiis adipisci amet. Distinctio?";

        return view('about', compact('about_msg', 'page_title'));
    }
}