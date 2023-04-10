<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class StudentsController extends Controller
{
    
        public function index(Request $request)
{
    $searchQuery = $request->input('query');
    if ($searchQuery) {
        $students = Student::where('name', 'like', '%'.$searchQuery.'%')
                 ->orWhere('student_id', 'like', '%'.$searchQuery.'%')
                 ->orWhere('phone', 'like', '%'.$searchQuery.'%')
                 ->get();
    } else {
        $students = Student::all();
    }

    return view('pages.super.deanship.deanship', ['students' => $students]);

    }
        public function searchf (Request $request)
{
    $searchQuery = $request->input('query');
    if ($searchQuery) {
        $students = Student::where('name', 'like', '%'.$searchQuery.'%')
                 ->orWhere('student_id', 'like', '%'.$searchQuery.'%')
                 ->orWhere('phone', 'like', '%'.$searchQuery.'%')
                 ->get();
    } else {
        $students = Student::all();
    }

    return view('pages.user.home', ['students' => $students]);

    }


}

