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
                        <a class="nav-link" href="{{ url('/product/view')}}">product list</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/') }}"></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
  <form action="{{url('/product/delete/'.$productdata->id)}}" method="GET" enctype="multipart/form-data">
      @csrf  
      <div class="container">
        <h1>product update</h1>
        <div class="form-group">
          <label class="form">Name</label>
            <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{ $productdata->name}}"/>
            <span class="text-danger">
                @error('name')
                    {{$message}}
                @enderror
            </span>
        </div> 
        <div class="form-group">
          <label class="form">SKU</label>
            <input type="text" name="sku" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{ $productdata->sku}}"/>
            <span class="text-danger">
            @error('sku')
                    {{$message}}
                @enderror
            </span>
        </div>
        <div class="form-group">
          <label class="form">price</label>
            <input type="text" name="price" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{ $productdata->price}}"/>
            <span class="text-danger">
                @error('price')
                    {{$message}}
                @enderror
            </span>
        </div>
        <span class="text-danger"></span>
        <div class="form-group">
          <label class="form">Short Description</label>
            <input type="text" name="short_description" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{ $productdata->short_description}}"/>
            <span class="text-danger">
                @error('short_description')
                    {{$message}}
                @enderror
            </span>
        </div>
        <div class="form-group">
          <label class="form">Description</label>
            <input type="text" name="description" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{ $productdata->description}}"/>
            <span class="text-danger">
                @error('description')
                    {{$message}}
                @enderror
            </span>
        </div>
        <div class="mb-3">
            <label for="">Image</label>
            <input type="file" name="image" required class="course form-control" />
        </div>
        <div>
        <input type="submit" class="btn btn-primary" value="update">
        </div>    
      </div>
</form>
</body>
</html>