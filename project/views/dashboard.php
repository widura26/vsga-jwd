<?php 

  session_start();
  require '../db/database.php';
  $con = new database();
  $connected = $con->connectDB();
  if(isset($_SESSION['email']) && isset($_SESSION['id'])){
    $email = $_SESSION['email'];
    $id = $_SESSION['id'];
  }else {
    header('Location: page.php');
    exit();
  }
  $query = "SELECT * FROM users WHERE email = '$email'";
  $result = mysqli_query($connected, $query);
  $data = mysqli_fetch_assoc($result);

  $que = "SELECT post.*, users.*
  FROM post
  INNER JOIN users ON post.user_id = users.id where email = '$email'";
  $result2 = mysqli_query($connected, $que);
  $row2 =mysqli_fetch_array($result2);
  
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
  <link rel="stylesheet" href="assets/css/dashboard.css">
  <title>Dashboard</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid px-5">
      <a class="navbar-brand fw-bold" href="#">Digitalent <?= $id ?></a>
      <a class="navbar-brand" href="#"><?php  echo date('d F Y') ?></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
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
        </ul>
        <div class="logout">
          <button class="btn btn-primary" onclick="window.location.href='logout.php'">Logout</button>
        </div>
      </div>
    </div>
  </nav>
  <div class="login d-flex justify-content-between">
    <div class="create-button flex-grow-1">
      <a href="createArticle.php" class="btn btn-primary">Buat artikel</a>
    </div>
    <div class="user-login flex-grow-1 d-flex justify-content-end align-items-center">
      <a href="">Selamat datang, <?= $data['username'] ?></a>
    </div>
  </div>
  <section id="landing-section">
    <div class="container-box">
      <?php if($row2 === null): ?>
        <div class="not-found-message d-flex justify-content-center">
          <p class="m-0 py-4">belum membuat artikel</p>
        </div>
      <?php endif;?>
      <div class="grid">
        <?php $i = 1; ?>
        <?php foreach($result2 as $row) : ?>
          <div class="kartu">
            <div class="title">
              <p class="m-0"><?= $row['title'] ?></p>
            </div>
            <div class="content">
              <p class="m-0 content"><?= $row['content'] ?></p>
            </div>
            <div class="footer">
              <div class="class-date">
                <p class="m-0 date"><?= date("l, d F Y", strtotime($row['date'])) ?></p>
              </div>
            </div>
          </div>
        <?php $i++; ?>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <script src="assets/js/dashboard.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
