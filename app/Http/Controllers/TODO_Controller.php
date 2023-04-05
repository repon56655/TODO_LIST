<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TODO_Controller extends Controller
{
    public function index(){
        // return view("backend/TODO/index");
        return view('TODO.index');

    }
}
