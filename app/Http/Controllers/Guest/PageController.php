<?php

namespace App\Http\Controllers\Guest;

use App\Models\Train;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }


    public function trains()
    {
        //$trains = Train::all(); // returns all trains in order
        $trains = Train::orderByDesc('id')->get();
        //dd($trains);
        return view('trains', compact('trains'));
    }

  
}

