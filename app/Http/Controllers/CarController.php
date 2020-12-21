<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        // query trainings from trainings table using model
        $cars = \App\Models\Car::all();
        // return to view with $trainings
        //resources/view/users/index.blade.php
        return view('layouts.cars.index', compact('cars'));
    }
}
