<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  
  <style>
    .container{
        background-image: "bikehome.jpg";
        background-color: rgb(147, 151, 150);
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
    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
      <form method="post" action="#" autocomplete="off">
        <div class="container">
          <h1>SELL YOUR VEHICAL HERE!!!</h1>
          <div class="mb-3">
              <label for="formGroupExampleInput" class="form-label">MANUFACTURER NAME</label>
              <input name="brand" type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter the vehical brand">
            </div>
  
            <div class="mb-3">
              <label for="formGroupExampleInput2" class="form-label">MODEL</label>
              <input name="veh_name" type="text" class="form-control" id="formGroupExampleInput2" placeholder="enter your vehical name">
            </div>
  
            <div class="mb-3">
              <label for="formGroupExampleInput2" class="form-label">MANUFACTURED YEAR</label>
              <input name="manu_year" type="text" class="form-control" id="formGroupExampleInput2" placeholder="enter the year of purchase" required>
            </div>
  
            <div class="mb-3">
              <label for="formGroupExampleInput2" class="form-label">K.M.S DRIVEN</label>
              <input name="driven" type="text" class="form-control" id="formGroupExampleInput2" placeholder="kilometer driven" required>
            </div>
  
            
            <div class="mb-3">
              <label for="formGroupExampleInput2" class="form-label">NUMBER OF OWNERSHIP</label>
              <input name="owners" type="text" class="form-control" id="formGroupExampleInput2" placeholder="FOR EXAMPLE:- 1,2,3...." required>
            </div>
            
            <div class="mb-3">
              <label for="formGroupExampleInput2" class="form-label">EXPECTED PRICE</label>
              <input name="price" type="text" class="form-control" id="formGroupExampleInput2" placeholder="FOR EXAMPLE:- ₹100,000" required>
            </div>
            
            <div class="mb-3">
              <label for="formGroupExampleInput2" class="form-label">SPECIAL NOTE</label>
              <input name="note" type="text" class="form-control" id="formGroupExampleInput2" placeholder="ADDITIONAL DESCRIPTION" required>
            </div>

            <div class="mb-3">
              <label for="formGroupExampleInput2" class="form-label">CONTACT NUMBER</label>
              <input name="phone_no" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Your phone number" required>
            </div>
            
            <div class="mb-3">
              <label for="formGroupExampleInput2" class="form-label"> PICTURES</label>
              <input name="image" type="file" class="form-control" id="formGroupExampleInput2" required>
            </div>
            <button type="button" id="decrypt" class="btn btn-primary"  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">SUBMIT</button>
        </div>
      </form>

      <div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Successfully created</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Done
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
      <script src="javascript/sell.js"></script>
  </body>

</html>