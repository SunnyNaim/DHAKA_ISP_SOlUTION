<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>DHAKA ISP SOLUTION</title>
    <link rel="stylesheet" href="./css/styles.css" />
    
   
  </head>
  <BODY>

    <!-- header -->
    <!-- Navbar -->
  <header id="home">
   <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="usersignup.php">User SIGNUP</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="userlogin.php">User LOGIN</a>
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
           
           <!-- Normal search -->
           <div class="search">
                <form action="mainsearch.php" method="post">
           
                <input type="text" name="valueToSearch" class="search-box" placeholder="ISP Search by LOCATION" size="50">
                 <button type="submit" class="btn btn-primary" id="collapsible" value="Search" name="Search">
                 Search </button>    
                </form>
            </div>
           <div>
        <form action="customsearch.php" method="post">
          </br>
          
          <button type="submit" class="btn btn-success" id="collapsible" name="collapsible" >Custom Search</button>     
        </form>
   </div>              
</div>
                       
  <!-- End Normal search -->
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
