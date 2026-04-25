<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {

        $appName = "404 Cafe";

        $restaurants = \App\Models\Restaurant::inRandomOrder()->take(5)->get();

            // home/index.blade.php ugradyar
        return view('home.index', compact('appName', 'restaurants')); 
    }
}
