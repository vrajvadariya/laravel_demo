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
     <div class="container">
        <table class="table">
            <thead>
                
                <tr>
                    <th>firstname</th>
                    <th>lastname</th>
                    <th>username</th>
                    <th>email</th>
                    <th>password</th>
                    <th>phone_no</th>
                    <th>Image</th>
                    <th>Gender </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{$user->firstname}}</td>
                    <td>{{$user->lastname}}</td>
                    <td>{{$user->username}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->password}}</td>
                    <td>{{$user->phone_no}}</td>
                    <td>{{$user->Image}}</td>
                    <td>{{$user->Gender}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
     </div>
  </body>
</html>