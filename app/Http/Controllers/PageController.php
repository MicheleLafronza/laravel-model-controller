<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;

class PageController extends Controller
{
    public function index(){

        $movies = Movie::all();

        return view('home', compact('movies'));
    }
    
    public function contacts(){
        return view('contacts');
    }

    public function about(){
        return view('about');
    }

    public function byvote(){

        $movies = Movie::orderBy('vote', 'desc')->get();

        return view('byvote', compact('movies'));
    }
}
