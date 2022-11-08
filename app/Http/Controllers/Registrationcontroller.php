<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Support\Facades\file;


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

  // public function update()
  // {
  //     return view('update');
  // }

  public function userlogin(Request $request)
  {
    /*$request->validate(
             [
                 'email' => 'required|email',
                 'password' => 'required',
             ]
             );*/
    $user = $request->only('email', 'password');
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
    if (!$userdata) {
      // echo"login fail";
      // die;
      return view("login")->with("message", "Login Fail, please check email id");
    }
    //  else
    //  {
    //    return view("login")->with("message" , "Login Fail, please check password id");
    //  }

    return redirect('/user/view')->with("message", "Login Fail, please check password ");
  }


  public function store(Request $request)
  {

    echo "<pre>";
    print_r($request->all());

    $request->validate(
      [
        'firstname' => 'required',
        'lastname'  => 'required',
        'username' => 'required',
        'email' => 'required|email',
        'password' => 'required',
        'phona_no' => 'required|min:11|numeric',
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
    if ($request->hasFile('image')) {
      $file = $request->file('image');
      $extention = $file->getClientOriginalExtension();
      $filename = time() . '.' . $extention;
      $file->move('uploads/user/', $filename);
      $user->image = $filename;
    }
    $user->save();



    return redirect('/user/view')->with('status', 'image is added successfully');
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

  public function logout(Request $request)
  {
    Auth::logout();
    return redirect('/');
  }

  //DELETE//    
  public function delete($id)
  {
    $user = User::find($id);
    if (!is_null($user)) {
      $user->delete();
    }
    return redirect('user/view');
  }
  //edit//
  public function edit($id)
  {
    $user = user::find($id);
    return view('update', compact('user'));
  }


  public function update($id, Request $request)
  {
    try {
      echo "shrt";
      $request->validate(
        [
          'firstname' => 'required',
          'lastname'  => 'required',
          'username' => 'required',
          'email' => 'required|email',
          'password' => 'required',
          'phona_no' => 'required|min:11|numeric',
          'gender' => 'required',
        ]
      );
    } catch (Exception $e) {
      echo $e->getMessage();
    }
    $user = User::find($id);
    return view('update', compact('user'));
  }


  //  user crud //

  public function index1()
  {
    return view('create');
  }
  public function stores(Request $request)
  {

    echo "<pre>";
    print_r($request->all());

    $request->validate(
      [
        'firstname' => 'required',
        'lastname'  => 'required',
        'username' => 'required',
        'email' => 'required|email',
        'password' => 'required',
        'phona_no' => 'required|min:11|numeric',
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
    if ($request->hasFile('image')) {
      $file = $request->file('image');
      $extention = $file->getClientOriginalExtension();
      $filename = time() . '.' . $extention;
      $file->move('uploads/user/', $filename);
      $user->image = $filename;
    }
    $user->save();

    return redirect('/user/view')->with('status', 'image is added successfully');
  }

  // user show//
  public function show($id)
  {

    $user = User::find($id);
    // echo "<pre>";
    // print_r($user);
    // die;
    $data = compact('user');
    return view('crud-view')->with($data);

    // catch(Exception $e){
    //        echo $e->getMessage();

    //      }
  }
}
