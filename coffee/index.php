<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive coffee shop website design</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="../coffee/assest/css/style.css">
    <link rel="stylesheet" href="../coffee/assest/js/script.js">
    <style>
        /* Style the dropdown button */
.dropbtn {
    left: 48%;
    position: fixed;
    top: 3.5%;
    background-color: #121312;
    color: white;
    font-size: 16px;
    /* border: none; */
    border: 2px solid #ccc;
    cursor: pointer;
    border-radius: 1px;
    border-width: 1;
    padding: 4px 23px 5px 27px
}

/* Style the dropdown content */
.dropdown-content {
  display: none;
  position: fixed;
  z-index: 1;
  margin-left: 511px;
  border: 0.1px solid white;
  padding: 1px;
  margin-right: 100px;
  margin-top: 10px;
}
.dropdown-content li{
    border: 1px solid white;
}

/* Show the dropdown content when the button is clicked */
.dropdown:hover .dropdown-content {
  display: block;
}

    </style>
</head>
<body>   
<!-- header section starts  -->
<header class="header">
<div class="head" style="align-items: center;">
    <a href="#" class="logo">
        <img src="../coffee/assest/images/logo.png" alt="">
    </a>

     <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#menu">menu</a>
        <a href="#products">products</a>
        <a href="#review">review</a>
        <a href="#footer">contact</a>
        
        <a href="mycart.php">My Cart</a>
        <?php
            error_reporting(0);
            if($_SESSION['username']==null){
                  echo '<a href="login.php">Login</a>';
            }else{
            if(isset($_SESSION['username']))
            {
                $a=$_SESSION['username'];
               echo '
               <div class="dropdown">
               <ul>
               <button class="dropbtn">'.$a.'</button>
               <div class="dropdown-content">
                 
                 <li><a href="logout.php">Log Out</a></li>
               </div>
               </ul>
             </div>  '; 
               
            }
        }
        ?>
        <script>
            var dropdown = document.querySelector('.dropdown');
            var dropdownContent = document.querySelector('.dropdown-content');
            var timeoutId;
            dropdown.addEventListener('mouseover', function() {
              clearTimeout(timeoutId);
              dropdownContent.style.display = 'block';
            });
            dropdown.addEventListener('mouseout', function() {
              timeoutId = setTimeout(function() {
                dropdownContent.style.display = 'none';
              }, 2000);
            });

        </script>
         
    </nav>
</div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>fresh coffee in the morning</h3>
        <p>Step into our coffee world and experience the aroma of freshly brewed coffee!</p>
        <?php
        error_reporting(0);
        if($_SESSION['username']==null){
            
            echo '<a href="login.php" class="btn">Book a Table</a>';
            
        }else{
            echo '<a href="../coffee/table.php" class="btn">Book a Table</a>';
        }
        ?>
        
       
    </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="../coffee/assest/images/about-img1.png" alt="" width="200px" height="400px">
        </div>

        <div class="content">
            <h3>what makes our coffee special?</h3>
            <p>Many coffee shops pride themselves on sourcing high-quality beans from specific regions or farms. They may describe the unique flavor profile that comes from these beans, and how they are selected and roasted.</p>
            <p>The roasting process can greatly impact the flavor and aroma of coffee. A coffee shop may describe how they roast their beans, what equipment they use, and what makes their roast unique.</p>
            <a href="#" class="btn">learn more</a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- menu section starts  -->

<section class="menu" id="menu">
    <h1 class="heading"> our <span>menu</span> </h1>
    
    <div>
    <div class="box-container">
        <form action="manage_cart.php" method="POST">
        <div class="box card">
            <img src="../coffee/assest/images/menu-1.png" alt="">
            <h3>Devil's Own</h3>
            <div class="price"><p>Rs.150<span>200.0</span></p></div>
            <button class="btn" type="submit" name="AddToCart">add to cart</button>  
            <input type="hidden" name="Item_Name" value=" Devil_Own ">
            <input type="hidden" name="Price" value="150">
        </div>
        </form>

        <form action="manage_cart.php" method="POST">
        <div class="box card">
            <img src="../coffee/assest/images/menu-2.png" alt="">
            <h3>cold sparkle</h3>
            <div class="price">Rs.150 <span>170.0</span></div>
            <button class="btn" type="submit" name="AddToCart">add to cart</button>
            <input type="hidden" name="Item_Name" value=" cold_sparkle ">
            <input type="hidden" name="Price" value="150">     
        </div>
        </form>

        <form action="manage_cart.php" method="POST">
        <div class="box card">
            <img src="../coffee/assest/images/menu-3.png" alt="">
            <h3>iced eskimo</h3>
            <div class="price">Rs.150 <span>180.0</span></div>
            <button class="btn" type="submit" name="AddToCart">add to cart</button>
            <input type="hidden" name="Item_Name" value=" iced_eskimo ">
            <input type="hidden" name="Price" value="150">
        </div>
        </form>

        <form action="manage_cart.php" method="POST">
        <div class="box">
            <img src="../coffee/assest/images/menu-4.png" alt="">
            <h3>cafe frappe</h3>
            <div class="price">Rs.150 <span>170.0</span></div>
            <button class="btn" type="submit" name="AddToCart">add to cart</button>
            <input type="hidden" name="Item_Name" value=" cafe_frappe ">
            <input type="hidden" name="Price" value="150">
        </div>
        </form>

        <form action="manage_cart.php" method="POST">
        <div class="box">
            <img src="../coffee/assest/images/menu-5.png" alt="">
            <h3>tropical iceberg</h3>
            <div class="price">Rs.150 <span>190.0</span></div>
            <button class="btn" type="submit" name="AddToCart">add to cart</button>
            <input type="hidden" name="Item_Name" value=" tropical_iceberg ">
            <input type="hidden" name="Price" value="150">
        </div>
        </form>

        <form action="manage_cart.php" method="POST">
        <div class="box">
            <img src="../coffee/assest/images/menu-6.png" alt="">
            <h3>dark frappe</h3>
            <div class="price">Rs.150 <span>200.0</span></div>
            <button class="btn" type="submit" name="AddToCart">add to cart</button>
            <input type="hidden" name="Item_Name" value=" dark_frappe ">
            <input type="hidden" name="Price" value="150">
        </div>
        </form>

 
    </div>

