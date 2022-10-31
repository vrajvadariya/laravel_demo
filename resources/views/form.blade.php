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
    <form action="{{url('/')}}/insert" method="post">
      @csrf  
      <div class="container">
        <h1>Regiatration</h1>
        <div class="form-group">
          <label class="form">firstname</label>
            <input type="text" name="firstname" id="" class="form-control" placeholder="" aria-describedby="helpId" />
            <span class="text-danger">
                @error('firstname')
                    {{$message}}
                @enderror
            </span>
        </div>
        <div class="form-group">
          <label class="form">lastname</label>
            <input type="text" name="lastname" id="" class="form-control" placeholder="" aria-describedby="helpId" />
            <span class="text-danger">
                @error('lastname')
                    {{$message}}
                @enderror
            </span>
        </div>
        <div class="form-group">
          <label class="form">username</label>
            <input type="text" name="username" id="" class="form-control" placeholder="" aria-describedby="helpId" />
            <span class="text-danger">
            @error('username')
                    {{$message}}
                @enderror
            </span>
        </div>
        <div class="form-group">
          <label class="form">email</label>
            <input type="text" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId" />
            <span class="text-danger">
                @error('email')
                    {{$message}}
                @enderror
            </span>
        </div>
        <span class="text-danger"></span>
        <div class="form-group">
          <label class="form">password</label>
            <input type="password" name="password" id="" class="form-control" placeholder="" aria-describedby="helpId" />
            <span class="text-danger">
                @error('password')
                    {{$message}}
                @enderror
            </span>
        </div>
        <div class="form-group">
          <label class="form">phona_no</label>
            <input type="text" name="phona_no" id="" class="form-control" placeholder="" aria-describedby="helpId" />
            <span class="text-danger">
                @error('phon no:')
                    {{$message}}
                @enderror
            </span>
        </div>
        <div class="mb-3">
            <label for="">Upload Image</label>
            <input type="file" name="image" required class="course form-control">
        </div>
        <div>
        gender
            <input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="male">Male
           <input type="radio" name="gender" value="other">Other
        </div>
            <button type="submit" class="btn btn-primary">Submit</button>
      </div>
</form>
</body>
</html>