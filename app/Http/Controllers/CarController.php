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

    public function show(Car $car)
    {
        // find id on table using model
        // this function is using Binding Model

        // return to view
        return view('layouts.cars.show', compact('car'));
    }

    public function edit($id)
    {
        // find id on table using model
        $car = Car::find($id);


        // return to view
        return view('layouts.cars.edit', compact('car'));
    }

    public function update($id, Request $request)
    {
        // find id at tables
        $car = Car::find($id);

        // update training with edited attributes
        // method 2 - mass assignment
        $car->update($request->only('name', 'model', 'price', 'year', 'plate'));

        // return to trainings
        return redirect()->route('car:index');
    }

    public function delete(Car $car)
    {
        // find id on table using model
        //$training = Training::find($id);
        // this function is using Binding Model
        $car->delete();

        // return to view
        return redirect()->route('car:index');
    }
}
