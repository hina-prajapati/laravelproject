<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
   
    public function add(Request $request)
    {
        if ($request->method() == 'POST') {
            $request->validate([
                'name' => 'required|min:4|max:30',
                'email' => 'required',
                'password' => 'required',
                'phone' => 'required',
                'gender' => 'required',
                'language' => 'required',
                'zipcode' => 'required',
                'about' => 'required',
            ]);
    
            $data = new Student();
            $data->name = $request->name;
            $data->email = $request->email;
            $data->password = $request->password;
            $data->phone = $request->phone;
            $data->gender = $request->gender;
            $data->language = $request->language;
            $data->zipcode = $request->zipcode;
            $data->about = $request->about;
    
            // Set the user_id to the authenticated user's ID
            $data->user_id = Auth::id();

            // dd($data);
    
            $data->save();
    
            return redirect()->route('students.list')->with('success', 'Data Added Successfully');
        }
    
        return view('students.add');
    }
    


    // public function list(Request $request){
    //     $students = Student::all();
    //     return view('students.list', compact('students'));
    // }

public function list(Request $request)
{
    // Get the authenticated user's ID
    $userId = Auth::id();

    // Retrieve only the students records associated with the authenticated user
    $students = Student::where('user_id', $userId)->get();

    return view('students.list', compact('students'));
}


   public function filter(Request $request){

    $start_date = $request->start_date;
    $end_date = $request->end_date;

    $students = Student::whereDate('created_at', '>=', $start_date)->whereDate('created_at', '<=', $end_date)->get();
    return view('students.list', compact('students'));
   }


   public function destroy($id)
   {
       // Get the authenticated user's ID
       $userId = Auth::id();
   
       // Find the student record associated with the user's ID and the provided $id
       $student = Student::where('user_id', $userId)->find($id);
   
       if ($student) {
           // Delete the student record
           $student->delete();
           return redirect()->back()->with('success', 'Data Deleted Successfully');
       }
   
       // If the record is not found or doesn't belong to the user, handle the error (e.g., show a message or redirect with an error)
       return redirect()->back()->with('error', 'Data Not Found or You Do Not Have Permission to Delete');
   }
   



public function edit($id, Request $request)
{
    // Get the authenticated user's ID
    $userId = Auth::id();

    // Find the student record associated with the user's ID and the provided $id
    $student = Student::where('user_id', $userId)->find($id);

    if ($student) {
        if ($request->method() == 'POST') {
            $request->validate([
                'name' => 'required|min:4|max:30',
                'email' => 'required',
                'password' => 'required',
                'phone' => 'required',
                'gender' => 'required',
                'language' => 'required',
                'zipcode' => 'required',
                'about' => 'required',
            ]);

            // Update the student record with the new data
            $student->name = $request->name;
            $student->email = $request->email;
            $student->password = $request->password;
            $student->phone = $request->phone;
            $student->gender = $request->gender;
            $student->language = $request->language;
            $student->zipcode = $request->zipcode;
            $student->about = $request->about;
            $student->save();

            return redirect()->route('students.list')->with('success', 'Data Updated Successfully');
        }

        // Pass the student data to the edit view for rendering the form
        return view('students.edit', compact('student'));
    }

    // If the record is not found or doesn't belong to the user, handle the error (e.g., show a message or redirect with an error)
    return redirect()->route('students.list')->with('error', 'Data Not Found or You Do Not Have Permission to Edit');
}

}
