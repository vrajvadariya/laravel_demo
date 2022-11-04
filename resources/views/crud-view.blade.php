<!doctype html>
<html lang="en">
  <head>
     <style>
        input[type=button] 
        {
            margin: 15px ;
        }
        img
        {
            margin: 10px ;
        }
    </style>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <!--<div class="jumboron text-center">-->
    <div align="rifht">
        <a href="{{ route('user.list') }}"> <input type="button" class="btn btn-primary" value="BACK" ></a>
    </div>
    @php
        $image ="default/dummy.png";
    @endphp
    <br />
    <img src="{{asset('uploads/user/'.$user->image)}}" height="150px" width="150px" onerror="this.onerror=null;this.src='{{asset($image)}}';" alt="">
        <h3>First name    - {{$user->firstname}}</h3>
        <h3>Last name     - {{$user->lastname}}</h3>
        <h3>User name     - {{$user->username}}</h3>
        <h3>Email         - {{$user->email}}</h3>
        <h3>Mobile number - {{$user->phona_no}}</h3>
        <h3>Gender        - {{$user->gender}}</h3>
    </div>
  </body>
</html>