<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>DHAKA ISP SOLUTION</title>
    <link rel="stylesheet" href="./css/styles.css" />
    <style>
      .form-submit-button {
     background: #0066A2;
     color: white;
     border-style: outset;
     border-color: #0066A2;
     height: 50px;
     width: 100px;
     font: bold 15px arial, sans-serif;
     text-shadow:none;
}

    </style>

  </head>

  <body>

    <!-- header -->
    <!-- Navbar -->
  <header id="home">
   <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="usersignup.php">User-SIGNUP</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">User-LOGIN</a>
            </li>
        </ul>
    </div>
    <div class="mx-auto order-0">
        <!-- <a class="navbar-brand mx-auto" href="#">Navbar 2</a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="ispsignup.php">ISP-SIGNUP</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ISPlogin.php">ISP-LOGIN</a>
            </li>
        </ul>
    </div>
</nav>
<!-- End navbar -->
    
      <!-- Homepage component -->
      <div class="homepage">
        <div class="homepage-banner">
          <h1 class="homepage-title">Dhaka ISP SOLUTION</h1>
          <h2 class="homepage-text">
            Search your desired ISP:
          </h2>
    <!-- Custom Search -->      
    <div>
        <form action="customsearchresult.php" method="post">
               <h5>Select Bandwith Speed</h5>
               <input type="number" class="form-control form-control-lg" id="form-num" min="1"  max="100" step="1" name="bandwith">
                    <br>
                <h5>Select Pricing</h5>
                 <input type="number" class="form-control form-control-lg" id="form-num" min="100"  max="10000" step="1"name="price">
                    <br>
                <h5>Select Area</h5>
                    <input type="text" class="form-control form-control-lg" id="form-num" name="area" >
                    <br>  
                <h5>Select by Rating</h5>
                <input type="number" class="form-control form-control-lg" id="form-num" min="1"  max="5" step="1" name="rating">
           <button type="submit" class="btn btn-primary" id="collapsible" value="Search1" name="Search1">
                 Search </button>
                     
             </div>  
        <div class="return">
            </form> 
          <form action="index.php">
            <button type="submit" class="btn btn-warning">
                 Hompage Return </button>
         </form> 
        </div>          
<!-- End Custom search --> 
        
        </div>
        </div>
        </div>

      <!-- End OF Homepage component -->
       

    </header>
    <!-- end of header -->
   
    <!-- javascript -->
    <script src="./js/app.js"></script>
    
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </body>
</html>
