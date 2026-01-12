<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index () 
    {
        $posts = [
            'Title 0',
            'Title 1',
            'Title 2',
        ];

        return view('index')->with(['posts' => $posts]) ;
    }
}
