<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator,Redirect,Response;
use Illuminate\Support\Facades\Auth;
Use App\User;
Use App\UserDetail;
use Session;

class UserDetailController extends Controller
{
    public function edit() 
    {   
        if(Auth::check()){
        $user = User::where('id','=',Auth::user()->id)
                    ->with('userDetail')
                    ->first()->toArray();
        return view('edit',compact('user'));   
    }
        return Redirect::to("login")->withSuccess('Opps! You do not have access');
    }

    public function update(Request $request)
    { 
            request()->validate([
            'username' => 'required',
            'email' => 'required|email',
            'city' =>'required',
            'dob' =>'required'
        ]);

            $check_username = User::where('username',$request->username)->where('id','!=', Auth::user()->id)->first();

            if($check_username){
                Session::flash('message', 'User name already exits'); 
                Session::flash('alert-class', 'alert-danger');
                return Redirect::to("profile-edit");
            }

            $check_email = UserDetail::where('email',$request->email)->where('user_id','!=',Auth::user()->id)->first();
            // return $check_email;
            if($check_email){
                Session::flash('message', 'email already exits'); 
                Session::flash('alert-class', 'alert-danger');
                return Redirect::to("profile-edit"); 
            }
    
            $user =  User::find(Auth::user()->id);
            $user->username = $request->username;
            $user->save();
    
            $userDetail = UserDetail::where('user_id',$user->id)->first();
            $userDetail->email = $request->email;
            $userDetail->city = $request->city;
            $userDetail->dob = $request->dob;
            $userDetail->save();
            Session::flash('message', 'Updated Successfully'); 
            Session::flash('alert-class', 'alert-success');
            return Redirect::to("profile-edit"); 

    
    }

}
