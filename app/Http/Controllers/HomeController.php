<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Car;

class HomeController extends Controller
{
    /**
     * Home page 
     */

     public function index() {

        // Get data from DB

        $cars =  Car::all();
        
        dump($cars);

        return view('home', compact('cars'));
     }
}
