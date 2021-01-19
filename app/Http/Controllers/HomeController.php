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

        //! Get data from DB - all data

        $cars =  Car::all();
        
        // dump($cars);
        
        //! Get data from DB - filter with where

        $bestCar = Car::where('modello','fiesta')
            ->get();
        
        // dump($bestCar);

        // Return
        return view('home', compact('cars'));
     }
}
