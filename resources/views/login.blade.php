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

  @if(!empty($message))
  <div class="alert alert-success"> {{ $message }}</div>
@endif
  <form action="{{url('/')}}/login" method="post">
    @csrf
     <div class="form-group mb-3">
     <label class="form">email</label>
      <input type="text" placeholder="email" id="email" class="form-control" name="email" required />
     </div>
     <div class="form-group mb-3">
     <label class="form">password</label>
       <input type="password" placeholder="password" id="password" class="form-control"name="password" required />           
     </div>  
     <div class="d-grid mx-auto">
     <button type="submit" class="btn btn-primary">log_in</button>
</form>     
</body>
</html>