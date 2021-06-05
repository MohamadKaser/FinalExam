<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function addStudent(){
        return view('addStudent');
    }

    public function addStudentSubmit(Request $req){
        DB::table('student')->insert([
            'name' => $req->name,
            'surname' => $req->surname,
            'department' => $req->department
        ]);

        return back()->with('student_created', 'Student is created successful');
    }
}
