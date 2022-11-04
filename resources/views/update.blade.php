<!doctype html>
<html lang="en">
  <head>
      
     <style>
        input[type=button] 
        {
            margin: 8px ;
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
                        <a class="nav-link" href="{{url('/login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/insert') }}">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @if(session('status'))
    <h6 class="alert alert-success">{{ session('status') }}</h6>
    @endif
    <form action="{{url('/user/update/'.$user->id)}}" method="POST" enctype="multipart/form-data">
      @csrf  
      @method('PUT')
      <div class="container">
        <h1>Update</h1>
        <div class="form-group">
          <label class="form">First name</label>
            <input type="text" name="firstname" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{$user->firstname}}"/>
            <span class="text-danger">
                @error('firstname')
                    {{$message}}
                @enderror
            </span>
        </div>
        <div class="form-group">
          <label class="form">Last name</label>
            <input type="text" name="lastname" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{$user->lastname}}"/>
            <span class="text-danger">
                @error('lastname')
                    {{$message}}
                @enderror
            </span>
        </div>
        <div class="form-group">
          <label class="form">User name</label>
            <input type="text" name="username" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{$user->username}}"/>
            <span class="text-danger">
            @error('username')
                    {{$message}}
                @enderror
            </span>
        </div>
        <div class="form-group">
          <label class="form">Email</label>
            <input type="text" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{$user->email}}"/>
            <span class="text-danger">
                @error('email')
                    {{$message}}
                @enderror
            </span>
        </div>
        <span class="text-danger"></span>
        <div class="form-group">
            </span>
        </div>
        <div class="form-group">
          <label class="form">Mobile number</label>
            <input type="text" name="phona_no" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{$user->phona_no}}"/>
            <span class="text-danger">
                @error('phona_no')
                    {{$message}}
                @enderror
            </span>
        </div>
        <div class="mb-3">
            <label for="">Image</label>
            <input type="file" name="image" required class="course form-control" />
            @php
                $image ="default/dummy.png";
            @endphp
            <img src="{{asset('uploads/user/'.$user->image)}}" height="55px" width="55px" onerror="this.onerror=null;this.src='{{asset($image)}}';" alt="">
        </div>
        <labe>Gender:</label>
        <div >
            <input type="radio" name="gender" value="female" {{ $user->gender == 'female' ? 'checked' : ''}} />Female</option>
            <input type="radio" name="gender" value="Male" {{ $user->gender == 'Male' ? 'checked' : ''}} />Male</option>
           <input type="radio" name="gender" value="other" {{ $user->gender == 'other' ? 'checked' : ''}} />Other</option>
        </div>
            <input type="submit" class="btn btn-primary" value="Update">   
      </div>
</form>
</body>
</html>