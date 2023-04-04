<?php

namespace App\Http\Controllers;

use App\Models\HousingB;
use App\Models\Punishment;
use App\Models\Student;
// use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HousingBController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Punishment $student_id)
    {
        $stud = HousingB::get();
        $puns = Punishment::whereIn('student_id', $stud->pluck('student_id'))->latest()->get()->groupBy('student_id');

        // $puns = Punishment::get();
        // $puns = Punishment::whereIn('student_id', $stud->pluck('student_id'))->latest()->get();
        // $pun_one = Punishment::where('student_id',$student_id)->latest()->first();

        $stud_one=[];
        return view('pages.super.housing.housingB', ['stud' => $stud, 'puns' => $puns,'stud_one'=>$stud_one ]);
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //view add student 
        return view('pages.super.housing.addStudentB');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //inster student 
        $stud = new HousingB();
        // $stud->id
        $stud->student_id = $request->student_id;
        $stud->name= $request->name;
        $stud->room_number = $request->room_number ;
        $stud->room_type = $request->room_type;
        $stud->date_joined = $request->date_joined;
        $stud->phone = $request->phone;
        // $stud->punishment_id = Hash::make($request->password); 
        // $stud->punishment_id = $request->punishment_id;
        $stud->save();

        $dorm_joined='B';

        $stud = new Student();
        // $stud->id
        $stud->student_id = $request->student_id;
        $stud->name= $request->name;
        $stud->room_number = $request->room_number ;
        $stud->room_type = $request->room_type;
        $stud->date_joined = $request->date_joined;
        $stud->dorm_joined = $dorm_joined;
        $stud->phone = $request->phone;
        $stud->save();



        return redirect('housingB');
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $stud_one = HousingB::where('id',$id)->get();
        $stud = HousingB::get();
        $puns = Punishment::get();
        return view('pages.super.housing.housingB', ['stud' => $stud, 'puns' => $puns ,'stud_one'=>$stud_one]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id){
        // dd($id);
                $stud=HousingB::find($id);
                if(! $stud){
        
                    return redirect('housingB');
                }
                return view('pages.super.housing.updateStudentB', compact('stud'));
            }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, Student $student)
    public function update(Request $request, $id)
    {
        $stud = HousingB::findOrFail($id);
        $stud->student_id = $request->student_id;
        $stud->name = $request->name;
        $stud->room_number = $request->room_number;
        $stud->room_type = $request->room_type;
        $stud->date_joined = $request->date_joined;
        $stud->phone = $request->phone;
        $stud->save();

        return redirect('housingB');


        }


    /**
     * Remove the specified resource from storage.
     */


        public function destroy($student_id)
{
    $stud = HousingB::where('student_id', $student_id)->first();
    $stud1 = Student::where('student_id', $student_id)->first();
    $stud2= Punishment::where('student_id',$student_id)->first();



    if ($stud) {
        $stud->delete();
    }

    if ($stud1) {
        $stud1->delete();
    }

    if ($stud2) {
        $stud2->delete();
    }

        return redirect()->back();
    }
}

