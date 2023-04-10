<?php

namespace App\Http\Controllers;

use App\Models\HousingInfo;
use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HousingInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stud = HousingInfo::first();
        $count=DB::table('students')->count();
        $count1=DB::table('users')->where('role', '=', 1)->count();
        return view('pages.super.housing.HousingInfo')-> with(['stud'=>$stud , 'count' => $count, 'count1'=> $count1]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
       
        $stud = HousingInfo::get();
        dd($stud);
        return view('pages.super.home', compact('stud'));
    }

    /**
     * Display the specified resource.
     */
    public function admin(){
        $count=DB::table('students')->count();
        $count1=DB::table('users')->where('role', '=', 1)->count();
        $stud = HousingInfo::first();


        return view('pages.admin.home')->with(['count'=> $count,'count1'=>$count1,'stud'=>$stud]);

    }
    public function editor(){
        $count=DB::table('students')->count();
        $count1=DB::table('users')->where('role', '=', 1)->count();
        $stud = HousingInfo::first();


        return view('pages.editor.home')->with(['count'=> $count,'count1'=>$count1,'stud'=>$stud]);

    }
    public function show(HousingInfo $housingInfo)
    {
         $count=DB::table('students')->count();
         $count1=DB::table('users')->where('role', '=', 1)->count();
         $stud = HousingInfo::first();


         return view('pages.super.home')->with(['count'=> $count,'count1'=>$count1,'stud'=>$stud]);



         
        

        // $query="SELECT count(*) AS totalStud from students u";
        // $totalStud=DB::select($query);

        // $number_of_students=$totalStud[0]->totalStud;
        //          dd($query);

        // return view ('Home.superAdmin',['number_of_students'=>$number_of_students]);
    }

    /**
     * Show the form for editing the specified resource.
     */
   public function edit(  $id)
{
    // dd($id);
    $stud = HousingInfo::findOrFail($id);
    return view('pages.super.housing.updateInfo', compact('stud'));

}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $stud = HousingInfo::findOrFail($id);
        $stud->total_dorms = $request->total_dorms;
        $stud->total_rooms = $request->total_rooms;
        $stud->rooms_occupied = $request->rooms_occupied;
        $stud->rooms_vacant= $request->rooms_vacant;
        $stud->save();

        return redirect('info');


        }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HousingInfo $housingInfo)
    {
        //
    }
}
