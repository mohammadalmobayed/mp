<?php

namespace App\Http\Controllers;

use App\Models\Finance;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class FinanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $students = Student::all(); 
        $data = ['students',$students];
        return view('pages.super.finance.finance',compact('students'));
        // return View::make('pages.super.finance.finance', $data)
        //    ->with('students', $students)
        //    ->with('content', View::make('pages.user.home', $data));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    //     $students = Student::all(); 
    //  return view('pages.user.home.finance',compact('students'));




    }
    public function user(){
        $students = Student::all(); 
        $data = ['students',$students];

     return view('pages.user.home',compact('students'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    
    {
        $students = Student::where('id', $id)->first() ;

    return view('pages.super.finance.singleFinance', compact('students'));
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Finance $finance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Finance $finance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Finance $finance)
    {
        //
    }
}
