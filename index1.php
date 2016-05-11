<html lang="en"><head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pet Store</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index modal-open" style="padding-right: 17px;">



    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">

        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->

			<div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               &nbsp; &nbsp;
				
                <a href="#portfolioModal00" class="portfolio-link pull-left navbar-brand" style="margin-left: -90px" data-toggle="modal"> 
					<i class="fa fa-bars"></i> 
				</a>
				
				<a class="navbar-brand page-scroll" href="http://localhost/pet/">	            				
					<img src="img/a47.jpg" alt="petstore logo" width="50" height="70">
					<b> Pet Store </b> 
				</a>
				

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden active">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.php#services">Breeds</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.php#portfolio">Portfolio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="about.php">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="about.php#team">Team</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.php#contact">Contact</a>
                    </li>
					<li>
                        <a class="page-scroll" href="checkout.php"><i class="fa fa-shopping-cart"></i> 0</a>
                    </li>
					<li>
                        <a class="page-scroll" href="index.php#login" data-toggle="modal">Login</a>
                    </li>
					<li>
                        <a class="page-scroll" href="index.php#signup" data-toggle="modal">Sign Up</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	
	<!---- LOGIN MODAL ----->
	
	 <!-- Portfolio Modal 4 -->
     <div class="portfolio-modal modal fade" id="login" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2 style="color:rgb(250, 197, 82);">LOGIN</h2>
                            <p class="item-intro text-muted" style="color:black;">Log into your account here.</p>
                            <p>
							</p><div class="row">
                <div class="col-lg-12">
                    <form id="loginForm" action="do/login.php" method="post" novalidate="">
                        <div class="row">
                            <div class="col-md-6">
                                    
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Your Email *" id="email" required="" data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
								<div class="form-group">
                                    <input type="password" name="passwd" class="form-control" placeholder="Your Password *" id="password" required="" data-validation-required-message="Please enter your password.">
                                    <p class="help-block text-danger"></p>
                                </div>
                              
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                   <!-- <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
									-->
									<div class="clearfix"></div>
									<div class="col-lg-12 text-center">
										<div id="success"></div>
										<button type="submit" class="btn btn-xl">Submit</button>
									</div>
								</div>
                            </div>
                        </div>
                           
                    </form>
                </div>
            </div>
							<p></p>
                            
							<button type="button" class="btn btn-primary" data-dismiss="modal" style="background-color: crimson;"><i class="fa fa-times"></i> CLOSE </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

	
	<!------------------------>
	
	<!---- SIGNUP MODAL ----->
	
	 <!-- Portfolio Modal 4 -->
	 
	  <div class="portfolio-modal modal fade" id="signup" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2 style="color:rgb(250, 197, 82);">SIGN UP</h2>
                            <p class="item-intro text-muted" style="color:black;">Sign up to create your new account.</p>
								<div class="row">
									<div class="col-lg-12">
										<form method="post" action="do/signup.php" id="signupForm" novalidate="">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<input name="name" type="text" class="form-control" placeholder="Your Name *" id="name" required="" data-validation-required-message="Please enter your name.">
														<p class="help-block text-danger"></p>
													</div>
													<div class="form-group">
														<input name="email" type="email" class="form-control" placeholder="Your Email *" id="email" required="" data-validation-required-message="Please enter your email address.">
														<p class="help-block text-danger"></p>
													</div>
													<div class="form-group">
														<input name="passwd" type="password" class="form-control" placeholder="Your Password *" id="password" required="" data-validation-required-message="Please enter your password.">
														<p class="help-block text-danger"></p>
													</div>
												<!--	<div class="form-group">
														<input type="password" class="form-control" placeholder="Your Password *" id="password" required data-validation-required-message="Please confirm your password.">
														<p class="help-block text-danger"></p>
													</div>  -->
													
												</div>
												<div class="col-md-6">
													
													 <div class="clearfix"></div>
													<div class="col-lg-12 text-center">
														<div id="success"></div>
														<button type="submit" class="btn btn-xl">Submit</button>
													</div>
												</div>
													
											</div>
										</form>
									<button type="button" class="btn btn-primary" data-dismiss="modal" style="background-color: crimson;"><i class="fa fa-times"></i> CLOSE </button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

    
	<!------------------------>

	<div class="portfolio-modal modal fade in" id="portfolioModal00" tabindex="-1" role="dialog" aria-hidden="false" style="display: block;">
        <div class="modal-content" id="menu-modal">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
    
						<h2> QUICK LINKS ! </h2>
                            <p class="item-intro text-muted"> Choose any which suits your convenience ;) </p>
                   
				   <!--    					<img class="img-responsive img-centered" src="img/portfolio/dreams-preview.png" alt="">   -->

				    <!--Dreams is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Dreams is a modern one page web template designed for almost any purpose. It’s a beautiful template that’s designed with the Bootstrap framework in mind.</p>
                            <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/dreams-free-one-page-web-template/">FreebiesXpress.com</a>. --> 
							
							

