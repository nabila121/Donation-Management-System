<?php
 session_start();

$servername='localhost';
$username='root';
$password='';
$db_name='donation';

$conn=mysqli_connect($servername,$username,$password,$db_name);

if(!$conn){
    echo "Database connected error";
}

$error="";

if(isset($_POST['submit'])){
    header('location: donator.php');
}
?>

<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Donation Receiver | Charity / Non-profit responsive Bootstrap HTML5 template</title>
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
                    <li><a href="about.html">ABOUT</a></li>
                    <li class="has-child "><a class="is-active" href="#">EDUCATION</a>

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
                         <li class="submenu-item"><a href="donatorn.html">Donator </a></li>
                         <li class="submenu-item"><a href="donation-receiver.html">Donation Receiver </a></li>
                         <li class="submenu-item"><a href="success-story.php">Success Story </a></li>
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


	<div class="page-heading text-center">

		<div class="container zoomIn animated">
			
			<h1 class="page-title">FOOD <span class="title-under"></span></h1>
			<p class="page-description">
				DONATE FOR HELP OTHERS
			</p>
			
		</div>

	</div>
        
        <form action="education-donation.php" method="post">
        

                <div class="container">
                <div class="jumbotron" style="background-color:rgb(106,90,205);">                         
                    <p style="color:Black;">Food problem need 20000tk.</p>
                    <input type="submit" name="submit" value="DONATE NOW"/>
               </div>
               </div>
        
                <div class="container">
                <div class="jumbotron" style="background-color:rgb(106,90,205);">                         
                    <p style="color:Black;">Food problem need 20000tk.</p>
                    <input type="submit" name="submit" value="DONATE NOW"/>
               </div>
               </div>
        </form>
                    
	

    <footer class="main-footer">

        <div class="footer-top">
            
        </div>


        <div class="footer-main">
            <div class="container">
                
                <div class="row">
                    <div class="col-md-4">

                        <div class="footer-col">

                            <h4 class="footer-title">About us <span class="title-under"></span></h4>

                            <div class="footer-content">
                                <p>
                                    <strong>Sadaka</strong> ipsum dolor sit amet, consectetur adipiscing elit. Ut at eros rutrum turpis viverra elementum semper quis ex. Donec lorem nulla, aliquam quis neque vel, maximus lacinia urna.
                                </p> 

                                <p>
                                    The word 'charity' means generosity in giving some­thing to the needy out of loving kindness towards them; and a charitable organization is an institution with funds to help the needy.

                                    There is a proverb: 'Charity begins at home.' A per­son, who is kind at heart and possesses compassion from his early days towards the weak and the needy in the society, is generally found to help and make gifts to the poor. He finds joy and satisfaction in giving alms to a beggar, or renders some financial relief to the needy persons who are near at hand.
                                </p>

                            </div>
                            
                        </div>

                    </div>

                    


                    <div class="col-md-4">

                        <div class="footer-col">

                            <h4 class="footer-title">Contact us <span class="title-under"></span></h4>

                            <div class="footer-content">

                                <div class="footer-form" >
                                    
                                    <form action="php/mail.php" class="ajax-form">

                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                                        </div>

                                         <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="E-mail" required>
                                        </div>

                                        <div class="form-group">
                                            <textarea name="message" class="form-control" placeholder="Message" required></textarea>
                                        </div>

                                        <div class="form-group alerts">
                        
                                            <div class="alert alert-success" role="alert">
                                              
                                            </div>

                                            <div class="alert alert-danger" role="alert">
                                              
                                            </div>
                                            
                                        </div>

                                         <div class="form-group">
                                            <button type="submit" class="btn btn-submit pull-right">Send message</button>
                                        </div>
                                        
                                    </form>

                                </div>
                            </div>
                            
                        </div>

                    </div>
                    <div class="clearfix"></div>



                </div>
                
                
            </div>

            
        </div>        
        
    </footer>




       
        
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
