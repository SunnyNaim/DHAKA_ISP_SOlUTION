<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="./js1/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css1/styles1.css" />
    <link href="./css1/sb-admin.css" rel="stylesheet">
    <title>User-UI</title> 

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
            input[type=text] {
                font-size: 20px;
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
                }
  

  </style> 


</head>

<body>

    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>
            <!-- Top Menu Items -->


            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                <li>
                <a href="#"><i class="fa fa-fw fa-dashboard"></i>
                        <?php

                                    // $servername = "localhost";
                                    // $username = "root";
                                    // $password = "";
                                    // $dbname = "dhaka isp";
                                    require_once("db_connection.php");

                                    // $id ='2255566';
                                    $id = $_GET['userid'];
                                    //$p ="package4";
                                    //printf("%s",$id);
                                    //<input type='hidden' name='ispid' value='".$id."'> 
                                    print("<form action='userhome.php' method='get'>
                                    
                                    <input type='hidden' name='userid' value='".$id."'>                                   
                                    <input class='btn btn-primary btn-lg' type='submit' value='Home' name='Edit' >
                                    </form>");

                        ?>
                        </a>

                </li>
                   
                    <li  >
                        <a href="#"><i class="fa fa-fw fa-dashboard"></i>
                        <?php

                                    $servername = "localhost";
                                    $username = "root";
                                    $password = "";
                                    $dbname = "dhaka isp";

                                    // $id ='2255566';
                                    $id = $_GET['userid'];
                                    //$p ="package4";
                                    //printf("%s",$id);
                                    //<input type='hidden' name='ispid' value='".$id."'> 
                                    print("<form action='userreport.php' method='get'>
                                    
                                    <input type='hidden' name='userid' value='".$id."'>                                    
                                    <input class='btn btn-primary btn-lg' type='submit' value='Issue Report' name='Edit' >
                                    </form>");

                        ?>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#"><i class="fa fa-fw fa-dashboard"></i>
                        <?php

                                    $servername = "localhost";
                                    $username = "root";
                                    $password = "";
                                    $dbname = "dhaka isp";

                                    // $id ='2255566';
                                    $id = $_GET['userid'];
                                    //$p ="package4";
                                    //printf("%s",$id);
                                    //<input type='hidden' name='ispid' value='".$id."'> 
                                    print("<form action='usersub.php' method='get'>
                                    
                                    <input type='hidden' name='userid' value='".$id."'>                                    
                                    <input class='btn btn-primary btn-lg' type='submit' value='Subscriptions' name='Edit' >
                                    </form>");

                        ?>
                        </a>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-fw fa-dashboard"></i>  
                       <?php

                                    $servername = "localhost";
                                    $username = "root";
                                    $password = "";
                                    $dbname = "dhaka isp";

                                    // $id ='2255566';
                                    $id = $_GET['userid'];
                                    //$p ="package4";
                                    //printf("%s",$id);
                                    //<input type='hidden' name='ispid' value='".$id."'> 
                                    print("<form action='userbilling.php' method='get'> 
                                    <input type='hidden' name='userid' value='".$id."'>                          
                                    <input class='btn btn-primary btn-lg' type='submit' value='Billing' name='Edit' >
                                    </form>");

                        ?>
                        </a> 

                    </li>

                    <li>
                        <a href="#"><i class="fa fa-fw fa-dashboard"></i>  
                       <?php

                                    $servername = "localhost";
                                    $username = "root";
                                    $password = "";
                                    $dbname = "dhaka isp";

                                    // $id ='2255566';
                                    $id = $_GET['userid'];
                                    //$p ="package4";
                                    //printf("%s",$id);
                                    //<input type='hidden' name='ispid' value='".$id."'> 
                                    print("<form action='userinfo.php' method='get'> 
                                    <input type='hidden' name='userid' value='".$id."'>                          
                                    <input class='btn btn-primary btn-lg' type='submit' value='User INFO' name='Edit' >
                                    </form>");

                        ?>
                        </a> 

                    </li>

                    <li>

                    <a href="#"><i class="fa fa-fw fa-dashboard"></i>
                        <?php

                                    $servername = "localhost";
                                    $username = "root";
                                    $password = "";
                                    $dbname = "dhaka isp";

                                    // $id ='2255566';
                                    //$id = $_GET['userid'];
                                    //$p ="package4";
                                    //printf("%s",$id);
                                    //<input type='hidden' name='ispid' value='".$id."'> 
                                    print("<form action='../home/index.php' method='get'>                                  
                                    <input class='btn btn-primary btn-lg' type='submit' value='Log Out' name='Edit' >
                                    </form>");

                        ?>
                        </a>


                    </li>


                </ul>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>



        <!-- /.container-fluid -->
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome
                            <small>

                            <?php

                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "dhaka isp";

                                        $id = $_GET['userid'];
                                        //$pass = $_GET['password'];
                                        
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        if ($conn->connect_errno) {
                                          printf("Connect failed: %s\n", $conn->connect_error);
                                          exit();
                                        }
                                      // printf("Connected successfully");
                                       $query = "SELECT First_Name,Last_Name FROM user where user_id='$id'";
                                       if ($result = $conn->query($query)) {
                                       //printf("<br>%d record(s) found!<br>", $result->num_rows);
                                       /* fetch associative array */
                                       while ($row = $result->fetch_assoc()) {
                                         printf("%s %s                 ", $row["First_Name"],$row["Last_Name"] );
                                       }
                                       $result->free(); //free result set
                                       }
                                       else
                                       {
                                         printf("No record found!");
                                       }
                                       $conn->close();
                            ?>
                            
                            </small>
                        </h1>
                        <ol class="breadcrumb">
                           <br>
                            <!-- Table -->
                            <center><button type="button" class="btn btn-primary btn-lg btn-block">My Info</button></center>   
                            
                            <!-- End Table -->
                        </ol>

                    </div>
                </div>
                <!-- /.row -->
               
                       
                <?php

                                    $servername = "localhost";
                                    $username = "root";
                                    $password = "";
                                    $dbname = "dhaka isp";

                                   
                                    $id = $_GET['userid'];

                                    $conn = new mysqli($servername, $username, $password, $dbname);
                                    if ($conn->connect_errno) {
                                      printf("Connect failed: %s\n", $conn->connect_error);
                                      exit();
                                    }
      
                                    $query = "SELECT First_Name,Last_Name,Email,Address,mobile FROM user WHERE user_id = $id";
                                      if ($result = $conn->query($query)) {
                                     
                                      if($result->num_rows>"0"){
                                          //print("%s",$row["First_Name"]);

                                          while ($row = $result->fetch_assoc()) {
                                              extract($row);
                                            // print("<form action='page.php' method='get'>
                                            //             f0:<input type='text' name='CourseID' value='$First_Name'> 
                                                                                                   
                                            //             <input type='submit' value='Edit' name='Edit' >
                                            //         </form>");
                                            print("<form id='' class='' action='updateinfodatabase.php' method='get'>
                                                    <h3 class=' text-white pt-5'></h3>
                        
                                                    <label for='First_Name' class=''><b>First_Name:</b></label><br>
                                                        <input type='text' name='First_Name' id='First_Name' value='$First_Name' class='' required>

                                                        <label for='Last_Name' class='text-white pt-5'><b>Last_Name:</b></label><br required>
                                                        <input type='text' name='Last_Name' id='Last_Name' value='$Last_Name' class=''>

                                                        <label for='Last_Name' class='text-white pt-5'><b>Email:</b></label><br required>
                                                        <input type='text' name='Email' id='Last_Name' value='$Email' class=''>

                                                        <label for='Last_Name' class='text-white pt-20'><b>Address:</b></label><br required>
                                                        <input type='text' name='Address' id='Last_Name' value='$Address' class=''>

                                                        <label for='Last_Name' class='text-white pt-5'><b>Phone No:</b></label><br required>
                                                        <input type='text' name='mobile' id='Last_Name' value='$mobile' class=''>

                                                        <input type='hidden' name='userid' id='Last_Name' value='$id' class=''>
                                                    
                                                    <div class='form-group'>
                                                        <input type='submit' name='Update' class='btn btn-info btn-md' value='Update Info'>
                                                    </div>
                                                </form>");



                                          }
                       
      
                                      $result->free(); //free result set
                                      }
                                      else{
                                        printf("<h3><b>Requirement not match!</b></h3>");
                                      }
                                      }
                                      else
                                      {
                                        printf("No record found!");
                                      }
                                      $conn->close();

                        ?>
                        
                            
                            <div class="form-group">
                      
  
               <!-- End row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="/js1/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="/js1/bootstrap.min.css"></script> 

</body>

</html>