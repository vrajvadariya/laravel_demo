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
  @foreach ($users as $userdata)
    <div class="jumbotron text-center">
        <div>
            <a href="{{ route('user.list') }}" class="btn btn-default">Back</a>
        </div>
        <br />
        <img src="{{ URL::to('/') }}/uploads/user/ {{ $userdata->image}}" class="img-thumbnail" />
    </div>
    @endforeach
  </body>
</html>