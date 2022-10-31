<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Registrationcontroller extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function login()
    {
        return view('login');
    }

    public function userlogin(Request $request)
    {
        /*$request->validate(
            [
                'email' => 'required|email',
                'password' => 'required',
            ]
            );*/
        $user = $request->only('email','password');
            // echo"<pre>";
            // print_r($user['email']);
            // print_r(md5($user['password']));
            // die;
           

                
                $userdata = DB::table('user')
                            ->where('email', '=', $user['email'])
                            ->where('password', '=', md5($user['password']))
                            ->get()->first();
                //  echo"<pre>";
                //  print_r($userdata->email);
                //  die;               
               if (!$userdata) 
                {
                    // echo"login fail";
                    // die;
                  return view("login")->with("message" , "Login Fail, please check email id");  
                }
                return redirect('index')->with("message" , "Login Fail, please check email id ");   
    }
  

    public function store(Request $request)
    {
      
        echo"<pre>";
        print_r($request->all());

       $request->validate(
            [
              'firstname' => 'required',
              'lastname'  => 'required',
              'username' => 'required',
              'email' => 'required|email',
              'password' => 'required',
              'phona_no' => 'required',
              'gender' => 'required',
            ]
        );
               
        $user = new User;
        $user->firstname = $request['firstname'];
        $user->lastname = $request['lastname'];
        $user->username = $request['username'];
        $user->email = $request['email'];
        $user->password = md5($request['password']);
        $user->phona_no = $request['phona_no'];
        $user->gender = $request['gender'];
        $user->Image = "";
        if($request->hasFile('image'))
        {
            $file =  $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('/public/uploads/Registration/',$filename);
            $user->image = $filename;  
        }
        $user->save();

    }
}