</section>

<!-- menu section ends -->

<section class="products" id="products">

    <h1 class="heading"> our <span>products</span> </h1>

    <div class="box-container">

        <div class="box">
            <!--<div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>-->
            <form action="order.php" method="POST">
            <div class="image">
                <img src="../coffee/assest/images/coffee_img1.webp" alt="">
            </div>
            <div class="content">
                <h3>Nescafe classic</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">Rs.150 <span>170.0</span>
                
                </div>
                <form action="order.php" method="POST">
                    <?php
                         if($_SESSION['username']==null){
                         echo '<a href="login.php" name="submit1" class="btn">Buy Now</a>'; 
                         }else{
                          echo '<a href="../coffee/order.php" name="submit1" class="btn">Buy Now</a>';
                         }
                     ?> 
                <?php
                $_SESSION['buy1n']='Nescafe';
                $_SESSION['buy1p']='150';
                ?>
                </form>
            </div>
            </form>
        </div>

        <div class="box">
            <!--<div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>-->
            <div class="image">
                <img src="../coffee/assest/images/coffee_img2.webp" alt="">
            </div>
            <div class="content">
                <h3>BRU Instant</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>

                <form action="order.php" method="POST">
                <div class="price">Rs.292 <span>Rs.380.0</span></div>
               <?php
                         if($_SESSION['username']==null){
                         echo '<a href="login.php" name="submit2" class="btn">Buy Now</a>'; 
                         }else{
                          echo '<a href="../coffee/order.php" name="submit2" class="btn">Buy Now</a>';
                         }
                     ?>
                <?php
                $_SESSION['buy2n']='BRU';
                $_SESSION['buy2p']='292';
                ?>
                </form>
            </div>
        </div>

        <div class="box">
            <!--<div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>-->
            <div class="image">
                <img src="../coffee/assest/images/coffee_img3.webp" alt="">
            </div>
            <div class="content">
                <h3>Contineltal</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>

                <form action="order.php" method="POST">
                <div class="price">Rs.195 <span>280.0</span></div>
                <?php
                         if($_SESSION['username']==null){
                         echo '<a href="login.php" name="submit3" class="btn">Buy Now</a>'; 
                         }else{
                          echo '<a href="../coffee/order.php" name="submit3" class="btn">Buy Now</a>';
                         }
                     ?>
                <?php
                $_SESSION['buy3n']='Contineltal';
                $_SESSION['buy3p']='195';
                ?>
                </form>
            </div>
        </div>

    </div>

</section>

<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading"> customer's <span>review</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="../coffee/assest/images/quote-img.png" alt="" class="quote">
            <p>I recently visited this coffee shop and I have to say, I was blown away by the quality of their coffee. The latte I ordered was perfectly balanced, with just the right amount of sweetness and a smooth, creamy texture. You can tell that they take their coffee seriously here, as the baristas were knowledgeable and passionate about their craft. </p>
            <img src="../coffee/assest/images/pic-4.png" class="user" alt="">
            <h3>Shah Rukh Khan</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="box">
            <img src="../coffee/assest/images/quote-img.png" alt="" class="quote">
            <p>I absolutely love this coffee shop! Their coffee is always fresh and delicious, and they offer a great variety of drinks to choose from. The staff is friendly and welcoming, and they always take the time to explain their menu and answer any questions I have. I especially love their latte art - it always makes my day.Great coffee,friendly staff, and cozy atmosphere-my new favorite spot!</p>
            <img src="../coffee/assest/images/pic-5.png" class="user" alt="">
            <h3>Shaikh Hamdan</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
        
        <div class="box">
            <img src="../coffee/assest/images/quote-img.png" alt="" class="quote">
            <p>I stumbled upon this coffee shop while exploring the area, and I'm so glad I did! The coffee is hands down some of the best I've ever had. They roast their own beans, and you can tell that they take pride in their craft. The staff is also incredibly friendly and knowledgeable - they took the time to explain the different roasts and brewing methods to me.</p>
            <img src="../coffee/assest/images/pic-6.png" class="user" alt="">
            <h3>Shaikh imran</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

    </div>

