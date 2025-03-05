<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../coffee/assest/css/login.css">
    <title>Document</title>
</head>
<body class="body-b">
 
    <div class="container">
        <h1>Sign In</h1>
        <form method="POST" action="">
            <div class="form-control">
                <input name="email" id="email" type="text" required />
                <label>Your Email</label>
            </div>
            <div class="password">
                <input name="password" id="password" type="password" required />
                <label>Your Password</label>
            </div>
            <input class="btn" id="submit" name="submit" type="submit" value="sign up"  />
            <p class="text">Don't have an account?
                <a href="registration.php">Create Account</a>
            </p>
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
   if(isset($_POST['submit']))
   {
    
        $email=$_POST['email'];
        $password=$_POST['password'];
        

       $sql_query = "SELECT * FROM registration WHERE email = '$email' ";
       $pass = "SELECT * FROM registration WHERE password = '$password' ";
       $name="SELECT name FROM registration WHERE email='$email'";
       $result=$conn->query($name);
       if(!$result){
        die("Query failed:".$conn->error);
       }
       while($row=$result->fetch_assoc()){
        $username=$row['name'];
       }
       $query=mysqli_query($conn,$sql_query);
       $p_pass =mysqli_query($conn,$pass);
    
       $email_count=mysqli_num_rows($query);
       $p_count=mysqli_num_rows($p_pass);
      
       if($email_count){
             $email_pass=mysqli_fetch_assoc($query);
             if($p_count){
                
                $_SESSION['username']=$username;
                echo"<script>
                 alert('Login Successful. Welcome $username');
                 window.location.href='index.php';
                 </script>";
             }else{
                   $alert = "<script>alert('Invalid Password');</script>";
             echo $alert;
             }
        }else{
             $alert = "<script>alert('Invalid Email');</script>";
             echo $alert;
       }
        mysqli_close($conn);
   }
?> 
</body>
</html>