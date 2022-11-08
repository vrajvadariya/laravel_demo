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
        <a href="{{ route('/product/view') }}"> <input type="button" class="btn btn-primary" value="BACK" ></a>
    </div>
    <br />
    <img src="{{asset('uploads/user/'.$data->image)}}" height="50px" width="50px">
        <h3>name   - {{$data->name}}</h3>
        <h3>sku    - {{$data->sku}}</h3>
        <h3>price   - {{$data->price}}</h3>
        <h3>short_description  - {{$data->short_description}}</h3>
        <h3>description        - {{$data->description}}</h3>
        <h3>status  - {{$data->status}}</h3> 
    </div>
  </body>
</html>