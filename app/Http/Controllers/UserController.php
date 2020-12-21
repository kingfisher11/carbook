<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // query trainings from trainings table using model
        $users = \App\Models\User::all();
        // return to view with $trainings
        //resources/view/users/index.blade.php
        return view('layouts.users.index', compact('users'));
    }
}
