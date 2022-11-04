<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #e3f2fd;">
        <div class="container">
            <a class="navbar-brand mr-auto" href="#">VP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/')}}">home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/') }}">logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <biv class="containre">
         <a href="{{ route('user.create') }}"> 
            <button class="btn btn-primary b-inline-block m-2 float-right"> ADD USER </button>
         </a>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Image</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>User name</th>
                    <th>Email</th>
                    <th>Mobile number</th>
                    <th>Gender</th>
                    <th>Action</th>
                    
                </tr>
            </thead>
            <tbody>
                  @php
                    $image ="default/dummy.png";
                  @endphp
                @foreach ($users as $userdata)

                <tr>
                    <td>{{$userdata->id}}</td>
                    <td>
                        
                        <img src="{{asset('uploads/user/'.$userdata->image)}}" height="50px" width="50px" onerror="this.onerror=null;this.src='{{asset($image)}}';" alt="">
                    </td>
                    <td>{{$userdata->firstname}}</td>
                    <td>{{$userdata->lastname}}</td>
                    <td>{{$userdata->username}}</td>
                    <td>{{$userdata->email}}</td>
                    <td>{{$userdata->phona_no}}</td>
                    <td>{{$userdata->gender}}</td>
                    <td>
                       <a href="{{route('user.show',['id' => $userdata->id])}}"> <button class="btn btn-primary">show</button> </a>
                       <a onclick="return confirm('Are You sure you want to delete this user ? ')" href="{{route('user.delete',['id' => $userdata->id])}}"> <button class="btn btn-danger">Delete</button> </a>
                       <a href="{{route('user.edit',['id' => $userdata->id])}}"><button class="btn btn-primary">Edit</button></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </biv>
  </body>
</html>