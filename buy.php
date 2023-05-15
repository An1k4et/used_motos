<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BUY</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <style>
    body{
        background-image:url("background.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        height: 50vh;
    }
    .container .det{
      height: 150px;
      width : 230px;
    }
    .container .row .card{
        margin: 20px;
    }
    .container .card-img-top{
      height:150px;
      width : 230px;
    }
    a{
      color : #fff;
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
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

<form method="GET" action="#">
<div class="container">
    <div   class="row">
        
        <?php
          include_once "php/config.php";
          $quer = "SELECT * FROM allads";
          $sql = mysqli_query($conn, $quer);
          while($res = mysqli_fetch_array($sql)){
            $a = $res['user_id'];
            $output = '<div class="card" style="width: 16rem;">
                       <img src="php/images/'.$res['pictures'].'" class="card-img-top" alt="...">
                       <div class="card-body">
                         <h5 class="card-title">₹'.$res['expected_price']. '</h5>
                         <p class="card-text">'.$res['manufacturer_name']." ".$res['model']. '</p>
                         <button type="button" name="view" id="view_det"  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal"><a href="detail.php?user_id='.$a.'" style="text-decoration:none">View Details</a></button>
                       </div></div>';
            echo $output;
          }
        ?>
          
           
        </div>
    </div>
</div>

</form>







<!-- The Modal -->








<script src="javascript/buy.js"></script>
<script src="javascript/popup.js"></script>
  </body>
</html>