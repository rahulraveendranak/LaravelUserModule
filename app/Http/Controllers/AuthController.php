<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator,Redirect,Response;
Use App\User;
Use App\UserDetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }  
 
    public function register()
    {
        return view('register');
    }
     
    public function postLogin(Request $request)
    {
        request()->validate([
        'username' => 'required',
        'password' => 'required',
        ]);
 
        // $credentials = $request->only('email', 'password');
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }
        Session::flash('message', 'Oppes! You have entered invalid credentials'); 
        Session::flash('alert-class', 'alert-danger'); 
        return Redirect::to("login");
    }
 
    public function postRegister(Request $request)
    {  
        request()->validate([
        'username' => 'required|unique:users',
        'email' => 'required|email|unique:user_details',
        'password' => 'required|min:6|required_with:password_confirmation|same:password_confirmation',
        'password_confirmation' => 'required',
        'city' =>'required',
        'dob' =>'required'
    ]);

        $user = new User;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->save();

        $userDetail = new UserDetail;
        $userDetail->user_id = $user->id;
        $userDetail->email = $request->email;
        $userDetail->city = $request->city;
        $userDetail->dob = $request->dob;
        $userDetail->save();

        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }

       
        return Redirect::to("dashboard")->withSuccess('Great! You have Successfully loggedin');
    }
     
    public function dashboard()
    {
 
      if(Auth::check()){
        $user = User::where('id','=',Auth::user()->id)
                    ->with('userDetail')
                    ->first()->toArray();
        return view('dashboard',compact('user'));
      }
       return Redirect::to("login")->withSuccess('Opps! You do not have access');
    }
     
    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('/');
    }
    
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

    public function update()
    {

    }
}
?>