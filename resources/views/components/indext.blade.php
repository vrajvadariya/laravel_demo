<!DOCTYPE html>
<html>
<head>
    <title>first Laravel project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
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
                        <a class="nav-link" href="{{url('/login') }}"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/insert') }}">Product Register</a>
                    </li>
                
            </div>
        </div>
    </nav>
</body>
</html>