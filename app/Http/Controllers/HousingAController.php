<?php

namespace App\Http\Controllers;

use App\Models\HousingA;
use App\Models\Punishment;
use App\Models\Student;
// use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HousingAController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $stud = HousingA::get();
        $puns = Punishment::whereIn('student_id', $stud->pluck('student_id'))->latest()->get()->groupBy('student_id');

        // $puns = Punishment::get();
        // $puns = Punishment::whereIn('student_id', $stud->pluck('student_id'))->latest()->get();
        // $pun_one = Punishment::where('student_id',$student_id)->latest()->first();

        $stud_one=[];
        $searchQuery = $request->input('search');
    $searchQuery = $request->input('query');
    if ($searchQuery) {
        $stud = HousingA::where('name', 'like', '%'.$searchQuery.'%')
                 ->orWhere('student_id', 'like', '%'.$searchQuery.'%')
                 ->orWhere('phone', 'like', '%'.$searchQuery.'%')
                 ->get();
    } else {
        $stud = HousingA::all();
    }

        return view('pages.super.housing.housingA', ['stud' => $stud, 'puns' => $puns,'stud_one'=>$stud_one ]);
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //view add student 
        return view('pages.super.housing.addStudentA');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //inster student 
        $stud = new HousingA();
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

        $dorm_joined='A';

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



        return redirect('housingA');
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $stud_one = HousingA::where('id',$id)->get();
        $stud = HousingA::get();
        $puns = Punishment::get();
        return view('pages.super.housing.housingA', ['stud' => $stud, 'puns' => $puns ,'stud_one'=>$stud_one]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id){
        // dd($id);
                $stud=HousingA::find($id);
                if(! $stud){
        
                    return redirect('housingA');
                }
                return view('pages.super.housing.updateStudent', compact('stud'));
            }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, Student $student)
    public function update(Request $request, $id)
    {
        $stud = HousingA::findOrFail($id);
        $stud->student_id = $request->student_id;
        $stud->name = $request->name;
        $stud->room_number = $request->room_number;
        $stud->room_type = $request->room_type;
        $stud->date_joined = $request->date_joined;
        $stud->phone = $request->phone;
        $stud->save();
        
        $stud = Student::findOrFail($id);
        $stud->student_id = $request->student_id;
        $stud->name = $request->name;
        $stud->room_number = $request->room_number;
        $stud->room_type = $request->room_type;
        $stud->date_joined = $request->date_joined;
        $stud->phone = $request->phone;
        $stud->save();


        return redirect('housingA');


        }


    /**
     * Remove the specified resource from storage.
     */


        public function destroy($student_id)
{
    $stud = HousingA::where('student_id', $student_id)->first();
    $stud1 = Student::where('student_id', $student_id)->first();
    Punishment::where('student_id', $student_id)->delete();



    if ($stud) {
        $stud->delete();
    }

    if ($stud1) {
        $stud1->delete();
    }




        return redirect()->back();
    }
}

