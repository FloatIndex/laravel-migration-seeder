<?php

namespace App\Http\Controllers;

use App\Tour;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $tour = Tour::First();

        return view('home', compact('tour'));
    }
}
