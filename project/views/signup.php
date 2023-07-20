<?php

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;800&display=swap"
      rel="stylesheet">
    <link rel="stylesheet" href="assets/css/page.css">
    <link rel="icon" href="assets/google.png" type="image/x-icon">
    <title>JWD</title>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
      <div class="container-fluid px-5">
        <a class="navbar-brand fw-bold" href="#">Digitalent</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
        aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" 
              data-bs-toggle="dropdown" aria-expanded="false">
                Programming
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">PHP</a></li>
                <li><a class="dropdown-item" href="#">Javascript</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Python</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" 
              role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Software
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">PHP</a></li>
                <li><a class="dropdown-item" href="#">Javascript</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Python</a></li>
              </ul>
            </li>
          </ul>
          <form class="d-flex">
            <a href="page.php" class="btn btn-primary rounded-pill" type="submit">Login</a>
          </form>
        </div>
      </div>
    </nav>

    <section id="landing-section">
      <div class="container container-form">
        <div class="row align-items-center">
          <div class="cont col-lg">
            <img src="assets/landing.png" style="width: 100%; height: 100%;">
          </div>
          <div class="cont p-4 col-lg">
            <div class="title">
              <h1>Selamat Datang!</h1>
              <p>#Bersama digitalent membangun negeri</p>
            </div>
            <div class="inputan">
              <form>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="username" class="form-label">Username</label>
                  <input type="text" class="form-control" id="username">
                  <i class="bi bi-eye-slash" id="togglePassword"></i>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="button-group d-flex justify-content-between">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
          
        </div>
      </div>
    </section>
    <!-- <script src="js/script.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>