<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Admin Panel</title>
</head>

<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1>Admin</h1>
        </div>
        <ul>
            <li><img src="../admin//images/dashboard.png" alt="">&nbsp; <span>Dashboard</span> </li>
            <li><img src="../admin/images/booking.png" alt="" width="30px" height="30px">&nbsp;<a href="booking_detail.php"><span>Bookings</span></a></li>
            <li><img src="../admin/images/order.png" alt="" width="30px" height="30px">&nbsp;<a href="order_detail.php"><span>Orders</span></a> </li>
            <li><img src="../admin/images/contact.png" alt="" width="30px" height="30px">&nbsp;<a href="contact_detail.php"><span>Contacts</span></a> </li>
            <li><img src="../admin/images/manage-site.png" alt="" width="30px" height="30px">&nbsp;<a href="../admin/user_detail.php"><span>User Info.</span></a> </li>
            
            <li><img src="../admin/images/setting.png" alt="" width="30px" height="30px">&nbsp;<a href="../logout.php"><span>Logout</span></a> </li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
        <img src="../admin//images/dashboard.png" width="25px" height="25px" alt="">&nbsp;
            <h2>Dashboard</h2>
            <div class="nav">
                
                <div class="user">
                    <a href="../index.php" class="btn">Log Out</a>
                    
                    <div class="img-case">
                        <img src="../admin/images/user.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <?php
                        $con=mysqli_connect("localhost","root","","coffee");
                         $dash_category_query="SELECT * FROM order_detail";
                         $dash_category_query_run=mysqli_query($con,$dash_category_query);
                         if($category_total=mysqli_num_rows($dash_category_query_run))
                         {
                            echo '<h1>'.$category_total.'</h1>';
                         }
                         else{
                            echo '<h1>No Data</h1>';
                         }
                       
                        
                        ?>
                    
                        <h3>Total Orders</h3>
                    </div>
                    <div class="icon-case">
                        <img src="../admin/images/students.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                    <?php
                        $con=mysqli_connect("localhost","root","","coffee");
                         $dash_category_query="SELECT * FROM booktable";
                         $dash_category_query_run=mysqli_query($con,$dash_category_query);
                         if($category_total=mysqli_num_rows($dash_category_query_run))
                         {
                            echo '<h1>'.$category_total.'</h1>';
                         }
                         else{
                            echo '<h1>No Data</h1>';
                         }
                       
                        
                        ?>
                        <h3>Total booking</h3>
                    </div>
                    <div class="icon-case">
                        <img src="../admin/images/teachers.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                    <?php
                        $con=mysqli_connect("localhost","root","","coffee");
                         $dash_category_query="SELECT * FROM registration";
                         $dash_category_query_run=mysqli_query($con,$dash_category_query);
                         if($category_total=mysqli_num_rows($dash_category_query_run))
                         {
                            echo '<h1>'.$category_total.'</h1>';
                         }
                         else{
                            echo '<h1>No Data</h1>';
                         }
                       
                        
                        ?>
                    
                        <h3>Total User</h3>
                    </div>
                    <div class="icon-case">
                        <img src="../admin/images/schools.png" alt="">
                    </div>
                </div>
                
            </div>
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>Recent Orders</h2>
                        <a href="../admin/order_detail.php" class="btn">View All</a>
                    </div>
                    <table border="1">
                        <tr>
                            <th>Name</th>
                            <th>Coffee</th>
                            <th>Amount</th>
                            <th>Option</th>
                        </tr>
                        <tr>
                        <?php
                             $connection=mysqli_connect("localhost","root","","coffee");
                            $query = "SELECT fname, lname, pname, pprice FROM order_detail  ORDER BY id DESC LIMIT 7";
                            $query_run=mysqli_query($connection,$query);
                           
                             while($row=mysqli_fetch_assoc($query_run)){
                                    echo '<tr>';
                                    echo '<td>'.$row['fname'].' '.$row['lname'];'</td>';
                                    echo '<td>'.$row['pname'];'</td>';
                                    echo '<td>'.$row['pprice'];'</td>';
                                    echo '<td><a href="../admin/order_detail.php" name="view" class="btn">View</a></td>';
                                    echo '</tr>';
                                    
                                    
                                }
                            
                            ?>
                            
                        </tr>
                        
                    </table>
                </div>
                <div class="new-students">
                    <div class="title">
                        <h2>Recent message</h2>
                        <a href="../admin/contact_detail.php" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            
                            <th>Profile</th>
                            <th>Name</th>
                            <th>option</th>
                        </tr>
                        <tr>
                        <?php
                             $connection=mysqli_connect("localhost","root","","coffee");
                            $query = "SELECT name FROM contact ORDER BY id DESC LIMIT 4 ";
                            $query_run=mysqli_query($connection,$query);
                           
                             while($row=mysqli_fetch_assoc($query_run)){
                                    echo '<tr>';
                                    echo '<td><img src="../admin/images/user.png" alt=""></td>';
                                    echo '<td>'.$row['name'];'</td>';
                                    echo '<td><img src="../admin/images/info.png" alt=""></td>';
                                    echo '</tr>';
                                       
                                }
                            
                            ?>
                            
                        </tr>
                        

                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>