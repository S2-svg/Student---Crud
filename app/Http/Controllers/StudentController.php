<?php

namespace App\Http\Controllers;

use App\Models\Student;

// use Illuminate\Http\Request;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $students = Student::all();
        return view('students.list', compact('students'));
    }

    public function create()
    {
        $types = Student::all();
        return view('students.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        Student::create([
            'name' => request()->name,
            'email' => request()->email,
            'phone' => request()->phone,

        ]);
        return redirect('/student');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $student = Student::find($id);
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $student = Student::find($id);
        $student->update([
            'name' => request()->name,
            'email' => request()->email,
            'phone' => request()->phone,
        ]);
        return redirect('/student');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return Redirect('/student');
    }
}
