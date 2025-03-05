<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>
  <form action="" method="POST">
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="/action_page.php">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="fname" placeholder="John Doe" required>
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com" required>
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address1" placeholder="at post belkhed" required>
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="akola" required>

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY" required>
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="444108" required>
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Only C.O.D</h3>
            <label for="fname"></label>
            
            <label for="cname">Last Name</label>
            <input type="text" id="cname" name="lname" placeholder="More Doe" required>
            <label for="ccnum">Mobil No.</label>
            <input type="text" id="ccnum" name="mobil" placeholder="+91-989988378" required>
            <label for="expmonth">Address 2</label>
            <input type="text" id="expmonth" name="address2" placeholder="Same As Previous Address" required>
            <div class="row">
              <div class="col-50">
                <label for="expyear">Product Name</label>
                <?php
                if(isset($_POST['submit1']))
                {
                     echo "<input name='product_name' type='text' id='expyear' readonly value=".$_SESSION['buy1n'];
                }
                else if(isset($_POST['submit2'])){
                  echo "<input name='product_name' type='text' id='expyear'  readonly value=".$_SESSION['buy2n'];
                }
                else if(isset($_POST['buynow'])){
                  
                  echo "<input name='product_name' type='text' id='expyear'  readonly value=".$_SESSION['imran'];
                }
                else{
                  echo "<input name='product_name' type='text' id='expyear'  readonly value=".$_SESSION['buy3n'];
                }
                ?>
                <label for="expyear">Product Price</label>
                <?php
                if(isset($_POST['submit1']))
                {
                     echo "<input type='text' id='expyear' name='product_price' readonly value=".$_SESSION['buy1p'];
                }
                else if(isset($_POST['submit2'])){
                      echo "<input type='text' id='expyear' name='product_price' readonly value=".$_SESSION['buy2p'];
                }
                else if(isset($_POST['buynow'])){
                  echo "<input type='text' id='expyear' name='product_price' readonly value=".$_SESSION['order2'];
                }
                else{
                  echo "<input type='text' id='expyear' name='product_price' readonly value=".$_SESSION['buy3p']; 
                }
                ?>
                
              </div>
              <div class="col-50">
                
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input name="ordered" type="submit" value="Continue to checkout" class="btn">
      </form>
    </div>
  </div>
  
</div>

  </form>
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
      if($_SESSION['username']==null){
        echo"<script>
                 window.location.href='login.php';
                 </script>";
       }else{
         
      if(isset($_POST['ordered']))
      {
         $fname=$_POST['fname'];
         $lname=$_POST['lname'];
         $email=$_POST['email'];
         $mobil=$_POST['mobil'];
         $address1=$_POST['address1'];
         $address2=$_POST['address2'];
         $city=$_POST['city'];
         $state=$_POST['state'];
         $zip=$_POST['zip'];
         $pname=$_POST['product_name'];
         $pprice=$_POST['product_price'];

         $sql="INSERT INTO order_detail(fname,lname,email,mobil,address1,address2,city,state,zip,pname,pprice)VALUES('$fname','$lname','$email','$mobil','$address1','$address2','$city','$state','$zip','$pname','$pprice')";
         
         if(mysqli_query($conn,$sql))
         { 
          echo"<script>
           alert('Product Ordered ');
           window.location.href='index.php';
           </script>"; 
           header('Location: index.php'); 
         }else{
           echo "error".$sql."". mysqli_error($conn);
           
         }
        
         mysqli_close($conn);
      }}
?>

</body>
</html>
