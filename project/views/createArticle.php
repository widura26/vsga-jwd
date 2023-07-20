<?php
  session_start();
  require '../db/database.php';
  $con = new database();
  $connected = $con->connectDB();
  $id = $_SESSION['id'];
  
  if(isset($_POST["submit"])){
    $title = $_POST['title'];
    date_default_timezone_set('Asia/Jakarta');
    $date = date('Y-m-d');
    $content = $_POST['content'];
    $query = mysqli_query($connected, "INSERT INTO post Values ('','$id','$title', '$date', '$content') ");
    header('Location: dashboard.php');
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;800&display=swap"
      rel="stylesheet">
  <link rel="stylesheet" href="assets/css/createArticle.css">
  <title>Create blog</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid px-5">

      <a class="navbar-brand fw-bold" href="#">Digitalent</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="dashboard.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
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
        <div class="logout">
          <button class="btn btn-primary" onclick="window.location.href='logout.php'">Logout</button>
        </div>
      </div>
    </div>
  </nav>
  <section id="landing-section">
    <div class="container-box">
      <form action="" method="post">
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3 d-flex flex-column">
          <label for="content" class="form-label">Content</label>
          <textarea name="content" id="#blogarea" cols="40"></textarea>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>