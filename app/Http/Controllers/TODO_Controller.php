<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TODO_Controller extends Controller
{
    public function index(){
        
        return view('TODO.index');

    }
    public function save_task(Request $request){
        $data = $request->all();
        return response()->json(
            [
                "data" => $data
            ]
        );
    }
}
