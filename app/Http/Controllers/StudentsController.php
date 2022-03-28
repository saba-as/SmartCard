<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Requests\newStudentRequest;

class StudentsController extends Controller
{
    public function index()
    {

        $students = Student::paginate(15);
        return view('students.list', compact('students'));
    }


    public function view_new()
    {

        return view('students.new');
    }

    public function new_student(newStudentRequest $request)
    {


        // Save the file locally in the storage/public/ folder under a new folder named /product
        $imageName = 'image' . time().'.'.$request->image->extension();

        $request->image->storeAs('public/images', $imageName);

        // Store the record, using the new file hashname which will be it's new filename identity.
        $student = new Student([
            "name" => $request->get('name'),
            "image" => 'storage/images/' . $imageName,
            'department' => $request->get('department'),
            'id_number' => $request->get('id_number'),
            'study' => $request->get('study'),
            'expire_at' => $request->get('expire_at'),
            'student_status' => $request->get('student_status'),
        ]);

        // Finally, save the record.
        $student->save();

        return back();
    }


    public function view_profile($id){

        $student = Student::findOrFail($id);

        
        return view('students.profile', compact('student'));
    }
    public function view_update()
    {
        return view('students.update');
    }
}
