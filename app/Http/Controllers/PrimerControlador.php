<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimerControlador extends Controller
{
    function index () {
        
        $posts = ['post 1', 'post 2'];
        return view('contact', compact('posts'));
        // return view('contact', ['posts' => $posts]);
        // return view('contact', ['name' => 'Guillermo']);
    }

    function otro($post=40, $otro=50) {
        echo $post;
        echo $otro;
    }
}
