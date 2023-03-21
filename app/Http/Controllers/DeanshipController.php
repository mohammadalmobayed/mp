<?php

namespace App\Http\Controllers;

use App\Models\Deanship;
use Illuminate\Http\Request;

class DeanshipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        
        return view('pages.deanship.deanship');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Deanship $deanship)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Deanship $deanship)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Deanship $deanship)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Deanship $deanship)
    {
        //
    }
}
