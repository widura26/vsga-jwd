<?php 

  $id = $_GET['id'];
  require '../../db/database.php';
  $connected = new database();
  $conn = $connected->connectDB();

  $query = "SELECT post.*, users.username from post inner join users on post.user_id = users.id where post.id = $id ";
  $datas = mysqli_query($conn, $query);
  $row = mysqli_fetch_assoc($datas);
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
  <link rel="stylesheet" href="../assets/css/public/detail.css">
  <title>Detail</title>
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
        </ul>
      </div>
    </div>
  </nav>
  <section id="landing-section">
    <div class="container-box">
      <div class="blog">
        <div class="card-detail">
          <h1><?= $row['title'] ?></h1>
          <p>Oleh <?= $row['username'] ?> pada hari <?= date("l, d F Y", strtotime($row['date'])) ?></p>
        </div>
        <div class="content">
          <p>
            <?= $row['content'] ?>
          </p>
        </div>
      </div>
    </div>
  </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
