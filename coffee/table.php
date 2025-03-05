<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../coffee/assest/css/tablecss.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Table Booking</title>
</head>
<body>
    <div class="container">
        <form class="form-group" method="post" action="">
            <div id="form">
                <h1 class="text-white text-center">Book Table</h1>
            <div id="first-group">
                <div id="content">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input type="text" id="input-group" placeholder="First Name" name="fname" required>
                </div>
                <div id="content">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <input type="number" id="input-group" placeholder="Phone Number" name="pnumber" required>
                </div>
                <span id="arrivedate">Arrive Date</span>
                <div id="content">
                    <i class="fa fa-calander" aria-hidden="true"></i>
                    
                    <input type="date" id="input-group1" name="arrivedate" required>
                </div>

                <div id="content">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <input type="number" id="input-group" placeholder="Number of people" name="npeople" required>
                </div>
            </div>
                 <div id="second-group">
                    <div id="content">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" id="input-group" placeholder="Last Name" name="lname" required>
                    </div>
                    <div id="content">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <input type="email" id="input-group" placeholder="Email" name="email" required>
                    </div>
                    <span id="arrivedate">Arrive Time</span>
                    <div id="content">
                        <i class="fa fa-calander" aria-hidden="true"></i>
                        <input type="time" id="input-group2" placeholder="Arrival Time" name="arrivetime" required>
                    </div>
                    <div id="content">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <input type="text" id="input-group" placeholder="Coffee name" name="coffeename">
                    </div>
                   

                 </div>
                  
                 <button type="submit" value="book" id="submit-btn" name="book">Book Now</button>

            </div>
        </form>
    </div>
    <?php
      
    $server_name="localhost";
    $username="root";
    $password="";
    $database_name="coffee";
    $conn=mysqli_connect($server_name,$username,$password,$database_name);
 
    if(!$conn)
    {
         die("Connect Failed :".mysqli_connect_error());
 
    }
    if(isset($_POST['book']))
    {
         $fname=$_POST['fname'];
         $lname=$_POST['lname'];
         $pnumber=$_POST['pnumber'];
         $email=$_POST['email'];
         $arrivedate=$_POST['arrivedate'];
         $arrivetime=$_POST['arrivetime'];
         $npeople=$_POST['npeople'];
         $coffeename=$_POST['coffeename'];
 
         $sql_query="INSERT INTO booktable(fname,lname,pnumber,email,arrivedate,arrivetime,npeople,coffeename) VALUES ( '$fname','$lname','$pnumber','$email','$arrivedate','$arrivetime','$npeople','$coffeename')";
         if(mysqli_query($conn,$sql_query))
         {  
           
           echo"<script>
                 alert('Table Book Successful');
                 window.location.href='index.php';
                 </script>";
           

         }else{
           echo "error".$sql_query."". mysqli_error($conn);
           echo"<script>
           alert('Server Error');
           window.location.href='index.php';
           </script>";
           
         }
        
         mysqli_close($conn);
    }
 ?>
</body>
</html>