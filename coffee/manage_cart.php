<?php
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['AddToCart']))
    {
        if(isset($_SESSION['cart']))
        {
           $myitems=array_column($_SESSION['cart'],'Item_Name');
           if(in_array($_POST['Item_Name'],$myitems))
           {
               echo"<script>
               alert('Item Alredy Added');
               window.location.href='index.php';
               </script>";
           }
           else{
                 $count=count($_SESSION['cart']);
                 $_SESSION['cart'][$count]=array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price'],'Quantity'=>1);
                 echo"<script>
                 alert('Item Added');
                 window.location.href='index.php';
                 </script>";
           }
        }
        else
        {
           $_SESSION['cart'][0]=array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price'],'Quantity'=>1);
           echo"<script>
           alert('Item Added');
           window.location.href='index.php';
           </script>";
        }
    }
    if(isset($_POST['RemoveItem']))
    {
        $h5value=$_POST['h5value'];
        $_SESSION['totalprice']=$h5value;
            unset($_SESSION['cart']);
            echo "<script>
                    alert('All Item Removed');
                    window.location.href='mycart.php'</script>";

        
        /*foreach($_SESSION['cart'] as $key => $value)
        {
            if($value['Item_Name']==$_POST['Item_Name'])
            {
               unset($_SESSION['cart'][$key]);
               $_SESSION['cart']=array_values($_SESSION['cart']);
               echo"<script>
                    alert('Item Removed');
                    window.location.href='mycart.php';
               </script>";
            }
        }*/
    }
}

?>