<div class="one-spot home">
<div id="loader"><div class="vjs-loading-spinner"></div></div>
<div id="wrapper">

 
<a href="#" class="menu-menu sficon-menu" title="Menu"></a>
   
  
<div class="menu-bar">
  <div class="relative">
  <ul class="menu-list">
    
	<li>
      <a href="#" class="menu-title">
        <div class="button-wrap"><!--<div href="#" class="btn btn-blend green action-close">Close</div>--></div>
       <b> <em> MENU </em> </b>
      </a>
    </li>
	
    <li><a href="http://localhost/pet/" class=""> <b> <em> HOME </em> </b> </a></li>
    <li><a href="index.php#services" class=""> <b> <em> BREEDS </em> </b> </a></li>
    <!--<li><a href="" class=""> <b> <em> FEATURES </em> </b> </a></li> -->
    <li><a href="products.php" class=""> <b> <em> SHOP </em> </b> </a></li>
    <li><a href="market.php" class=""> <b> <em> BUY / SELL </em> </b> </a></li>
    <li><a href="lost.php" class=""> <b> <em> LOST &amp; FOUND </em> </b> </a></li>
    <li><a href="" class=""> <b> <em> ENDANGERED PETS </em> </b> </a></li>
    <li><a href="matrimonial.php" class=""> <b> <em> MATRIMONIAL </em> </b> </a></li>
    <li><a href="events.php" class=""> <b> <em> EVENTS </em> </b> </a></li>
   <!-- <li><a href="" class=""> <b> <em> CONTACT US </em> </b> </a></li>
	<li><a href="" class=""> <b> <em> ABOUT US</em> </b> </a></li> -->
    <li><a href="faq.php" class="" style="
    border-bottom: solid 1px #3374E5;
"> <b> <em> FAQ </em> </b> </a>

<li>
<a href="crawlu.php." class=""> <b> <em> MEDICATION </em> </b> </a></li></li>
    <!--<li><a href="" class=""> <b> <em> DISCLAIMER </em> </b> </a></li>
	<li><a href="" class=""> <b> <em> TERMS & CONDITIONS </em> </b> </a></li>
     <li><a href="" class=""> <b> <em> PRIVACY POLICY </em> </b> </a></li>  
    <li><a href="" class=""> <b> <em> TERMS OF USE </em> </b> </a></li>
	<li><a href="" class=""> <b> <em> TEAM </em> </b> </a></li>  
    <li><a href="" class=""> <b> <em> DONATE </em> </b> </a></li>
    <li><a href="" class=""> <b> <em> GALLERY </em> </b> </a></li>  -->
    
    
    
	
    
		
		
		
         </ul>
      </div>
    

    <li>
	<!--
      <a href="about.html" class=""> <b> <em> ABOUT </em> </b> </a>  -->
	  <!--
      <div class="submenu">
        <ul class="menu-list">
          <li><a href="about.html">Overview</a></li>
          <li><a href="submission_policy.html">Submission Policy</a></li>
          <li><a href="http://sfarts.org/addevent/addevent.html">Submit Event</a></li>
          <li><a href="feedback_support.html">Feedback & Support</a></li>
          <li><a href="colophon.html">Colophon</a></li>
          
        </ul>
      </div> -->
    </li>
  
  </div><!-- /relative -->
</div><!-- /menu-bar -->
<div class="hide submenu-bar"></div>

  
  
