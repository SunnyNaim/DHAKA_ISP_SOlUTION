<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset='utf-8'>
        <title>Dhaka ISP Solution</title>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css'>    <!-- semantic-ui cdn -->   <!--bootstrep-->
        <link rel='stylesheet' href='../css/style1.css'>
        <style>
        

        </style>
       
    </head>
    <body>
        <div class='topbar'>
            <div class='topleft'>
              <a class='' href='index.html'>My Info</a>
              <a href='usersignup.php'>Users & Complain</a>
              <!-- <a class=' href='userlogin.php'>USER-LOGIN</a> -->
            </div>
            <div class='topright'>
              <!-- <a href='ispsignup.php'>ISP-SIGNUP</a>
              <a class='' href='isplogin.php'>ISP-LOGIN</a> -->
              <a href='mypanel.php'>LogOut</a>
            </div>
        </div>

        <div class='mainbody'>
            <!-- <div><h1 class='title'>DHAKA ISP SOLUTION</h1></div> -->
            <div><h4>Add Package Info</h4></div>
           
        </div>

        <div class='custom'>
                <form action='packagetodatabase.php' method='POST'>
                  <div class='customform'>
                      
                    <label for ='speed'>Package Name</label>
                    <input type='text' name='name' id='speed' class='' placeholder='Enter package name' required>
                    <br>

                    <label for='pricing'>package Speed</label>
                    <input type='number' name='speed' id='pricing' class='' placeholder='Enter package speed here' min='1'  max='10000' step='1' required>
                    <br>

                    <label for='a'>package Price</label>
                    <input type='number' name='price' id='a' class='' placeholder='Enter package price' required>
                    <br>

                    <label for='r'>Offer Price</label>
                    <input type='number' name='offer' id='r' class='' placeholder='Enter any offer Price' required>

                    <button type='submit' class='ui violet button'>ADD</button>
                  </div>
                </form>
            </div>

        </div>



    </body>
</html>