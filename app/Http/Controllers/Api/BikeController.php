<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Bike;

class BikeController extends Controller
{
   public function index(){
        //    return 'Bikes api result Json';

        // Get Bikes from database
        $bikes = Bike::all();
        // dd($bikes);

        // Return Json
        return response()->json($bikes);
   }
}