</div>
</div>
<br> <br>
                            <button type="button" class="btn btn-primary" data-dismiss="modal" style="background-color: crimson;"><i class="fa fa-times"></i><b> CLOSE </b></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    


	
	
	
	
	
	
	
	
	
	
	
	    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
              <!--  <div class="intro-lead-in">Welcome To Our Pet Store!</div> -->
                <div class="intro-lead-in">Welcome To Our Pet Store!</div>
                <div class="intro-heading">Show <i class="fa fa-heart pet-heart"></i> to your pets !</div>
              <a href="#services" class="page-scroll btn btn-xl"> EXPLORE </a>	
			
			</div>
        </div>
    </header>
	

    <!-- Services Section -->
    <section id="services" style="padding-top:50px; padding-bottom:0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Breeds</h2>
                    <h3 class="section-subheading text-muted"> (The American Kennel Club classification of dogs.) </h3>
                </div>
            </div>
			</div>
		</section>
		<section style="background-color:rgb(82, 58, 62);padding: 50px 100px;">
			<br>
            <div class="row text-center">
                <a href="breed-single.php?id=4"> <div class="col-md-4" id="brown">
				
                    <span class="fa-stack fa-4x">
                       <!-- <i class="fa fa-circle fa-stack-2x text-primary"></i>  -->
						 <img class="img-circle" src="img/dogs/a29.jpg" alt="checkit" width="100" height="100">  
                        <!-- <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i> -->
                    </span>
                    <h4 class="service-heading">Flat-coated Retriever</h4>
                    <p class="text-muted">Active, medium sized dog. Coat fine, dense and flat. Of black or liver color without markings. Ears small and close to the sides of the..</p>
                </div> </a>
				
                 <a href="breed-single.php?id=1"> <div class="col-md-4" id="brown">
                    <span class="fa-stack fa-4x">
                       <!-- <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>   -->
						<img class="img-circle" src="img/dogs/a18.gif" alt="checkit" width="100" height="100">  

                    </span>
                    <h4 class="service-heading">Labrador</h4>
                    <p class="text-muted">Active dog of strong body. Coat short, dense, smooth and glossy. Color black, chocolate or yellow and free from markings. Ears large..</p>
                </div> </a>
				
                 <a href="breed-single.php?id=2"> <div class="col-md-4" id="brown">
                    <span class="fa-stack fa-4x">
                      <!--  <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-lock fa-stack-1x fa-inverse"></i>     -->
						 <img class="img-circle" src="img/dogs/a26.jpg" alt="checkit" width="100" height="100">  

                    </span>
                    <h4 class="service-heading">Pointer</h4>
                    <p class="text-muted">Active dog, compact and muscular body with broad chest. Coat short, fine, smooth and uniformly distributed. Color lemon, orange, lemon..</p>
                </div> </a>
				
				</div>
				<br>
				<br>
				<div class="row text-center">
					   <a href="breed-single.php?id=3"> <div class="col-md-4" id="brown">
                    <span class="fa-stack fa-4x">
                       <!-- <i class="fa fa-circle fa-stack-2x text-primary"></i>  -->
						 <img class="img-circle" src="img/dogs/a5.gif" alt="checkit" width="100" height="100">  
                        <!-- <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i> -->
                    </span>
                    <h4 class="service-heading">Golden Retriever</h4>
                    <p class="text-muted">Active and Powerful. Coat flat or wavy and dense with water resistant undercoat. Color any shade of gold and creambut not red or ..</p>
                </div> </a>
				
                 <a href="breed-single.php?id=5">  <div class="col-md-4" id="brown">
                    <span class="fa-stack fa-4x">
                       <!-- <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>   -->
						<img class="img-circle" src="img/dogs/a1.gif" alt="checkit" width="100" height="100">  

                    </span>
                    <h4 class="service-heading">Curly-coated Retriever</h4>
                    <p class="text-muted">Smart, strong and active dog. Coat curled and free from the patches of straight hairs. Color black or liver. Ears short lying close to..</p>
                </div> </a>
				
                 <a href="breed-single.php?id=6"> <div class="col-md-4" id="brown">
                    <span class="fa-stack fa-4x">
                      <!--  <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-lock fa-stack-1x fa-inverse"></i>     -->
						 <img class="img-circle" src="img/dogs/a10.gif" alt="checkit" width="100" height="100">  

                    </span>
                    <h4 class="service-heading">Spaniel</h4>
                    <p class="text-muted">They are of several varieties: Cocker, Clumber, Irish Walter, English Springer and Sussex. Basically sporting in nature with long hair..</p>
                </div>  </a>

            </div>
		</section>
		<section style="padding:0px">
			<a href="breeds.php" class="btn btn-primary btn-lg btn-block"> <span style="font-size:28px">‹‹</span> &nbsp; &nbsp; &nbsp; &nbsp; View All Breeds  &nbsp; &nbsp; &nbsp; &nbsp;<span style="font-size:28px">››</span></a>
		</section>
	<!-------------------------------->
