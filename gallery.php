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

$sql = "SELECT donator.username,category.balance FROM donator,donations,category WHERE donator.donator_id = donations.donator_id and 
        donations.c_id = category.c_id";
    $result = mysqli_query($conn, $sql);
    
    
?>

<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Gallery</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

        <!-- Bootsrap -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">


        <!-- Font awesome -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- PrettyPhoto -->
        <link rel="stylesheet" href="assets/css/prettyPhoto.css">

        <!-- Template main Css -->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!-- Modernizr -->
        <script src="assets/js/modernizr-2.6.2.min.js"></script>
        
        <style>
            div.gallery {
            margin: 5px;
            border: 1px solid #ccc;
            float: left;
            width: 450px;
            background-color: white;
            }

            div.gallery:hover {
            border: 1px solid #777;
            }

            div.gallery img {
            width: 100%;
            height: auto;
            }

            div.desc {
            padding: 15px;
            text-align: center;
            }
        </style>


    </head>
    <body>
    <!-- NAVBAR
    ================================================== -->

    <header class="main-header">
        
    
        <nav class="navbar navbar-static-top">

            <div class="navbar-top">

              <div class="container">
                  <div class="row">

                    <div class="col-sm-6 col-xs-12">

                        <ul class="list-unstyled list-inline header-contact">
                            <li> <i class="fa fa-phone"></i> <a href="tel:">+212 658 986 213 </a> </li>
                             <li> <i class="fa fa-envelope"></i> <a href="mailto:contact@sadaka.org">contact@sadaka.org</a> </li>
                       </ul> <!-- /.header-contact  -->
                      
                    </div>

                    <div class="col-sm-6 col-xs-12 text-right">

                        <ul class="list-unstyled list-inline header-social">

                            <li> <a href="#" target="_blank"> <i class="fa fa-facebook"></i> </a> </li>
                            <li> <a href="#" target="_blank"> <i class="fa fa-twitter"></i>  </a> </li>
                            <li> <a href="#" target="_blank"> <i class="fa fa-google"></i>  </a> </li>
                            <li> <a href="#" target="_blank"> <i class="fa fa-youtube"></i>  </a> </li>
                            <li> <a href="#" target="_blank"> <i class="fa fa fa-pinterest-p"></i>  </a> </li>

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

                    <li><a href="index.html">HOME</a></li>
                    <li><a class="is-active"  href="about.html">ABOUT</a></li>
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
                    <li><a href="login.html">LOGIN</a></li>

                  </ul>

                </div> <!-- /#navbar -->

              </div> <!-- /.container -->
              
            </div> <!-- /.navbar-main -->


        </nav> 

    </header> <!-- /. main-header -->


	<div class="gallery">
  <a target="_blank" href="img_5terre.jpg">
    <img src="gallery.jpg" alt="gallery" width="500" height="500">
  </a>
  <div class="desc">This is the image of cloth giving in an orphanage.</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_forest.jpg">
    <img src="gallery2.jpg" alt="gallery2" width="500" height="500">
  </a>
  <div class="desc">This is the grocery giving image.</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_lights.jpg">
    <img src="gallery3.jpg" alt="gallery3" width="500" height="500">
  </a>
  <div class="desc">This is the cultural program.</div>
</div>
        
        <center>
			<table border='2' style="background-color:white">
				<tr>
				<th>Name</th>
                <th>Blance</th>
				

			</tr>             
			<?php while($row = $result->fetch_assoc()){?>                
                <tr>
				<td><?=$row['username']?></td>
                <td><?=$row['balance']?></td>                
				</tr>
				<?php	 }?>
			</table>
            </center>




       
        
        <!-- jQuery -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.js"><\/script>')</script>

        <!-- Bootsrap javascript file -->
        <script src="assets/js/bootstrap.min.js"></script>

        <!-- PrettyPhoto javascript file -->
        <script src="assets/js/jquery.prettyPhoto.js"></script>



        <!-- Google map  -->
        <script src="http://maps.google.com/maps/api/js?sensor=false&amp;libraries=places" type="text/javascript"></script>


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
