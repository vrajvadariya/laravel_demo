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
    <form action="{{url('/')}}/insert" method="post" enctype="multipart/form-data">
      @csrf  
      <div class="container">
        <h1>CREATE USER LIST</h1>
        <div class="form-group">
          <label class="form">First name</label>
            <input type="text" name="firstname" id="" class="form-control" placeholder="" aria-describedby="helpId"/>
            <span class="text-danger">
                @error('firstname')
                    {{$message}}
                @enderror
            </span>
        </div>
        <div class="form-group">
          <label class="form">Last name</label>
            <input type="text" name="lastname" id="" class="form-control" placeholder="" aria-describedby="helpId" />
            <span class="text-danger">
                @error('lastname')
                    {{$message}}
                @enderror
            </span>
        </div>
        <div class="form-group">
          <label class="form">User name</label>
            <input type="text" name="username" id="" class="form-control" placeholder="" aria-describedby="helpId" />
            <span class="text-danger">
            @error('username')
                    {{$message}}
                @enderror
            </span>
        </div>
        <div class="form-group">
          <label class="form">Email</label>
            <input type="text" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId"/>
            <span class="text-danger">
                @error('email')
                    {{$message}}
                @enderror
            </span>
        </div>
        <span class="text-danger"></span>
        <div class="form-group">
          <label class="form">Password</label>
            <input type="password" name="password" id="" class="form-control" placeholder="" aria-describedby="helpId" />
            <span class="text-danger">
                @error('password')
                    {{$message}}
                @enderror
            </span>
        </div>
        <div class="form-group">
          <label class="form">Mobile number</label>
            <input type="text" name="phona_no" id="" class="form-control" placeholder="" aria-describedby="helpId" />
            <span class="text-danger">
                @error('phon no:')
                    {{$message}}
                @enderror
            </span>
        </div>
        <div class="mb-3">
            <label for="">Image</label>
            <input type="file" name="image" required class="course form-control" />
        </div>
        <label>Gender:</label>
        <div>
            <input type="radio" name="gender" value="female" />Female</option>
            <input type="radio" name="gender" value="Male"  />Male</option>
           <input type="radio" name="gender" value="other" />Other</option>
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Submit</button>  
        </div>
      </div>
</form>
</body>
</html>