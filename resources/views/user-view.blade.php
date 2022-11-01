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
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/user/view') }}">users</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <biv class="containre">
    <h1 style="text-align:center ;">USER LIST</h1>
        <a href="{{route('user.creact')}}">
        <button class="btn btn-primary d-inline-block m-2 float-right">ADD REGISTER</button>
        </a>
        <table class="table">
            <thead>
                <tr>
                    <th>firstname</th>
                    <th>lastname</th>
                    <th>username</th>
                    <th>email</th>
                    <th>password</th>
                    <th>phona_no</th>
                    <th>gender</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $userdata)
                <tr>
                    <td>{{$userdata->firstname}}</td>
                    <td>{{$userdata->lastname}}</td>
                    <td>{{$userdata->username}}</td>
                    <td>{{$userdata->email}}</td>
                    <td>{{$userdata->password}}</td>
                    <td>{{$userdata->phona_no}}</td>
                    <td>{{$userdata->gender}}</td>
                    <td>{{$userdata->Image}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </biv>
  </body>
</html>