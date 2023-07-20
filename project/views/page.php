<?php 
  session_start(); //jika kita ingin menggunakan $_SESSION harus mencantumkan session_start()
  $koneksi = mysqli_connect("localhost", "root", "", "blog");
  $message = null;
  if(isset($_POST["submit"])){
    $email = mysqli_real_escape_string($koneksi, $_POST["email"]);  
    $password = mysqli_real_escape_string($koneksi, $_POST["password"]);
    
    $login = mysqli_prepare($koneksi, "SELECT id FROM users WHERE email = ? AND password = ?");

    mysqli_stmt_bind_param($login, "ss", $_POST['email'], $_POST['password']);  
    mysqli_stmt_execute($login);
    mysqli_stmt_bind_result($login, $id);
    mysqli_stmt_store_result($login);
    
    if(mysqli_stmt_num_rows($login) === 1){
        mysqli_stmt_fetch($login);
        $_SESSION['email'] = $email;
        $_SESSION['id'] = $id;
        header("Location: dashboard.php");
    }else{
        // $message = "username atau password anda salah";
        $message = "username atau password salah";
        header("Refresh:0");
    }
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/page.css">
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;800&display=swap"
      rel="stylesheet">
      <?
      if($message != null){
        ?><style>.error {display: block}</style><?
      }
      ?>
    <title>JWD</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
      <div class="container-fluid px-5">
        <a class="navbar-brand fw-bold" href="#">Digitalent</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
            <a href="signup.php" class="btn btn-primary rounded-pill" type="submit">Sign up</a>
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
          <div class="cont p-4 col-lg ">
            <div class="title">
              <h1>Selamat Datang!</h1>
              <!-- <p>#Bersama digitalent membangun negeri</p> -->
            </div>
            <div class="inputan">
              <form class="form" method="post">
                <div class="error">
                  <p><?= $message ?></p>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                </div>
                <div class="button-group d-flex justify-content-start">
                  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                  <!-- <div class="icon d-flex"> 
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48" viewBox="0 0 48 48">
                      <path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"></path><path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"></path><path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"></path><path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"></path>
                    </svg>
                    <a href="">Cre</a>
                  </div> -->
                </div>
              </form>
            </div>
          </div>
          
        </div>
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>