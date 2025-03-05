<!-- Follow the step to create a database in phpmyadmin panel
    1] open the phpnpmyadmin and create a new database name as "coffee"
    2] the inside the database create a table name is "registration" and add the 4 rows
    3] give the name of the rows name, email, password, cpassword and also set the datatype
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../coffee/assest/css/registration.css">
    <title>Document</title>
</head>
<body>

    <img src="../coffee/assest/images/register.jpg" alt="images not found" width="100%" height="100%">
    <div class="container">
         <div class="center">
              <h1>Register</h1>
            <form method="post" action="">
                <div class="txt_field">
                    <input id="name" type="text" name="name" required />
                    <span></span>
                     <label>Name</label>
                
                </div>
                <div class="txt_field">
                  <input id="email" type="email" name="email" required />
                  <span></span>
                  <label>Email</label>
                </div>
                <div class="txt_field">
                  <input id="password" type="password" name="password" required />
                  <span></span>
                  <label>Password</label>
                </div>
                <div class="txt_field">
                    <input id="cpassword" type="password" name="cpassword" required />
                    <span></span>
                    <label>Confirm Password</label>
                  </div>
                  <input id="submit" name="submit" type="submit" value="sign up"  />
                    <div class="signup_link">
                      Have an Account ?  <a href="../coffee/login.php">Login Here</a>
                    </div>
            </form>
         </div>
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
      if(isset($_POST['submit']))
      {
           $name=$_POST['name'];
           $email=$_POST['email'];
           $password=$_POST['password'];
           $Cpassword=$_POST['cpassword'];
   
           $sql_query="INSERT INTO registration(name,email,password,cpassword) VALUES ( '$name','$email','$password','$Cpassword')";
           if(mysqli_query($conn,$sql_query))
           { 
             $alert = "<script>alert('Register Succesfully');</script>";
             echo $alert;
             header('Location: login.php');
           }else{
             echo "error".$sql."". mysqli_error($conn);
           }
          
           mysqli_close($conn);
      }
   ?>
  
   <!--set @autoid :=0;
    UPDATE registration SET id = @autoid := (@autoid+1);
    ALTER TABLE registration AUTO_INCREMENT=1;-->
</body>
</html>