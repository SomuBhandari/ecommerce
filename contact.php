<?php
session_start();
include("includes/db.php");
include("functions/functions.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>E commerce Store</title>
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100" rel="stylesheet" >
    <link href="styles/bootstrap.min.css" rel="stylesheet">
    <link href="styles/style.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
  </head>
  <body>
    <div id="top"><!-- top Starts -->
      <div class="container"><!-- container Starts -->
        <div class="col-md-6 offer"><!-- col-md-6 offer Starts -->
            <a href="#" class="btn btn-success btn-sm" >
      <?php
          if(!isset($_SESSION['customer_email'])){
                        echo "Welcome :Guest";
                          }
          else{
            echo "Welcome : " . $_SESSION['customer_email'] . "";
              }
      ?>
                  </a>
                  <a href="#">
                              Shopping Cart Total Price: <?php total_price(); ?>, Total Items <?php items(); ?>
                  </a>
            </div><!-- col-md-6 offer Ends -->
                <div class="col-md-6"><!-- col-md-6 Starts -->
                    <ul class="menu"><!-- menu Starts -->
                        <li>
                          <a href="customer_register.php">
                            Register
                          </a>
                          </li>
                          <li>
                                <?php
                                if(!isset($_SESSION['customer_email'])){
                                            echo "<a href='checkout.php' >My Account</a>";
                                          }
                                else{
                                            echo "<a href='customer/my_account.php?my_orders'>My Account</a>";
                                          }
                                  ?>
                          </li>
                          <li>
                              <a href="cart.php">
                                Go to Cart
                              </a>
                            </li>
                            <li>
                              <?php
                                  if(!isset($_SESSION['customer_email'])){
                                        echo "<a href='checkout.php'> Login </a>";
                                      }
                                      else {
                                            echo "<a href='logout.php'> Logout </a>";
                                            }
                                    ?>
                                  </li>
                                </ul><!-- menu Ends -->
                      </div><!-- col-md-6 Ends -->
                    </div><!-- container Ends -->
      </div><!-- top Ends -->
      <div class="navbar navbar-default" id="navbar"><!-- navbar navbar-default Starts -->
            <div class="container" ><!-- container Starts -->
                  <div class="navbar-header"><!-- navbar-header Starts -->
                        <a class="navbar-brand home" href="index.php" ><!--- navbar navbar-brand home Starts -->
                                    <img src="images/logo.jpg" alt=" logo" class="hidden-xs" >

                        </a><!--- navbar navbar-brand home Ends -->
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation"  >
                                    <span class="sr-only" >Toggle Navigation </span>
                                    <i class="fa fa-align-justify"></i>
                                    </button>
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search" >
                                    <span class="sr-only" >Toggle Search</span>
                                    <i class="fa fa-search" ></i>
                                    </button>
                  </div><!-- navbar-header Ends -->
                  <div class="navbar-collapse collapse" id="navigation" ><!-- navbar-collapse collapse Starts -->
                    <div class="padding-nav" ><!-- padding-nav Starts -->
                        <ul class="nav navbar-nav navbar-left"><!-- nav navbar-nav navbar-left Starts -->
                          <li>
                            <a href="index.php"> Home </a>
                          </li>
                          <li>
                            <a href="shop.php"> Shop </a>
                          </li>
                          <li>
                              <?php
                                if(!isset($_SESSION['customer_email'])){
                                  echo "<a href='checkout.php' >My Account</a>";
                                }
                                else{
                                  echo "<a href='customer/my_account.php?my_orders'>My Account</a>";
                                }
                              ?>
                            </li>
                            <li>
                              <a href="cart.php"> Shopping Cart </a>
                            </li>
                              <li class="active">
                              <a href="contact.php"> Contact Us </a>
                            </li>
                          </ul><!-- nav navbar-nav navbar-left Ends -->
                        </div><!-- padding-nav Ends -->
                        <a class="btn btn-primary navbar-btn right" href="cart.php"><!-- btn btn-primary navbar-btn right Starts -->
                          <i class="fa fa-shopping-cart"></i>
                          <span> <?php items(); ?> items in cart </span>
                        </a><!-- btn btn-primary navbar-btn right Ends -->
                        <div class="navbar-collapse collapse right"><!-- navbar-collapse collapse right Starts -->
                          <button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">
                            <span class="sr-only">Toggle Search</span>
                            <i class="fa fa-search"></i>
                          </button>
                        </div><!-- navbar-collapse collapse right Ends -->
                        <div class="collapse clearfix" id="search"><!-- collapse clearfix Starts -->
                          <form class="navbar-form" method="get" action="results.php"><!-- navbar-form Starts -->
                            <div class="input-group"><!-- input-group Starts -->
                              <input class="form-control" type="text" placeholder="Search" name="user_query" required>
                              <span class="input-group-btn"><!-- input-group-btn Starts -->
                                <button type="submit" value="Search" name="search" class="btn btn-primary">
                                  <i class="fa fa-search"></i>
                                </button>
                              </span><!-- input-group-btn Ends -->
                            </div><!-- input-group Ends -->
                          </form><!-- navbar-form Ends -->
                        </div><!-- collapse clearfix Ends -->
                      </div><!-- navbar-collapse collapse Ends -->
                    </div><!-- container Ends -->
                  </div><!-- navbar navbar-default Ends -->
                  <div id="content"><!--content Starts-->
                    <div class="container"><!--container Starts-->
                      <div class="col-md-12">
                        <ul class="breadcrumb"><!--breadcrumb Starts-->
                          <li>  <a href="index.php"> Home </a> </li>
                          <li> Contact Us </li>
                        </ul><!--beadcrumb Ends-->
                      </div>

                      <div class="col-md-12">
                         <div class="box">
                           <div class="box-header">
                             <center>
                               <h2>Contact Us</h2>
                               <p class="text-muted"> For further queries contact us any time </p>
                             </center>
                           </div><!--box header Ends-->
                           <form class="" action="contact.php" method="post">
                             <div class="form-group">
                               <label>Name</label>
                               <input type="text" name="name"  class="form-control required">
                             </div><!--form group Ends-->
                             <div class="form-group">
                               <label>Email</label>
                               <input type="text" name="email"  class="form-control required">
                             </div><!--form group Ends-->
                             <div class="form-group">
                               <label>Subject</label>
                               <input type="text" name="subject"  class="form-control required">
                             </div><!--form group Ends-->
                             <div class="form-group">
                               <label>Message</label>
                              <textarea name="message" class="form-control"></textarea>
                             </div><!--form group Ends-->
                             <div class="text-center">
                               <button type="submit" name="submit" class="btn btn-primary">
                                 <i class="fa fa-user-md"></i>Send Message
                               </button>
                             </div><!--text-center Ends-->
                           </form>
                           <?php
                           if(isset($_POST['submit'])){
                             // Admin receives email through this code
                             $sender_name = $_POST['name'];
                             $sender_email = $_POST['email'];
                             $sender_subject = $_POST['subject'];
                             $sender_message = $_POST['message'];
                             $receiver_email = "webdev14998@gmail.com";
                             mail($receiver_email,$sender_name,$sender_subject,$sender_message,$sender_email);
                             // Send email to sender through this code
                             $email = $_POST['email'];
                             $subject = "Welcome to my website";
                             $msg = "I shall get you soon, thanks for sending us email";
                             $from = "webdev14998@gmail.com";
                             mail($email,$subject,$msg,$from);
                             echo "<h2 align='center'>Your message has been sent successfully</h2>";
                           }
                           ?>
                         </div><!-- box Ends -->
                       </div><!-- col-md-9 Ends -->
                     </div><!-- container Ends -->
                   </div><!-- content Ends -->
                   <?php
                   include("includes/footer.php");
                   ?>
                   <script src="js/jquery.min.js"> </script>
                   <script src="js/bootstrap.min.js"></script>
</body>
</html>
