<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function add_results(){
        $admission = User::all();
        return view('backend.create_result', compact('admission'));
    }

    public function store_results(){
        
    }
}
