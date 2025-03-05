<?php
 session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Cart</title>
    

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link btn-lg pl-15 ml-5" style="color: black;" href="index.php">Home </a>
      </li>
      
    </ul>
  </div>
</nav>

    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center border rounded bg-light my-5">
            <h1>My Cart</h1>
        </div>

        <div class="col-lg-9">
 <table class="table text-center">
  <thead>
    <tr>
      <th scope="col">Serial No.</th>
      <th scope="col">Item Name</th>
      <th scope="col">Item Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody class="text-center">
  <form action="order.php" method="POST">
    <?php
      $name="";
      $price="";
      if(isset($_SESSION['cart']))
     {
       foreach($_SESSION['cart'] as $key => $value)
       {
          $sr=$key+1;         
          echo"
              <tr>
                 <td>$sr</td>
                 <td>$value[Item_Name]</td>
                 
                  <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
                  
                 <td><input class='text-center iquantity' onchange='subTotal()' type='number' value='$value[Quantity]' min='1' max='10'</td>
                 <td class='itotal'></td>
                 <td>
                 <input name='buynow' type='submit' class='btn btn-primary btn-block' value='BUY NOW'>
                 
                 </td> 
              </tr>
          ";

          $name=$name.$value['Item_Name'];
          $price=intval($price)+intval($value['Price']);
          $_SESSION['imran']=$name;
          $_SESSION['order2']=$price;
         

               
       }
     }
     
    ?>
    </form>
    
  </tbody>
</table>
    </div>
         <div class="col-lg-3">
             <div class="border bg-light rounded p-4">
               <h4>Total:</h4>
               <h5 class="text-left" id="gtotal"></h5>
               
               <br>
               
               <form action="manage_cart.php" method="POST">
               <h5 class="text-left" id="gtotal"></h5>
                    <button name="RemoveItem" class="btn btn-sm btn-outline-danger">REMOVE ALL ITEM</button>
                    <input type="hidden" name="Item_Name" value="$value[Item_Name]">
                 </form>
                 
               
             </div>
         </div>
      </div>  
    </div>
    <script>
     
      var gt=0;
      var iprice=document.getElementsByClassName('iprice');
      var iquantity=document.getElementsByClassName('iquantity');
      var itotal=document.getElementsByClassName('itotal');
      var gtotal=document.getElementById('gtotal');

      function subTotal()
      {
        gt=0;
        for(i=0;i<iprice.length;i++)
        {
          
          itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
          gt=gt+(iprice[i].value)*(iquantity[i].value);
        }
        gtotal.innerText=gt;
      }
       
      subTotal();
      
    </script>
</body>
</html>