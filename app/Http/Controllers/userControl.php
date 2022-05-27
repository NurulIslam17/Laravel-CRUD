<?php

namespace App\Http\Controllers;
use App\Models\student;
use Illuminate\Http\Request;
class userControl extends Controller
{

    public function addInfo()
    {  
        return view('index');
    }
    public function display()
    {
        $data = student::all();
        return view('display',compact('data'));
    }
    public function add_student(Request $request)
    {
        $student = new student();
        $student->id = $request->id;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->department = $request->dept;

        $image = $request->image;
        $imgNAme = time(). '.'.$image->getClientoriginalExtension();
        $image->move('studentImage',$imgNAme);
        $student->image = $imgNAme;

        $student->save();
        return redirect('/');
    }
    // Delete data
    public function deleteData($id)
    {
        $data = student::find($id);
        $data->delete();
        return redirect()->back();
    }
    //Edit
    public function edit($id)
    {
        $data = Student::find($id);
        return view('edit',compact('data'));
    }
    //update
    public function update(Request $request,$id)
    {
        $student = student::find($id);
        $student->id = $request->id;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->department = $request->department;

        $image = $request->image;
        $imgNAme = time(). '.'.$image->getClientoriginalExtension();
        $image->move('studentImage',$imgNAme);
        $student->image = $imgNAme;

        $student->save();
        return redirect('/');
    }
}


