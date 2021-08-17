<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>DHAKA ISP SOLUTION</title>
    <link rel="stylesheet" href="./css/styles.css" />

    <style>
   
   table,th,td{
                border:3px solid blue;
                border-collapse: collapse;
                font-size: 20px;
                color:white;
				background-color:black;
				opacity:0.9;  /*to keep the text fixed ,use RGBa color */
				width:100%;
				height:100%
                
            }
            th,td{
                width: 300px;;
                padding:5px;
                text-align: center;
				
            }
			th{
				color:red;
				background-color:white;
				opacity:1.0;
			}
            tr{
                
                height: 50px;
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
                <a class="nav-link" href="userlogin.php">User-LOGIN</a>
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
                <a class="nav-link" href="ISPlogin.php">ISP-SIGNIN</a>
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
                <form action="customsearch.php" method="post">
                    
                <div class="">
                     <table class="">
                        <thead>
                            <th>ISP Name</th>
                            <th>Coverage Areas</th>
                            <th>Bandwith Price</th>
                            <th>Bandwith</th>
                            <th>Rating</th>
                        </thead>
             
                         <?php 
                              $packages = $_POST['bandwith'];
                              $price = $_POST['price'];
                              $area = $_POST['area'];
                              $rating = $_POST['rating'];

                              // $servername = "localhost";
                              // $username = "root";
                              // $password = "";
                              // $dbname = "dhaka isp";
                              require_once("db_connection.php");

                              $conn = new mysqli($servername, $username, $password, $dbname);
                              if ($conn->connect_errno) {
                                printf("Connect failed: %s\n", $conn->connect_error);
                                exit();
                              }

                              $query = "SELECT i.isp_name,i.area_coverage,i.rating,s.packages,s.package_cost FROM isp_admin i JOIN isp_info s ON(i.isp_id = s.isp_id) WHERE i.area_coverage LIKE '%" . $area . "%' AND i.rating >= '$rating' AND s.packages = '$packages' And s.package_cost <= '$price'";
                                if ($result = $conn->query($query)) {
                                printf("<br>%d record(s) found!<br>", $result->num_rows);
                                /* fetch associative array */
                                //printf("<br><b>hotel_id  \n\n\n hotel_name contact_no location</b><br>");
                                if($result->num_rows>"0"){
                                //printf("<br><b><u><h3><p>List of all hotels according to your Search:</p></h3></u>");
                                //printf('<table >');
                                //printf('<caption><h2 style="color:blue;">List Of Hotels</h2></caption>');
                                //printf("<tr>");
                                //printf("<th>hotel_name</th> <th>contact_no</th> <th>web address</th> <th>Location</th> <th>Room Type</th> <th>Room Size</th> <th>No OF Bed</th> <th>balcony</th> <th>Sea Sight</th> <th>Cost</th> <th>Rooms Picture</th> ");
                                //printf("</tr>");


                                while ($row = $result->fetch_assoc()) {
                                  printf("<tr>");
                                  printf(" <td> %s</td> <td>%s</td> <td> %s</td> <td> %s</td> <td> %s</td> <br>", $row["isp_name"], $row["area_coverage"],$row["package_cost"], $row["packages"], $row["rating"]   );
                                  printf("</tr>");
                                }

                                //printf("</table>");

                                $result->free(); //free result set
                                }
                                else{
                                  printf("<h3 style='color:red'><b>Requirement not match!</b></h3>");
                                }
                                }
                                else
                                {
                                  printf("No record found!");
                                }
                                $conn->close();




                //         $dbserver = "127.0.0.1";
                //         $dbdatabase = "dhaka isp";
                //         $dbusername = "root";
                //         $dbpassword = "";

                //         $conn = mysqli_connect($dbserver, $dbusername, $dbpassword, $dbdatabase);

                //         if (isset($_POST['Search1'])) {

                            
                //             $packages = $_POST['bandwith'];
                //             $price = $_POST['price'];
                //             $area = $_POST['area'];
                //             $rating = $_POST['rating'];
                //             $query = "SELECT i.isp_name,i.area_coverage,i.rating,s.packages,s.package_cost FROM isp_admin i JOIN isp_info s ON(i.isp_id = s.isp_id) WHERE i.area_coverage = '$area' AND i.rating >= '$rating' AND s.packages = '$packages' And s.package_cost <= '$price'";
                //             $search_result = mysqli_query($conn, $query);

                //             while ($rows = $search_result->fetch_assoc()) {
                //                 $_SESSION['isp_name'] = $rows['isp_name'];
                //                 $_SESSION['area_coverage'] = $rows['area_coverage'];
                //                 $_SESSION['packages'] = $rows['packages'];
                //                 $_SESSION['package_cost'] = $rows['package_cost'];

                //                 echo '
				        // <tbody>
					      // <tr>
					      //   <td>' . $rows['isp_name'] . '</td>
                //   <td>' . $rows['area_coverage'] . '</td>
                //   <td>' . $rows['package_cost'] . '</td>
                //   <td>' . $rows['packages'] . '</td>
                  
                //   <td>' . $rows['rating'] . '</td>

                            
					      // </tr>
                //         </tbody>			
                //         ';
                //             }
                //         }
                        ?> 
                </table>   
                </div> 
          
            </div>
            <form action="customsearch.php">
            <button type="submit" class="btn-primary" id="collapsible" value="Search1" name="Search1">
                 Search Again </button>
            </form>
            <div class="return">
            </form> 
          <form action="index.php">
            <button type="submit" class="btn btn-warning">
                 Hompage Return </button>
         </form> 
        </div>  
           
                       
           <!-- End Normal search -->

           

    
    
<!-- End Custom search result -->

 </div>  
                  
</div>
           <!-- End Custom Search --> 
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
