<?php

namespace App\Http\Controllers;

use App\Models\Punishment;
use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PunishmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function index(){

         $puns = Punishment::all();
        //  dd($puns);
         return view('pages.super.punishments.punishment', ['puns' => $puns]);
     }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'student_id' => 'required|string|max:255',
            'warning_type' => 'required|string|in:first_warning,final_warning',
            'warning_reason' => 'required|string',
        ]);

        $pun= new Punishment;
        $pun->student_id = $request->student_id;
        $pun->name= $request->name;
       $pun->warning_type=$request->warning_type;
       $pun->warning_reason=$request->warning_reason;
       $pun->status='pending';
       $pun->supervisor=DB::raw('(SELECT name FROM users WHERE id = ' . auth()->id() . ')');

       $pun->save();


     return redirect()->back();
      
           
    

    }

    /**
     * Display the specified resource.
     */
    public function show(Punishment $punishment)
    {
        $puns = Punishment::find($punishment);
    
        if (!$puns) {
            return 'Punishment not found';
        }
    
        return view('pages.super.punishments.punishment', compact('puns'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Punishment $punishment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Punishment $punishment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Punishment $punishment)
    {
      
    }
}
