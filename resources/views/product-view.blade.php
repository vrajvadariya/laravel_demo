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
                        <a class="nav-link" href="{{ url('/product')}}">home</a>
                    </li>
            </div>
        </div>
    </nav
<biv class="containre">
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>image</th>
                    <th>name</th>
                    <th>sku</th>
                    <th>price</th>
                    <th>short_description</th>
                    <th>description</th>
                    <th>status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productdata as $data)
                <tr>
                    <td>{{$data->id}}</td>
                    <td>
                        <img src="{{asset('uploads/user/'.$data->image)}}" height="50px" width="50px"> </td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->sku}}</td>
                    <td>{{$data->price}}</td>
                    <td>{{$data->short_description}}</td>
                    <td>{{$data->description}}</td>
                    <td>
                        @if($data->status == "1")
                        enabled
                        @else
                        disable
                        @endif
                    </td>
                    <td>
                       <a href="{{url('/product/show')}}/{{$data->id}}"> <button class="btn btn-primary">show</button> </a>
                       <a onclick="return confirm('Are You sure you want to delete this product ? ')" href="{{url('product/delete')}}/{{$data->id}}"><button class="btn btn-danger">Delete</button> </a>
                       <a href="{{route('product.edet',['id' => $data->id])}}"><button class="btn btn-primary">Edit</button></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>