<!--
	<div id="opt_block">
				<div class="opt_header">
					<span><i class="fa fa-star pet-star"></i></span>
				</div>
				<div class="opt_row bg_color">
					<h3>background color:</h3>
					<div id="bg_col" class="colorSelector"></div>
				</div>
				<div class="opt_row bg_pat">
					<h3>Background Pattern:</h3>
					<ul class="patterns_select">
						<li><a href="#"><img src="img/dogs/pattern1.png" alt=""></a></li>
						<li><a href="#"><img src="img/dogs/pattern2.png" alt=""></a></li>
						<li><a href="#"><img src="img/dogs/pattern3.jpg" alt=""></a></li>
						<li><a href="#"><img src="img/dogs/pattern4.png" alt=""></a></li>
						<li><a href="#"><img src="img/dogs/pattern5.png" alt=""></a></li>
					</ul>
				</div>
				<div class="opt_row bg_img">
					<h3>Background Image:</h3>
					<ul class="bg_select">
						<li><a href="#"><img src="img/dogs/bg1.jpg" alt=""></a></li>
						<li><a href="#"><img src="img/dogs/bg2.jpg" alt=""></a></li>
						<li><a href="#"><img src="img/dogs/bg3.jpg" alt=""></a></li>
					</ul>
				</div>
			</div>

