<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function home() {

        $movies = Movie::all();  //SELECT * FROM "movies"

        // dd($movies);

        return view('home', compact('movies') );
    }
}
