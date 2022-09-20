<?php

namespace App\Http\Controllers;

use App\Models\AssignClass;
use Illuminate\Http\Request;

class AssignClassController extends Controller
{
    //
    public function store(Request $request){
        $validateData = $request->validate([
            'admission_num' =>'required|unique:assign_classes',
            'classes'=> 'required',
        ]);
        $classData = new AssignClass();
        $classData->admission_num = $request->admission_num;
        $classData->classes = $request->classes;
        $classData->save();
        return redirect()->back()->with('successMsg', 'Class successfully assigned');
    }

}
