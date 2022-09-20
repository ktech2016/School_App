<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SeniorSubject;
class SeniorSubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $subjectData = SeniorSubject::paginate(10);
        return view('backend.manage_senior_subject', compact('subjectData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.create_senior_subject');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
            $validateData = $request->validate([
                'subjects' => 'required|unique:senior_subjects',
            ]);
            $subjectData = new SeniorSubject();
            $subjectData->subjects = $request->subjects;
            $subjectData->save();
            return redirect()->back()->with('successMsg', 'Subject successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validatedData = $request->validate([
            'subject' => ['max:25'],
        ]);

            $subjectupdate = SeniorSubject::find($id);
            $subjectupdate->subjects = $request->subjects;
            $subjectupdate->save();
            return redirect()->back()->with('successMsg','Subject updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteSubject = SeniorSubject::find($id);
        $deleteSubject->delete();
        return redirect()->back()->with('successMsg','Subject deleted successfully');
    }
}

