<?php

namespace App\Http\Controllers;

use App\Models\HousingB;
use App\Models\Student;
// use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HousingBController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stud = HousingB::get();
        return view('pages.super.housing.housingB', compact('stud'));
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
        // $stud->punishment_id = Hash::make($request->password); 
        // $stud->punishment_id = $request->punishment_id;
        $stud->save();


        return redirect('housingB');
    }

    /**
     * Display the specified resource.
     */
    public function show(HousingB $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id){
                $stud=HousingB::find($id);
                if(! $stud){
        
                    return redirect('housingB');
                }
                    
                return view('pages.super.housing.updateStudentB', compact('stud'));
        
            }

    /**
     * Update the specified resource in storage.
     */
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

        public function destroy($id)
{
    $stud = HousingB::where('id', $id)->first();
    $stud1 = Student::where('id', $id)->first();

    // if($stud && $stud->user_id == Student::user()->id){
         $stud->delete();
         $stud1->delete();       
        return back()->with('success','student  deleted successfully' );
    // }else{
        // abort(404);
    }
}
    // }

