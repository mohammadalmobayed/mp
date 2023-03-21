<?php

namespace App\Http\Controllers;

use App\Models\HousingInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HousingInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stud = HousingInfo::get();
        return view('pages.super.housing.HousingInfo', compact('stud'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create(){

        //view add student 
        return view('pages.super.housing.addhousingInfo');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {    

        //inster student 
        $stud = new HousingInfo();
        $stud->id;
        $stud->total_dorms = $request->total_dorms;
        $stud->total_students= $request->total_students;
        $stud->total_rooms = $request->total_rooms ;
        $stud->total_supervisors = $request->total_supervisors;
        $stud->rooms_occupied = $request->rooms_occupied;
        // $stud->phone = $request->phone;
        // $stud->punishment_id = Hash::make($request->password); 
        // $stud->punishment_id = $request->punishment_id;
        $stud->save();

        return redirect('info');
    }

    /**
     * Display the specified resource.
     */
    public function show(HousingInfo $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id){
                $stud=HousingInfo::find($id);
            //    dd($stud);
                if(! $stud){
        
                    return redirect('info');
                }
                    
                return view('pages.super.housing.updatehousingInfo', compact('stud'));
        
            }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, Student $student)
    public function update(Request $request, $id)
    {
        $stud = HousingInfo::findOrFail($id);
        $stud->total_dorms = $request->total_dorms;
        $stud->total_students = $request->total_students;
        $stud->total_rooms = $request->total_rooms;
        $stud->total_supervisors = $request->total_supervisors;
        $stud->rooms_occupied = $request->rooms_occupied;
        // $stud->phone = $request->phone;
        // $stud->role = $request->role;
        // $user->password = Hash::make($request->password);
        // $user->job_title = $request->job_title;
        // if ($request->hasFile('User_Image')) {
        //     $user_img = $request->file('User_Image')->getClientOriginalName();
        //     $request->file('User_Image')->storeAs('public/userimage',$user_img);
        //     $user->User_Image = $user_img;
        // }
        $stud->save();

        return redirect('info');


        }


    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(Student $id)
    // {
        
        // $stud = Student::find($id);
        // $stud->delete();
        // return back()->with('success','User deleted successfully' );
        // // return redirect('users');

        public function destroy($id)
{
    $stud = HousingInfo::where('id', $id)->first();
    // if($stud && $stud->user_id == Student::user()->id){
        $stud->delete();
        return back()->with('success','student  deleted successfully' );
    // }else{
        // abort(404);
    }
}
    // }