-->
	<!-------------------------------->
    
	<!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Portfolio</h2>
                    <h3 class="section-subheading text-muted">Take a dip into the range of features.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="products.php" class="portfolio-link" data-toggle="">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-shopping-cart fa-4x"></i>
                            </div>
                        </div>
                        <img src="img/dogs/a6.jpg" height="260" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4 style="color:orange">SHOP</h4>
                        <p class="text-muted">Buy varieties of goods for your beloved.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="market.php" class="portfolio-link" data-toggle="">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-paw fa-4x"></i>
                            </div>
                        </div>
                        <img src="img/dogs/a56.jpg" height="260" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4 style="color:orange">BUY / SELL</h4>
                        <p class="text-muted">Add a new member to your family.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="events.php" class="portfolio-link" data-toggle="">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-flag fa-4x"></i>
                            </div>
                        </div>
                        <img src="img/dogs/a53.jpg" height="260" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4 style="color:orange">EVENTS</h4>
                        <p class="text-muted">Pet shows, contests all are here.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="matrimonial.php" class="portfolio-link" data-toggle="">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-heart fa-4x"></i>
                            </div>
                        </div>
                        <img src="img/dogs/a46.jpeg" height="260" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4 style="color:orange">MATRIMONIAL</h4>
                        <p class="text-muted">Find your dearest a matching partner.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="lost.php" class="portfolio-link" data-toggle="">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-eye fa-4x"></i>
                            </div>
                        </div>
                        <img src="img/dogs/a27.jpg" height="260" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4 style="color:orange">LOST &amp; FOUND</h4>
                        <p class="text-muted">Help us to find a new family for them.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#" class="portfolio-link" data-toggle="">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-frown-o fa-4x"></i>
                            </div>
                        </div>
                        <img src="img/dogs/wd.jpg" height="260" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4 style="color:orange">ENDANGERED</h4>
                        <p class="text-muted">The sad part of the story.</p>
                    </div>
                </div>
            </div>
        </div>
		
    </section>


			
   <section id="contact">
		<div class="container">
            <div class="row">
				<div class="col-lg-12 text-center">
                    <h2 class="section-heading"><br>Contact Us</h2>
                    <h3 class="section-subheading text-muted">Fill in your details.</h3>
                </div>
			</div>
            <div class="row">
                <div class="col-lg-12">
                    <form id="contactForm" validate="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required="" data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required="" data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required="" data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required="" data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="consuccess"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
								<a href="source/index.php">chat here with us to know about your query</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

	<section id="clients" style="background-color:#4A6E3A;padding:5px 100px;">
    <!-- Clients Aside -->
   <h3 class="section-heading"><center style="color: rgb(255, 255, 255); ">Our Products</center><hr style="border-top-width:thin" ;=""></h3>

	<aside class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/home_products/cuff.jpg" class="img-responsive img-centered" style="width:250px; height:180px;" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/home_products/dog_food.jpg" class="img-responsive img-centered" style="width:300px; height:180px;" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/home_products/kennel1.jpg" class="img-responsive img-centered" style="width:250px; height:180px;" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/home_products/cufflinks.jpg" class="img-responsive img-centered" style="width:250px; height:180px;" alt="">
                    </a>
                </div>
            </div>
        </div>
    </aside>
	</section>
	
    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
					
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive" src="img/portfolio/roundicons-free.png" alt="">
                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <p>
                                <strong>Want these icons in this portfolio item sample?</strong>You can download 60 of them for free, courtesy of <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">RoundIcons.com</a>, or you can purchase the 1500 icon set <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">here</a>.</p>
                            <ul class="list-inline">
                                <li>Date: July 2014</li>
                                <li>Client: Round Icons</li>
                                <li>Category: Graphic Design</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal" style="background-color: crimson;"><i class="fa fa-times"></i> CLOSE </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Heading</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/portfolio/startup-framework-preview.png" alt="">
                            <p><a href="http://designmodo.com/startup/?u=787">Startup Framework</a> is a website builder for professionals. Startup Framework contains components and complex blocks (PSD+HTML Bootstrap themes and templates) which can easily be integrated into almost any design. All of these components are made in the same style, and can easily be integrated into projects, allowing you to create hundreds of solutions for your future projects.</p>
                            <p>You can preview Startup Framework <a href="http://designmodo.com/startup/?u=787">here</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal" style="background-color: crimson;"><i class="fa fa-times"></i> CLOSE 
							</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
							<!-------------------------------->
				<center>			
    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Treasure Hunt</h2>
                    <h3 class="section-subheading text-muted">Have a nice time watching this video !</h3>
					<hr> 
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
					<center>
						<video width="70%" height="10%" controls="">
						  <source src="videos/event.mp4" type="video/mp4">
						</video>   
					</center>
				</div>
            </div>
			<div style="color:rgb(199, 172, 172)">
				<div class="row" style="padding-top:60px">
					<div class="col-lg-offset-1 col-lg-10">
						<p>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum </p>
					</div>
				</div>
				<div class="row" style="padding-top:20px">
					<div class="col-lg-offset-1 col-lg-5">
						Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum 
					</div>
						<img src="img/contact-bg.jpg" class="col-lg-5">
				</div>
			</div>
        </div>
    </section>
	</center>
							
							<!------------------------------->
							<button type="button" class="btn btn-primary" data-dismiss="modal" style="background-color: crimson;"><i class="fa fa-times"></i> CLOSE </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/portfolio/golden-preview.png" alt="">
                            <p>Start Bootstrap's Agency theme is based on Golden, a free PSD website template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Golden is a modern and clean one page web template that was made exclusively for Best PSD Freebies. This template has a great portfolio, timeline, and meet your team sections that can be easily modified to fit your needs.</p>
                            <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/golden-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal" style="background-color: crimson;"><i class="fa fa-times"></i> CLOSE </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/portfolio/escape-preview.png" alt="">
                            <p>Escape is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Escape is a one page web template that was designed with agencies in mind. This template is ideal for those looking for a simple one page solution to describe your business and offer your services.</p>
                            <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/escape-one-page-psd-web-template/">FreebiesXpress.com</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal" style="background-color: crimson;"><i class="fa fa-times"></i> CLOSE </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/portfolio/dreams-preview.png" alt="">
                            <p>Dreams is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Dreams is a modern one page web template designed for almost any purpose. It’s a beautiful template that’s designed with the Bootstrap framework in mind.</p>
                            <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/dreams-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal" style="background-color: crimson;"><i class="fa fa-times"></i> CLOSE </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	
    <footer>
        <div class="container">
			<div class="row">
				<div class="col-xs-4">
					<h4>Testimonials</h4>
					<strong style="font-family: monospace; font-style: italic; color: floralwhite" ;="">Pranjal Mittal</strong>
					<hr style="border-top-width:medium;">
					<p style="color:lavender;font-family: serif;font-style: initial;"><i class="fa fa-quote-left pet-quote"></i> &nbsp; Awesome &amp; Innovative website for pet-lovers. Extremely User-friendly and Unique in itself. Amazing to see a site which is successful in capturing the love for pets in so Mesmerising and Creative way. &nbsp; <i class="fa fa-quote-right pet-quote"></i></p>
				</div>
				<div class="col-xs-4">
					<h4>Quick Links</h4>
					<div class="col-xs-6">
						<ul class="list-unstyled">
							<li><a href="http://localhost/pet/"><i class="fa fa-home pet-home"></i>   &nbsp; Home</a></li>
							<li><a href="index.php#services"><i class="fa fa-paw pet-paw"></i>  &nbsp;  Breeds</a></li>
							<li><a href="index.php#portfolio"><i class="fa fa-suitcase pet-suitcase"></i> &nbsp;   Portfolio</a></li>
							<li><a href="about.php"><i class="fa fa-question-circle pet-question-circle"></i>   &nbsp; About</a></li>
							<li><a href="about.php#team"><i class="fa fa-group pet-group"></i>  &nbsp;  Team</a></li>
							<li><a href="index.php#contact"><i class="fa fa-envelope pet-envelope"></i> &nbsp;   Contact</a></li>
							<li><a href="#"><i class="fa fa-briefcase pet-breifcase"></i>  &nbsp;  Donate</a></li>
							<li><a href="#"><i class="fa fa-book pet-book"></i>  &nbsp;  FAQs</a></li>
							<li><a href="#"><i class="fa fa-pencil pet-pencil"></i>  &nbsp;  Disclaimer</a></li>
						</ul>
					</div>
					<div class="col-xs-6">
						<ul class="list-unstyled">
							<li><a href="#shop"><i class="fa fa-shopping-cart pet-shopping-cart"></i>  &nbsp;  Shop</a></li>
							<li><a href="#buy/sell"><i class="fa fa-money pet-money"></i>  &nbsp;  Buy/Sell</a></li>
							<li><a href="events.php"><i class="fa fa-spinner pet-spinner"></i>  &nbsp;  Events</a></li>
							<li><a href="#matrimony"><i class="fa fa-heart pet-heart"></i>  &nbsp;  Matrimony</a></li>
							<li><a href="#landf"><i class="fa fa-paw pet-paw"></i>  &nbsp;  Lost &amp; Found</a></li>
							<li><a href="#endangered"><i class="fa fa-frown-o pet-frown-o"></i>  &nbsp;  Endangered</a></li>							
							<li><a href="#sponsors"><i class="fa fa-users pet-users"></i>  &nbsp;  Sponsors</a></li>
							<li><a href="#gallery"><i class="fa fa-sliders pet-sliders"></i>  &nbsp;  Gallery</a></li>
							<li><a href="#tandc"><i class="fa fa-warning pet-warning"></i>  Terms &amp; Conditions</a></li>
						</ul>
					</div>
				</div>
				<div class="col-xs-4">
				<h4> VISIT US </h4>
					<strong style="font-family: monospace; font-style: italic; color: floralwhite" ;="">Our Venue</strong>
					<hr style="border-top-width:medium;">
					<p style="color:lavender;font-family: serif;font-style: initial;"><i class="fa fa-home pet-home"></i>  PetStore Developers. <br> JIIT, A-10, Sector 62, Noida, Uttar Pradesh, India. <br><br> Phone: <i class="fa fa-phone pet-phone"></i>  +91-9811856735 <br> Email: <i class="fa fa-envelope pet-envelope"></i>  upanyasingh@gmail.com <br> </p>
					
					
				</div>
			</div>
            <div class="row" style="text-align:center">
                <div class="col-md-4">
                    <span class="copyright"><b>Copyright © Pet Store 2014</b></span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#" id="twitr"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#" id="link-fb"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#" id="lnkdin"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">  
                        <li><a href="#"><b>Privacy Policy</b></a>
                        </li>
                        <li><a href="#"><b>Terms of Use</b></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <!--<script src="js/contact_me.js"></script>-->

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>




	
	
<div class="modal-backdrop fade in"></div></body></html>