<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class StudentsController extends Controller
{
    public function index()
    {
        $students = Student::all();
        
     

        return view('pages.super.deanship.deanship', ['students' => $students]);
    }
}

