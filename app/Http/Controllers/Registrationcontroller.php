<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Return_;

class Registrationcontroller extends Controller
{
    public function index()
    {
        $url = url('/insert');
        $data = compact('url',);
        return view('form')->with($data);
    }

    public function login()
    {
        return view('login');
    }

    public function update()
    {
        return view('update');
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
                //  else
                //  {
                //    return view("login")->with("message" , "Login Fail, please check password id");
                //  }

              return redirect('/user/view')->with("message" , "Login Fail, please check password ");   
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
             //nsert query
        $user = new User;
        $user->firstname = $request['firstname'];
        $user->lastname = $request['lastname'];
        $user->username = $request['username'];
        $user->email = $request['email'];
        $user->password = md5($request['password']);
        $user->phona_no = $request['phona_no'];
        $user->gender = $request['gender'];
        $user->image = "";
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/user/',$filename);
            $user->image = $filename;  
        }
        $user->save();

        return redirect('/user/view')->with('status','image is added successfully');
        //-----------
    }
    
          
    public function view()
    {
        $users = User::all();
        $data = compact('users');
        return view('user-view')->with($data);
    }


    public function userview()
    {
        return view('view');
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
      }

      // user show//
      public function show($id)
      { 
          $user = user::find($id);
          return view('show',compact('user'));
          
      }

      

        //DELETE//    
      public function delete($id)
      {
        $user = User::find($id);
        if(!is_null($user)){
                $user->delete();
        }
        return redirect('user/view');
      }
            //edit//
      public function edit($id)
      { 
          $user = user::find($id);
          if(is_null($user))
          {
            //not found
            return redirect('user/view');
          }
          else
          { 
            $url = url('/user/update') ."/". $id;
            $data = compact('user','url',);
            return view('update')->with($data);
          }
      }

      public function userupdate($id, Request $request)
      {

        $user = user::find($id);
        $user->firstname = $request['firstname'];
        $user->lastname = $request['lastname'];
        $user->username = $request['username'];
        $user->email = $request['email'];
        $user->phona_no = $request['phona_no'];
        $user->gender = $request['gender'];
        $user->image = "";
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/user/',$filename);
            $user->image = $filename;  
        }
        $user->save();
        return redirect('/user/view');
      }


      //  user crud //

      public function index1()
      {
        return view('create');
      }
      public function stores(Request $request)
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
             //nsert query
        $user = new User;
        $user->firstname = $request['firstname'];
        $user->lastname = $request['lastname'];
        $user->username = $request['username'];
        $user->email = $request['email'];
        $user->password = md5($request['password']);
        $user->phona_no = $request['phona_no'];
        $user->gender = $request['gender'];
        $user->image = "";
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/user/',$filename);
            $user->image = $filename;  
        }
        $user->save();

        return redirect('/user/view')->with('status','image is added successfully');
    }
}