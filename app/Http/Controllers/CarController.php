<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

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

    public function create()
    {
        // return function create form
        // resources/view/training/create.blade.php
        return view('layouts.cars.create');
    }

    public function store(Request $request)
    {
        // store all data from form to training table
        // dd($request->all()); //debug
        // method 1 POPO (plain old php object)
        $car = new Car(); 
        $car->name = $request->name;
        $car->model = $request->model;
        $car->price = $request->price;
        $car->year = $request->year;
        $car->plate = $request->plate;
        //$car->user_id = auth()->user()->id;
        $car->save();
        // return to index
        return redirect()->route('car:index');
    }
}
