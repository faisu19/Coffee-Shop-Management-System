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
            <li><img src="../admin//images/dashboard.png" alt="">&nbsp;<a href="index.php"> <span>Dashboard</span></a></li>
            <li><img src="../admin/images/booking.png" alt="" width="30px" height="30px">&nbsp;<a href="booking_detail.php"><span>Bookings</span></a></li>
            <li><img src="../admin/images/order.png" alt="" width="30px" height="30px">&nbsp;<a href="order_detail.php"><span>Orders</span></a> </li>
            <li><img src="../admin/images/contact.png" alt="" width="30px" height="30px">&nbsp;<span>Contacts</span> </li>
            <li><img src="../admin/images/manage-site.png" alt="" width="30px" height="30px">&nbsp;<a href="../admin/user_detail.php"><span>User Info.</span></a> </li>
           
            <li><img src="../admin/images/setting.png" alt="" width="30px" height="30px">&nbsp;<a href="../logout.php"><span>Logout</span></a> </li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
        <img src="../admin//images/dashboard.png" width="25px" height="25px" alt="">&nbsp;
            <h2>Contacts</h2>
            <div class="nav">
                
                <div class="user">
                    <a href="#" class="btn">Admin</a>
                    
                    <div class="img-case">
                        <img src="../admin/images/user.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>Total contact</h2>
                        
                    </div>
                    <table border="1">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Contact us</th>
                        </tr>
                        <tr>
                        <?php
                             $connection=mysqli_connect("localhost","root","","coffee");
                            $query = "SELECT id, name,email,message FROM contact";
                            $query_run=mysqli_query($connection,$query);
                           
                             while($row=mysqli_fetch_assoc($query_run)){
                                    echo '<tr>';
                                    echo '<td>'.$row['id'];
                                    echo '<td>'.$row['name'];
                                    echo '<td>'.$row['email'];'</td>';
                                    echo '<td>'.$row['message'];'</td>';
                                    echo '<td><a href="https://mail.google.com/mail/u/0/#inbox?compose=new" class="btn">Sent Mail</a></td>';
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