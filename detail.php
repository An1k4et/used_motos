<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Encrypto Messaging</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <style>
    div.polaroid {
      height: 500px;
      width: 500px;
      background-color: white;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      margin-bottom: 25px;
      position: absolute;
      right : 150px;
      bottom : 100px;
    }
    div.container {
     text-align: center;
     padding: 10px 20px;
    }
    div.container p{
      font-size : 40px;
    }
    h1{
        font-style: bold;
    }
    body{
        background-image:url("background.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        height: 50vh;
    }
    .container1 .res{
        border: 2px solid red;
        width : 570px;
        border-radius: 25px;
        background-color : #fff;
        padding : 50px;
        position: absolute;
        left : 150px;
    }
    i{
        font-size:25px;
        color : #fff;
        padding : 10px;
    }
  </style>
  <body>
 
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">USEDMOTOS</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="home.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="buy.php">Buy</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="sell.php">Sell</a>
              </li>
              
            </ul>
            
          </div>
        </div>
      </nav>
      <a href="buy.php"><i class="fas fa-arrow-left"></i></a>
      <?php
      include_once "php/config.php";
        $user_id = $_GET['user_id'];
        $quer = "SELECT * FROM allads WHERE user_id = {$user_id}";
        $sql = mysqli_query($conn, $quer);
        if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
        }
      ?>
      <div class="container1">
      <div class="res">
      <h1><?php echo $row['manufacturer_name']; ?></h1>
      <h5>Model : <?php echo $row['model']; ?></h5> 
      <h5>Manufacturing year : <?php echo $row['manufactured_year']; ?></h5>
      <h5>Price : ₹<?php echo $row['expected_price']; ?>/-</h5>
      <h5>Number of Owner : <?php echo $row['number_of_ownership']; ?></h5>
      <h5>Kilometer Driven : <?php echo $row['kms_driven']; ?></h5>
      <h5>Special Note : <?php echo $row['special_note']; ?></h5>
      <h5>Contact : <?php echo $row['contact']; ?></h5>
      </div>
      <div class="polaroid">
      <img src="php/images/<?php echo $row['pictures']; ?>" alt="5 Terre" style="width:100%">
      <div class="container">
      <p><?php echo $row['model']; ?></p>
      </div>
      </div>
      </div>
</body>
</html>