<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="style.css">
    <style>
        body{
            font-family: arial;
           
        }   
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-primary navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Shoppe</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
              <li class="nav-item">
                <a href="produk" class="nav-link{{ Request::segment(1)=='produk'?'active':''}}">Produk</a>
              </li>
                <li class="nav-item">
                  <a href="login" class="nav-link{{ Request::segment(1)=='login'?'active':''}}">Login</a>
                </li>
              <li class="nav-item">
                <a href="user/logout" class="nav-link">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container mt-5">
        @yield("content")
      </div>
</body>
</html>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>