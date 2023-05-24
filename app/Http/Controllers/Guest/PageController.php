<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $movies = Movie::all();
        return view('home', compact('movies'));
    }
    public function showDescName($order){
            if($order === "vote"){
                $movies = Movie::orderBy($order, "desc")->get();
            }
            else{
                $movies = Movie::orderBy($order, "asc")->get();
            }
        return view('home', compact('movies', 'order'));
    }
}
