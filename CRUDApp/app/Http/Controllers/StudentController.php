<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    // Show the form to create a new student
    public function create()
    {
        return view('students.create');
    }

    // Store the new student in the database
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'studentid'=>'required|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'phone_number' => 'required|string|max:20',
            'grade' => 'required|string|max:10',
        ]);

        Student::create($validatedData);

        return redirect()->route('students.create')->with('success', 'Student added successfully!');
    }
    public function searchForm()
    {
        // Return the view for searching
        return view('students.search');
    }

    public function search(Request $request)
{
    $student_id = $request->input('studentid');
    $student = Student::where('studentid', $student_id)->first();

    if ($student) {
        return view('students.search', compact('student'));
    } else {
        return redirect()->back()->with('error', 'Student not found');
    }
}
}
