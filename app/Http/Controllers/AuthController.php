<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
Use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class AuthController extends Controller
{

    public function index()
    {
        return view('home');
    }  
    
    public function login()
    {
        return view('login');
    }  

    public function registration()
    {
        return view('registration');
    }

    public function postRegistration(Request $request)
    {  
        request()->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        //'contact_number' => 'required|contact_number|unique:users',
        'password' => 'required|min:6',
        'teacher' =>'required',
        ]);
        
        $data = $request->all();

        $check = $this->create($data);
      
        return view('login');
    }
    
    
    public function postLogin(Request $request)
    {
        request()->validate([
        'email' => 'required',
        'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            $user = User::where('email', $request->email)->first();
            if($user->is_teacher()){
            return redirect()->intended('dashboard');
            }
            return redirect()->intended('home');
        }
        return Redirect::to("login")->with('warning', 'Wrong email or password');
    }

    
    public function dashboard()
    {

      if(Auth::check()){
        return view('dashboard');
      }
       return Redirect::to("login")->with('warning', 'Wrong email or password');
    }

    public function home()
    {

      if(Auth::check()){
        return view('home');
      }
       return Redirect::to("login")->withSuccess('Opps! You do not have access');
    }

  
	public function create(array $data)
	{
	  return User::create([
	    'name' => $data['name'],
	    'email' => $data['email'],
      'password' => Hash::make($data['password']),
      'teacher' => $data['teacher']
	  ]);
	}
	
	public function logout() {
        Session::flush();
        Auth::logout();
        return view('login');
    }
}