<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/mystyle.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
</head>
<body>
<?php include 'menu.php'; ?>


<div id="demo" class="carousel slide" data-ride="carousel" >
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/img1.jpeg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/img2.jpeg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/img3.jpeg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<br>
<?php include 'abt.php' ?>

<section>
  <div>
    <h2 class="text-center">Our Tours</h2>
  </div>
  <div class="card-deck">
    <div class="card">
      <img class="card-img-top" src="images/timg1.jpeg" alt="Card image">
      <div class="card-body">
        <h4 class="card-title">France</h4>
        <p class="card-text">Get the best experience</p>
        <a href="packages.php" class="btn btn-primary">Plan a Trip</a>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="images/img5.jpg" alt="Card image">
      <div class="card-body">
        <h4 class="card-title">India</h4>
        <p class="card-text">Get the best experience</p>
        <a href="packages.php" class="btn btn-primary">Plan a Trip</a>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="images/img4.jpg" alt="Card image">
      <div class="card-body">
        <h4 class="card-title">Ventnam</h4>
        <p class="card-text">Get the best experience</p>
        <a href="packages.php" class="btn btn-primary">Plan a Trip</a>
      </div>
    </div>
  </div>
</section>




<?php include 'form1.php' ?>
<br>
<footer style="background-color: black; color: white;">
  <p style="text-align: center;">@travellerproduction</p>
</footer>



<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  
  <script>
  var messageInput = document.getElementById('message');
  var submitBtn = document.getElementById('submitBtn');

  messageInput.addEventListener('input', function() {
    if (messageInput.value.trim().length > 0) {
      submitBtn.style.display = 'inline';
    } else {
      submitBtn.style.display = 'none';
    }
  });
</script>

</body>
</html>