<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Admin Panel</title>
    <style>
        .tablesize{
            width: 90%;
        }
    </style>
    
</head>
<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1>Admin</h1>
        </div>
        <ul>
            <li><img src="../admin//images/dashboard.png" alt="">&nbsp;<a href="index.php"> <a href="index.php"><span>Dashboard</span></a> </li>
            <li><img src="../admin/images/booking.png" alt="" width="30px" height="30px">&nbsp;<span>Bookings</span> </li>
            <li><img src="../admin/images/order.png" alt="" width="30px" height="30px">&nbsp;<a href="order_detail.php"><span>Orders</span></a> </li>
            <li><img src="../admin/images/contact.png" alt="" width="30px" height="30px">&nbsp;<a href="contact_detail.php"><span>Contacts</span></a> </li>
            <li><img src="../admin/images/manage-site.png" alt="" width="30px" height="30px">&nbsp;<a href="../admin/user_detail.php"><span>User Info.</span></a> </li>
            
            <li><img src="../admin/images/setting.png" alt="" width="30px" height="30px">&nbsp;<a href="../logout.php"><span>Logout</span></a> </li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
                <img src="../admin//images/dashboard.png" width="25px" height="25px" alt="">&nbsp;
            <h2>Booking </h2>
            <div class="nav">
                
                <div class="user">
                    <a href="#" class="btn">Admin</a>
                    
                    <div class="img-case">
                        <img src="../admin/images/user.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br>
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>Total Booking</h2>
                        
                    </div>
                    <table border="1px" width="90%">
                        <tr>
                            <th>Sr. No</th>
                            <th>Name</th>
                            <th>Mobil</th>
                            <th>Arrive Date</th>
                            
                            <th>Arrive Time</th>
                            <th>Number Of People</th>
                            <th>Send Msg</th>
                            
                            

                        </tr>
                        <tr>
                            <?php
                            $connection=mysqli_connect("localhost","root","","coffee");
                            $query = "SELECT * FROM booktable ORDER BY id";
                            $query_run=mysqli_query($connection,$query);
                            if(mysqli_num_rows($query_run)>0){
                                while($row=mysqli_fetch_assoc($query_run)){
                                    echo '<tr>';
                                    echo '<td>'.$row['id'];'</td>';
                                    echo '<td>'.$row['fname'].' '.$row['lname'];'</td>';
                                    
                                    
                                    echo '<td>'.$row['pnumber'];'</td>';
                                    echo '<td>'.$row['arrivedate'];'</td>';
                                    
                                    echo '<td>'.$row['arrivetime'];'</td>';
                                    echo '<td>'.$row['npeople'];'</td>';
                                    
                                    echo '<td><a href="https://mail.google.com/mail/u/0/#inbox?compose=new" class="btn">Msg</a></td>';
                                    echo '</tr>';
                                }
                            
                            }else{
                                echo "0 result";
                            }
                            ?>
                        </tr>
                        
                    </table>
                </div>
</body>
</html>