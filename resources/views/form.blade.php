<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Registration Page</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="../../index2.html"><b>Admin</b>LTE</a>
        </div>

        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Register a new membership</p>
                @if(session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
                @endif
                <form action="{{url('/')}}/insert" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="container">
                        <h1>REGISTRSTION</h1>
                        <div class="input-group mb-3">
                            <label class="form"></label>
                            <input type="text" name="firstname" id="" class="form-control" placeholder="First name" aria-describedby="helpId" />
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                            <span class="text-danger">
                                @error('firstname')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="input-group mb-3">
                            <label class="form"></label>
                            <input type="text" name="lastname" id="" class="form-control" placeholder="Last name" aria-describedby="helpId" />
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                            <span class="text-danger">
                                @error('lastname')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="input-group mb-3">
                            <label class="form"></label>
                            <input type="text" name="username" id="" class="form-control" placeholder="User name" aria-describedby="helpId" />
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                            <span class="text-danger">
                                @error('username')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="input-group mb-3">
                            <label class="form"></label>
                            <input type="text" name="email" id="" class="form-control" placeholder="Email" aria-describedby="helpId" />
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <span class="text-danger">
                            @error('email')
                            {{$message}}
                            @enderror
                        </span>
                    </div>
                    <div class="input-group mb-3">
                        <label class="form"></label>
                        <input type="password" name="password" id="" class="form-control" placeholder="Password" aria-describedby="helpId" />
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        <span class="text-danger">
                            @error('password')
                            {{$message}}
                            @enderror
                        </span>
                    </div>
                    <div class="input-group mb-3">
                        <label class="form"></label>
                        <input type="text" name="phona_no" id="" class="form-control" placeholder="Mobile number" aria-describedby="helpId" />
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-phone"></span>
                            </div>
                        </div>
                        <span class="text-danger">
                            @error('phon no:')
                            {{$message}}
                            @enderror
                        </span>
                    </div>
                    <div class="input-group mb-3">
                        <label for=""></label>
                        <input type="file" placeholder="Image" name="image" class="course form-control" />
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-image"></span>
                            </div>
                        </div>
                    </div>
                    <label>Gender:</label>
                    <div>
                        <input type="radio" name="gender" value="female" />Female</option>
                        <input type="radio" name="gender" value="Male" />Male</option>
                        <input type="radio" name="gender" value="other" />Other</option>
                    </div>

                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                                <label for="agreeTerms">
                                    I agree to the <a href="#">terms</a>
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                        <!-- /.col -->
                    </div>
            </div>
            </form>

            <div class="social-auth-links text-center">
                <p>- OR -</p>
                <a href="#" class="btn btn-block btn-primary">
                    <i class="fab fa-facebook mr-2"></i>
                    Sign up using Facebook
                </a>
                <a href="#" class="btn btn-block btn-danger">
                    <i class="fab fa-google-plus mr-2"></i>
                    Sign up using Google+
                </a>
            </div>

            <a href="login.html" class="text-center">I already have a membership</a>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
</body>

</html>