</section>

<!-- review section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>contact</span> us </h1>

    <div class="row">

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d804386.2139086126!2d76.01539853437892!3d21.03227588743785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd7693a36a23a89%3A0x6109ffdb4c5546b5!2sStarbucks%20Sangrampur!5e1!3m2!1sen!2sin!4v1677355882281!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        <form action="" method="POST">
            <h3>get in touch</h3>
            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input name="name" type="text" placeholder="name" required>
            </div>
            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input name="email" type="email" placeholder="email" required>
            </div>
            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input name="message" type="text" placeholder="Enter message" required>
            </div>
            <input name="submit" type="submit" value="contact now" class="btn">
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
           $name=$_POST['name'];
           $email=$_POST['email'];
           $message=$_POST['message'];
           
   
           $sql_query="INSERT INTO contact(name,email,message) VALUES ( '$name','$email','$message')";
           if(mysqli_query($conn,$sql_query))
           { 
             $alert = "<script>alert('We contact as soon as possible');</script>";
             echo $alert;
            
           }else{
             echo "error".$sql."". mysqli_error($conn);
           }
          
           mysqli_close($conn);
      }
   ?>

</section>

<!-- contact section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

    <h1 class="heading"> our <span>blogs</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="../coffee/assest/images/blog-4.png" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">Devil's Own</a>
                <span>by admin / 21st dec, 2022</span>
                <p>Devil's Own Coffee is a brand of coffee that was established in 1990. They offer a range of specialty coffee blends and flavored coffee, and have become a popular choice for coffee lovers around the world. While Devil's Own Coffee doesn't have an official blog, there are many coffee blogs and review websites where you can find information and reviews about their coffee.</p>
                <a href="https://www.youtube.com/watch?v=kgBG2hKvPUE" class="btn">read more</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="../coffee/assest/images/blog-5.png" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">Tropical Iceberg</a>
                <span>by admin / 1st jan, 2023</span>
                <p>Tropical Iceberg is something you are used to ordering in your favourite coffee shop. Although it sounds very exotic, tropical iceberg is just cold coffee with an ice cream. It sounds like an easy cold coffee recipe to try, but you can never get the same texture of Tropical Iceberg at home. What you need to know is an experts tip to make this interesting blend of coffee with ice cream.</p>
                <a href="https://www.scrummyrecipes.com/post/tropical-iceberg-ccd-style" class="btn">read more</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="../coffee/assest/images/blog-6.png" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">Café Frappé</a>
                <span>by admin / 11th jan, 2023</span>
                <p>Café Frappé is a type of coffee drink that originated in Greece and has become popular in many parts of the world. It is made by blending instant coffee, sugar, and milk with ice, and is often topped with whipped cream and chocolate shavings.You must have ordered a Frappé at least once in your life if cafés are your go-to hangout spot. It is indeed one of the most popular and loved cold coffee.</p>
                <a href="https://en.wikipedia.org/wiki/Frapp%C3%A9_coffee" class="btn">read more</a>
            </div>
        </div>

    </div>

</section>

<!-- blogs section ends -->

<!-- footer section starts  -->

<section class="footer" id="footer">

    <div class="share">
        <a href="https://www.facebook.com/skimran1702" class="fab fa-facebook-f"></a>
        <a href="https://twitter.com/SHAIKHI52769839" class="fab fa-twitter"></a>
        <a href="https://www.instagram.com/shaikh_imran_82/" class="fab fa-instagram"></a>
        <a href="https://www.linkedin.com/in/shaikh-imran-27b06021a/" class="fab fa-linkedin"></a>
        <a href="https://in.pinterest.com/skimran740434/" class="fab fa-pinterest"></a>
    </div>

    <div class="links">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#menu">menu</a>
        <a href="#products">products</a>
        <a href="#review">review</a>
        <a href="#contact">contact</a>
        <a href="#blogs">blogs</a>
        <a href="../coffee/adminlogin.php">admin</a>
    </div>

    <div class="credit">created by <span>mr.SDI Foundation</span> | all rights reserved</div>

</section>



<!-- footer section ends -->


<!-- custom js file link  -->
<script src="/assest/js/script.js"></script>

</body>
</html>