<!doctype html>
<html lang="en">
  <head>
    <title>login</title>
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
     @if(!empty($message))
        <div class="alert alert-success"> {{ $message }}</div>
        @endif
            <form action="{{url('/')}}/login" method="post">
           @csrf
            <div class="container">
              <h1>login</h1>
               <div class="form-group">
               <label class="form">email</label>
                  <input type="email" placeholder="email" id="email" class="form-control" name="email" required />
               </div>
             <div class="form-group">
              <label class="form">password</label>
                  <input type="password" placeholder="password" id="password" class="form-control" name="password" required />           
              </div> 
             <div class="d-grid mx-auto">
                <a href="{{route('users.list')}}">
                 <button type="submit" class="btn btn-primary">log_in</button>
                 </a>
        </div>
</form>     
</body>
</html>