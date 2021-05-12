<?php

namespace App\Http\Controllers;

use App\Student;
use DB;

use Illuminate\Http\Request;


class StudentController extends Controller
{
    public function Student()
    {
        return view('student.create');
    }

    public function StoreStudent(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:30|min:4',
            'email' => 'required|unique:students|max:30|min:4',
            'phone' => 'required|unique:students|max:13|min:11',
        ]);

        $student = new Student;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;

        $student->save();
        $notification=array(
            'messege'=>'Successfully Student Added',
            'alert-type'=>'success'
            );
            return Redirect()->route('allstudent')->with($notification);
    }

    public function AllStudent()
    {
        $student = Student::all();
        return view('student.allstudent',compact('student'));
    }

    public function ViewStudent($id)
    {
        //$student=DB::table('students')->where('id',$id)->first();

        $student = Student::findorfail($id);
        return view('student.viewstudent',compact('student'));
    }

    public function DeleteStudent($id)
    {
        $student=Student::findorfail($id);
        $student->delete();
        $notification=array(
            'messege'=>'Successfully Student Deleted',
            'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
    }

    public function EditStudent($id)
    {
        $student = Student::findorfail($id);
        return view('student.editstudent',compact('student'));
    }

    public function UpdateStudent(Request $request, $id)
    {
        $student=Student::findorfail($id);
        $student->name=$request->name;
        $student->email=$request->email;
        $student->phone=$request->phone;
        $student->save();
        $notification=array(
            'messege'=>'Successfully Student Updated',
            'alert-type'=>'info'
            );
            return Redirect()->route('allstudent')->with($notification);
    }
}
