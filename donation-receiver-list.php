<?php
session_start();

$servername='localhost';
$username='root';
$password='';
$db_name='donation';

$conn=mysqli_connect($servername,$username,$password,$db_name);

// Check connection
if (!$conn) {
    echo "Database connected error";
}

$sql = "SELECT donation_receiver.username,category.balance,category_name FROM donation_receiver,donations,category WHERE donation_receiver.d_receiver_id = donations.d_receiver_id and 
        donations.c_id = category.c_id";
    $result = mysqli_query($conn, $sql);
    
    
?>


<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>JIBON</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

        <!-- Bootsrap -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

        <!-- Font awesome -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- Owl carousel -->
        <link rel="stylesheet" href="assets/css/owl.carousel.css">

        <!-- Template main Css -->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!-- Modernizr -->
        <script src="assets/js/modernizr-2.6.2.min.js"></script>


    </head>
    
    <body style="background-color:#1A3333">


    <header class="main-header">
        
    
        <nav class="navbar navbar-static-top">

            <div class="navbar-top">

              <div class="container">
                  <div class="row">

                    <div class="col-sm-6 col-xs-12">

                        <ul class="list-unstyled list-inline header-contact">
                            <li> <i class="fa fa-phone"></i> <a href="tel:">+880 1521 48 16 58 </a> </li>
                             <li> <i class="fa fa-envelope"></i> <a href="mailto:contact@jibon.org">contact@jibon.org</a> </li>
                       </ul> <!-- /.header-contact  -->
                      
                    </div>

                    <div class="col-sm-6 col-xs-12 text-right">

                        <ul class="list-unstyled list-inline header-social">

                            <li> <a href="#"> <i class="fa fa-facebook"></i> </a> </li>
                            <li> <a href="#"> <i class="fa fa-twitter"></i>  </a> </li>
                            <li> <a href="#"> <i class="fa fa-google"></i>  </a> </li>
                            <li> <a href="#"> <i class="fa fa-youtube"></i>  </a> </li>
                            <li> <a href="#"> <i class="fa fa fa-pinterest-p"></i>  </a> </li>
                       </ul> <!-- /.header-social  -->
                      
                    </div>


                  </div>
              </div>

            </div>

            <div class="navbar-main">
              
              <div class="container">

                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                  </button>
                  
                  <a class="navbar-brand" href="index.html"><img src="assets/images/sadaka-logo.png" alt=""></a>
                  
                </div>

                <div id="navbar" class="navbar-collapse collapse pull-right">

                  <ul class="nav navbar-nav">

                    <li><a class="is-active" href="index.html">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li class="has-child"><a href="#">EDUCATION</a>

                      <ul class="submenu">
                         <li class="submenu-item"><a href="donator.html">Donator </a></li>
                         <li class="submenu-item"><a href="donation-receiver.html">Donation Receiver </a></li>
                         <li class="submenu-item"><a href="success-story.html">Success Story </a></li>
                         <li class="submenu-item"><a href="donation-receiver-list.php">Donation Receiver List </a></li>
                      </ul>

                    </li>
                     <li class="has-child"><a href="#">MEDICAL</a>
                         
                         <ul class="submenu">
                         <li class="submenu-item"><a href="donator.html">Donator </a></li>
                         <li class="submenu-item"><a href="donation-receiver.html">Donation Receiver </a></li>
                         <li class="submenu-item"><a href="success-story.html">Success Story </a></li>
                         <li class="submenu-item"><a href="donation-receiver-list.php">Donation Receiver List </a></li>
                      </ul>
                         
                      </li>
                      <li class="has-child"><a href="#">FOOD</a>
                         
                         <ul class="submenu">
                         <li class="submenu-item"><a href="donator.html">Donator </a></li>
                         <li class="submenu-item"><a href="donation-receiver.html">Donation Receiver </a></li>
                         <li class="submenu-item"><a href="success-story.html">Success Story </a></li>
                         <li class="submenu-item"><a href="donation-receiver-list.php">Donation Receiver List </a></li>
                      </ul>
                         
                      </li>
                      <li class="has-child"><a href="#">BUSINESS</a>
                         
                         <ul class="submenu">
                         <li class="submenu-item"><a href="donator.html">Donator </a></li>
                         <li class="submenu-item"><a href="donation-receiver.html">Donation Receiver </a></li>
                         <li class="submenu-item"><a href="success-story.html">Success Story </a></li>
                         <li class="submenu-item"><a href="donation-receiver-list.php">Donation Receiver List </a></li>
                      </ul>
                         
                      </li>
                      <li class="has-child"><a class="is-active" href="#">TIMELINE</a>

                      <ul class="submenu">
                         <li class="submenu-item"><a href="education-donation.php">Education </a></li>
                         <li class="submenu-item"><a href="medical-donation.php">Medical </a></li>
                         <li class="submenu-item"><a href="food-donation.php">Food </a></li>
                        <li class="submenu-item"><a href="business-donation.php">Business </a></li> 
                      </ul>

                    </li>
                    <li><a class="is-active" href="gallery.html">GALLERY</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                    <li><a href="login1.php">LOGIN</a></li>

                  </ul>

                </div> <!-- /#navbar -->

              </div> <!-- /.container -->
              
            </div> <!-- /.navbar-main -->


        </nav> 

    </header> <!-- /. main-header -->
        
        
            <center>
			<table border='2' style="background-color:white">
				<tr>
				<th>username</th>
                <th>Amount</th>
                <th>Category Name</th>              				
			</tr>

			<?php while($row = $result->fetch_assoc()){            
			{ ?>
				<tr>
				<td><?=$row['username']?></td>
                <td><?=$row['balance']?></td>
                <td><?=$row['category_name']?></td>                			
				</tr>
				<?php	} }?>
			</table>
            </center>                        

        
        <!--  Scripts
    ================================================== -->

    <!-- jQuery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.js"><\/script>')</script>

    <!-- Bootsrap javascript file -->
    <script src="assets/js/bootstrap.min.js"></script>
    
    <!-- owl carouseljavascript file -->
    <script src="assets/js/owl.carousel.min.js"></script>

    <!-- Template main javascript -->
    <script src="assets/js/main.js"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>

    </body>
</html>		