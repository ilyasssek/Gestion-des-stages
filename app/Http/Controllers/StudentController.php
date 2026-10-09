<?php

namespace App\Http\Controllers;

use App\Models\Student; //import this
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; //import this for password hashing

class StudentController extends Controller
{
    //here create all crud logic
    public function loadAllStudents(){
        $all_students = Student::all();
        return view('student',compact('all_students'));
    }

    public function loadAddStudentForm(){
        return view('add-student');
    }

    public function AddStudent(Request $request){
        // perform form validation here
        $request->validate([
            'full_name' => 'required|string',
            'email' => 'required|email|unique:students',
            'phone_number' => 'required',
            'password' => 'required|confirmed|min:4|max:8',
        ]);
        try {
             // register user here
            $new_student= new Student;
            $new_student->name = $request->full_name;
            $new_student->email = $request->email;
            $new_student->phone_number = $request->phone_number;
            $new_student->password = Hash::make($request->password);
            $new_student->save();

            return redirect('/student')->with('success','User Added Successfully');
        } catch (\Exception $e) {
            return redirect('/add/student')->with('fail',$e->getMessage());
        }
       
    }public function Editstudent(Request $request){
        // perform form validation here
        $request->validate([
            'full_name' => 'required|string',
            'email' => 'required|email',
            'phone_number' => 'required',
        ]);
        try {
             // update user here
            $update_student = Student::where('id',$request->student_id)->update([
                'name' => $request->full_name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
            ]);

            return redirect('/student')->with('success','student Updated Successfully');
        } catch (\Exception $e) {
            return redirect('/edit/student')->with('fail',$e->getMessage());
        }
    }

    public function loadeEditForm($id){
        $student = Student::find($id);

        return view('edit-student',compact('student'));
    }

    public function deletestudent($id){
        try {
            Student::where('id',$id)->delete();
            return redirect('/student')->with('success','student Deleted successfully!');
        } catch (\Exception $e) {
            return redirect('student')->with('fail',$e->getMessage());
            
        }
    }
}
