<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class studentController extends Controller
{
    public function index(){
        $students = Student::all();
        return view('index')->with('students', $students);
    }

    public function create() {
        return view('create');
    }

    public function store(Request $request) {

        $student = new Student;
        $student->name = $request->name;
        $student->registration_id = $request->reg_id;
        $student->department_name = $request->dept;
        $student->info = $request->info;

        $student->save();

        return redirect()->route('index');
    }
}
