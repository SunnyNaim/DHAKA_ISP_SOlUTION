<?php
    $id = $_POST["userid"];
    $pass = $_POST["password"];

    require_once('db_connection.php');
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_errno) {
      printf("Connect failed: %s\n", $conn->connect_error);
      exit();
    }
  // printf("Connected successfully");
   $query = "SELECT User_id,Password FROM user where user_id='$id'";
   if ($result = $conn->query($query)) {

   //printf("<br>%d record(s) found!<br>", $result->num_rows);
   if(($result->num_rows)>0){

   /* fetch associative array */
   while ($row = $result->fetch_assoc()) {
    // printf("%s %s                 ", $row["User_id"],$row["Password"] );
     if($pass == $row["Password"]){
        header('Location: ../user/userinfo.php?userid='.$id);
        // printf("yes");
     }
     else
     {
       printf("incorrect id or password!");
     }

   }
   $result->free(); //free result set
   }

   else
   {
     printf("incorrect id or password!");
   }
}
   $conn->close();



?>