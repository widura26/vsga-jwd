<!-- <?php  echo date('d F Y') ?> -->
<?php 
  require '../../db/database.php';
  $con = new database();
  $connected = $con->connectDB();

  $query = "SELECT post.*, users.username from post inner join users on post.user_id = users.id;";
  $data = mysqli_query($connected, $query);
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
  <link rel="stylesheet" href="../assets/css/public/dashboard.css">
  <title>Dashboard</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container px-5">
      <a class="navbar-brand fw-bold" href="#">KILROR</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0">
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
      </div>
    </div>
  </nav>
  <section id="landing-section">
    <div class="container-box">
      <div class="hero">
        <div class="word">
          <h1 class="m-0">Selamat datang!</h1>
          <p class="m-0">website ini digunakan untuk belajar programming</p>
        </div>
        <div class="login-signup">
          <div class="login-button">
            <button class="btn btn-primary w-100" onclick="window.location.href='../page.php'">Login</button>
          </div>
          <div class="signup-button">
            <button class="btn btn-primary w-100" onclick="window.location.href='../signup.php'">Sign up</button>
          </div>
        </div>
      </div>
    </div>
    <div class="container-content">
      <div class="recently">
        <h1>Recent Blogs</h1>
      </div>
      <div class="grid">
        <?php foreach($data as $row ) : ?>
          <div class="kartu" onclick="window.location.href='detailBlog.php?id=<?= $row['id'] ?>'">
            <div class="title">
              <p class="m-0"><?= $row['title'] ?></p>
            </div>
            <p class="m-0 author">from : <?= $row['username'] ?></p>
            <div class="content">
              <p class="m-0 content"><?= $row['content'] ?></p>
            </div>
            <div class="footer">
              <div class="class-date">
                <p class="m-0 date"><?= date("l, d F Y", strtotime($row['date'])) ?></p>
              </div>
            </div>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
