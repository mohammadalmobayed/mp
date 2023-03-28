<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function userHome()
    {
        return view('pages.user.home');
    }
    public function editorHome()
    {
        return view('pages.editor.home');
    }
    public function adminHome()
    {
        return view('pages.admin.home');
    }
    public function superAdminHome()
    {
        return view('pages.super.home');
    }

    public function date(){
        
              $current_date= Carbon::now();
              
        return view('pages.layouts.master')->with('current_date',$current_date);
    }
}
