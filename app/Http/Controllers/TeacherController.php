<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $teacherData = User::latest()->where('role','teacher')->paginate(3);
        return view('backend.manage_teacher', compact('teacherData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.createteacher');
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
        $validateDate = $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'phone' => 'required|max:11',
            'gender' => 'required',
            'role' => 'required',
            'date_of_birth' => 'required',
            'email' => 'required|unique:users',
            'year' => 'required',
            'image' => 'required|mimes:jpeg, jpg, png',

        ]);

        if($request->file('image')){
            $file = $request->file('image');
            $filename = date('YmdHi').uniqid().$file->getClientOriginalName();
            $file->move(public_path('upload/teacherphoto'), $filename);
        }
        else{
            $filename = 'default.png';
        }
        //Generating Admission Number
        $dataReg = rand(1,1000);
        if($dataReg < 5){
            $id_no = '000'.$dataReg;
        }
        elseif($dataReg < 100){
            $id_no = '00'.$dataReg;
        }
        elseif($dataReg < 1000){
            $id_no = '0'.$dataReg;
        }

        $teacherData = new User;
        $teacherData->name = $request->name;
        $teacherData->lastname = $request->lastname;
        $teacherData->role = $request->role;
        $teacherData->gender = $request->gender;
        $teacherData->year = $request->year;
        $teacherData->image = $filename;
        $teacherData->date_of_birth = $request->date_of_birth;
        $teacherData->email = $request->email;
        $teacherData->phone = $request->phone;
        $teacherData->address = $request->address;
        $code = rand(0000, 9999);
        $teacherData->code = $code;
        $teacherData->password = bcrypt($code);
        $final_id = 'TEA'.$request->year.$id_no;
        $teacherData->staff_id = $final_id;
        $teacherData->save();
        return redirect()->back()->with('successMsg','Teacher profile successfully registered');
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
            'name' => ['max:25'],
            'lastname' => ['max:25'],
            'image' => ['mimes:jpg, jpeg, png'],
        ]);

        $teacherupdate = User::find($id);
            if($request->file('image')){
                $file =$request->file('image');
                unlink(public_path('upload/teacherphoto/').$teacherupdate->image);
                $filename = date('YmdHi').uniqid().$file->getClientOriginalName();
                $file->move(public_path('uploads/teacherphoto'),$filename);
            }
            else{
                $filename = $teacherupdate->image;
            }
            $teacherupdate->name = $request->name;
            $teacherupdate->lastname = $request->lastname;
            $teacherupdate->phone = $request->phone;
            $teacherupdate->date_of_birth = $request->date_of_birth;
            $teacherupdate->email = $request->email;
            $teacherupdate->address = $request->address;
            $teacherupdate->image = $filename;

            $teacherupdate->save();
            return redirect()->back()->with('successMsg','Teacher profile updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteTeacher = User::find($id);
        unlink(public_path('upload/teacherphoto/').$deleteTeacher->image);
        $deleteTeacher->delete();
        return redirect()->back()->with('successMsg','Teacher  profile deleted successfully');
    }
}
