<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){

        $id=auth()->user()->id;

        $profiles=User::where('id',$id)->get();

        $data=[];

        foreach($profiles as $profile){
              $data[]= [

                'id'=> $profile->id,
                'name'=>$profile->name,
                'email'=>$profile->email,
                'phone'=>$profile->phone,
                'job_title'=>$profile->job_title,
                'job_id'=>$profile->job_id,
                'User_image'=>$profile->User_image
              ];

        }
        
        return view('pages.super.profile.profile',['data'=>$data]);
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
        // Validator::extend('User_Image', function ($attribute, $value, $parameters, $validator) {
        //     return preg_match('/^[a-zA-Z0-9_-]+\.[a-zA-Z0-9]+$/i', $value);
        // });
        
        // $request->validate([
        //     'User_Image' => ['required', 'image', 'image_name'],
        // ]);
    
        $user_img = $request->file('User_Image')->getClientOriginalName();
        $request->file('User_Image')->storeAs('public/userimage',$user_img);
        var_dump($request->file('upload_file'));
        

        //inster user 
        $user = new user();
        $user->job_id = $request->job_id;
        $user->name   = $request->name;
        $user->email  = $request->email ;
        $user->phone = $request->phone;
        $user->job_title = $request->job_title;
        $user->User_Image = $user_img;
        $user->password =Hash::make($request->password); 
         $user->role = $request->role;
        $user->save();

        return redirect('profile');
    }

    /**
     * Display the specified resource.
     */
    public function show(Profile $profile)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profile $id)
    {
        $user=User::find($id);
                if(! $user){
        
                    return redirect('profile');
                }
                    
                return view('pages.super.profile.editProfile', compact('user'));
        
            }

    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $id=auth()->user()->id;
            $user = User::findOrFail($id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->password =$request->password;
            $user->job_title = $request->job_title;
                if ($request->hasFile('User_Image')) {
                    $user_img = $request->file('User_Image')->getClientOriginalName();
                    $request->file('User_Image')->storeAs('public/image',$user_img);
                    $user->User_Image = $user_img;
                }
            

            $user->save();
    
    
            return redirect('profile');
    
    
            
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
