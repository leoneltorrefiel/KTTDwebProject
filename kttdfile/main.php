<?php
	include('server.php');

    if(!empty($_SESSION['username'])){
        header('location: home.php');
    }
?>

<!doctype html>
<html class="no-js" lang="en">

    <head>
        <!-- META DATA -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		
		

        <!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
		
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
		
		<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
		
        <!-- TITLE OF SITE -->
        <title>Knowledge and Technology Transfer Division</title>

        <!-- for title img -->
		<link rel="shortcut icon" type="image/icon" href="assets/images/logo/favicon.png"/>
       
        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!--linear icon css-->
		<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
		
		<!--animate.css-->
        <link rel="stylesheet" href="assets/css/animate.css">
		
		<!--hover.css-->
        <link rel="stylesheet" href="assets/css/hover-min.css">
		
		<!--vedio player css-->
        <link rel="stylesheet" href="assets/css/magnific-popup.css">

		<!--owl.carousel.css-->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<link href="assets/css/owl.theme.default.min.css" rel="stylesheet"/>


        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- bootsnav -->
		<link href="assets/css/bootsnav.css" rel="stylesheet"/>	
        
        <!--style.css-->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!--responsive.css-->
        <link rel="stylesheet" href="assets/css/responsive.css">
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		
        <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
	
	<body>
		<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

		
		
		
		<!--header start-->
		<section id="home"  class="header">
			<div class="container">	
				<div class="header-left">
					<ul class="pull-left">
						<li>
							<a href="#">
								<i class="fa fa-phone" aria-hidden="true"></i> 0987 6543 210
							</a>
						</li><!--/li-->
						<li>
							<a href="#">
								<i class="fa fa-envelope" aria-hidden="true"></i>info.kttd@gmail.com
							</a>
						</li><!--/li-->
					</ul><!--/ul-->
				</div><!--/.header-left -->
				<div class="header-right pull-right">
					<ul>
						<li class="reg">
							<a href="#" data-toggle="modal" data-target=".bs-example-modal-sm">
								Sign in
							</a>
								/
							<a href="#" data-toggle="modal" data-target=".bs-example-modal-lg">
								Sign up
							</a>
							
							<!-- small modal -->
							<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
								<div class="modal-dialog modal-sm" role="document">
									<div class="modal-content">
										<div class="modal-header">
											 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
											 	<span aria-hidden="true">
											 		<i class="fa fa-close"></i>
											 	</span>
											 </button> 
											<h4 class="modal-title" id="mySmallModalLabel">
												Sign In
											</h4> 
											<form action="main.php" method="post" class="sm-frm" style="padding:25px">
												<label>Username :</label>
												<input type="text" class="form-control" name="username" placeholder="client123">
												<label>Password :</label>
												<input type="password" name="password" class="form-control" placeholder="********">
												<label><input type="checkbox" name="personality"> Remenber Me</label>
												<button type="submit" name="btnLogin" class="btn btn-default pull-right">Login</button>
											</form>
										</div>
									</div>
								</div>
							</div>
							
							<!-- large modal -->
							<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
								<div class="modal-dialog modal-lg" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											 	<span aria-hidden="true">
											 		<i class="fa fa-close"></i>
											 	</span>
											</button>  
											<h4 class="modal-title" id="myLargeModalLabel">Sign Up</h4> 
											<form action="register.php" method="post" enctype="multipart/form-data" class="lg-frm" style="padding:25px">
                                                <h3>Login detials</h3>
                                                <br>
                                                    <label>Username</label>
                                                    <input type="text" class="form-control" name="username" placeholder="" required>
                                                    <label>Password</label>
												    <input type="password" class="form-control" name="password" placeholder="" required>
                                                    <label>Account type</label>
                                                    <br>
                                                    <select class="form-control" name="account_type" required>
                                                    <option value="Client">Client</option>
                                                    <option value="Staff">Staff</option>
                                                    </select>
                                                    <br><br>
                                                    <h3>Personal information</h3>
                                                    <br>
                                                    <label>Image</label>
                                                    <input type="file" name="picture" value="Select Image" id="image" required>
                                                    <br>
												    <label>Firstname</label>
												    <input type="text" class="form-control" placeholder="">
                                                    <label>Lastname</label>
                                                    <input type="text" class="form-control" name="lastname" placeholder="" required>
                                                    <label>Address</label>
                                                    <input type="text" class="form-control" name="address" placeholder="" required>
                                                    <label>Profession</label>
                                                    <input type="text" class="form-control" name="profession" placeholder="" required>
                                                    <label>Contact #</label>
                                                    <input type="text" class="form-control" name="contact" placeholder="" required>
												    <label>Email</label>
                                                    <input type="text" class="form-control" name="email" placeholder="" required>
												    <br>                                                
												    <input type="submit" class="btn btn-default pull-right" name="btnRegister" value="Submit" id="insert"></button>
											</form>
										</div>
									</div>
								</div>
							</div>
						</li><!--/li -->
						<li>
							<div class="social-icon">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								</ul><!--/.ul -->
							</div><!--/.social-icon -->
						</li><!--/li -->
					</ul><!--/ul -->
				</div><!--/.header-right -->
			</div><!--/.container -->	

		</section><!--/.header-->	
		<!--header end-->
		
		<!--menu start-->
		<section id="menu">
			<div class="container">
				<div class="menubar">
					<nav class="navbar navbar-default">
					
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="index.html">
								<img src="assets/images/logo/logo.png" alt="logo">
							</a>
						</div><!--/.navbar-header -->

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								<li class="smooth-menu">
									<a href="#home">Home</a>
								</li>
								<li class="smooth-menu"><a href="#about">About</a></li>
								<li class="smooth-menu"><a href="#service">Service</a></li>
								<li class="smooth-menu"><a href="#project">Project</a></li>
								<li class="smooth-menu"><a href="#team">Team</a></li>
								<li class="smooth-menu"><a href="#blog">Blog</a></li>
								<li class="smooth-menu"><a href="#contact">Contact</a></li>
								<li>
									<a href="#">
										<span class="lnr lnr-cart"></span>
									</a>
								</li>
								<li class="search">
									<form action="">
										<input type="text" name="search" placeholder="Search....">
										<a href="#">
											<span class="lnr lnr-magnifier"></span>
										</a>
									</form>
								</li>
							</ul><!-- / ul -->
						</div><!-- /.navbar-collapse -->
					</nav><!--/nav -->
				</div><!--/.menubar -->
			</div><!-- /.container -->

		</section><!--/#menu-->
		<!--menu end-->
		
		<!-- header-slider-area start -->
		<section class="header-slider-area">
			<div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">
			
			  <!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<div class="single-slide-item slide-1">
							<div class="container">
								<div class="row">
									<div class="col-sm-12">
										<div class="single-slide-item-content">
											<h2>Our tagline</h2>
											<p>
												The KTTD translates ideas and innovations into marketable solutions. To facilitate this process, the KTTD will evaluate promising technologies, protect, incubate & commercialize USeP’s innovation to industry, negotiable licensing or startup & maintain relationship with industry partners. 
											</p>
                                            <button type="button"  class="slide-btn">
												Login
											</button>
											<button type="button"  class="slide-btn
											">
												Signup
											</button>
										</div><!-- /.single-slide-item-content-->
									</div><!-- /.col-->
								</div><!-- /.row-->
							</div><!-- /.container-->
						</div><!-- /.single-slide-item-->
					</div><!-- /.item .active-->
					<div class="item">
						<div class="single-slide-item slide-2">
							<div class="container">
								<div class="row">
									<div class="col-sm-12">
										<div class="single-slide-item-content">
											<h2>
												Our awards
											</h2>
											<p>
												 Awarded as the country’s top patent filer by the IPOPHL, the USeP has to level up by going into the commercialization of its innovations. Hence, the institutionalization of the Knowledge and Technology Transfer Division (KTTD) in the University by virtue of the Board Resolution No. 17, series of 2016.  
											</p>
											<button type="button"  class="slide-btn">
												Login
											</button>
											<button type="button"  class="slide-btn
											">
												Signup
											</button>
										</div><!-- /.single-slide-item-content-->
									
									</div><!-- /.col-->
								</div><!-- /.row-->
							</div><!-- /.container-->
						</div><!-- /.single-slide-item-->
					</div><!-- /.item .active-->
				</div><!-- /.carousel-inner-->

				<!-- Controls -->
				<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<span class="lnr lnr-chevron-left"></span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					<span class="lnr lnr-chevron-right"></span>
				</a>
			</div><!-- /.carousel-->

		</section><!-- /.header-slider-area-->
		<!-- header-slider-area end -->
		
		<!--we-do start -->
		<section  class="we-do">
			<div class="container">
				<div class="we-do-details">
					<div class="section-header text-center">
						<h2>KTTD Offices</h2>
						<p>
							The birth of Knowledge and Technology Transfer Division (KTTD) is significantly instrumental in translating ideas into marketable solutions. Hence, The KTTD shall be so in-charged on the overall operation of the three interconnecting and interdependent Offices : the innovation & Technology transfer Unit Support Office (ITSO), the Business Incubation Unit (BIU), the Technology Transfer UNIT (TTU). The KTTD interfaces the programs, projects and activities of these Offices. 
						</p>
					</div><!--/.section-header-->
					<div class="we-do-carousel">
						<div class="row">
							<div class="col-sm-4 col-xs-12">
								<div class="single-we-do-box text-center">
									<div class="we-do-description">
										<div class="we-do-info">
											<div class="we-do-img">
												<img src="assets/images/home/consultency.png" alt="image of consultency" />
											</div><!--/.we-do-img-->
											<div class="we-do-topics">
												<h2>
													<a href="#">
														Innovation & Technology <br> Support Office
													</a>
												</h2>
											</div><!--/.we-do-topics-->
										</div><!--/.we-do-info-->
										<div class="we-do-comment">
											<p>
												is tasked to process technologies the necessary intellectual property (IP) protection. These technologies, depending on its nature, may be filed an appropriate IP protection prior or after prototyping and incubation.
											</p>
										</div><!--/.we-do-comment-->
									</div><!--/.we-do-description-->
								</div><!--/.single-we-do-box-->
							</div><!--/.col-->
							<div class="col-sm-4 col-xs-12">
								<div class="single-we-do-box text-center">
									<div class="we-do-description">
										<div class="we-do-info">
											<div class="we-do-img">
												<img src="assets/images/home/busisness_grow.png" alt="image of business" />
											</div><!--/.we-do-img-->
											<div class="we-do-topics">
												<h2>
													<a href="#">
														Business Incubation <br> Unit
													</a>
												</h2>
											</div><!--/.we-do-topics-->
										</div><!--/.we-do-info-->
										<div class="we-do-comment">
											<p>
												is designed to develop technologies into readily marketable products. The BIU shall supervise the faculty experts assigned to handle the marketing, legal, financial, technical, etc. aspects of the technology being incubated.
											</p>
										</div><!--/.we-do-comment-->
									</div><!--/.we-do-description-->
								</div><!--/.single-we-do-box-->
							</div><!--/.col-->
							<div class="col-sm-4 col-xs-12">
								<div class="single-we-do-box text-center">
									<div class="we-do-description">
										<div class="we-do-info">
											<div class="we-do-img">
												<img src="assets/images/home/support-logo.png" alt="image of support" />
											</div><!--/.we-do-img-->
											<div class="we-do-topics">
												<h2>
													<a href="#">
														Technology Transfer <br> Unit
													</a>

												</h2>
											</div><!--/.we-do-topics-->
										</div><!--/.we-do-info-->
										<div class="we-do-comment">
											<p>
												Faculty experts or outsourced professionals will be managed by the Unit to translate the said technologies into marketable products or business. These experts will be in-charged of the technology licensing, start-up, franchising and negotiations. 
											</p>
										</div><!--/.we-do-comment-->
									</div><!--/.we-do-description-->
								</div><!--/.single-we-do-box-->
							</div><!--/.col-->
						</div><!--/.row-->
					</div><!--/.we-do-carousel-->
				</div><!--/.we-do-details-->
			</div><!--/.container-->

		</section><!--/.we-do-->
		<!--we-do end-->

		<!--about-us start -->
		<section id="about" class="about-us">
			<div class="container">
				<div class="about-us-content">
					<div class="row">
						<div class="col-sm-6">
							<div class="single-about-us">
								<div class="about-us-txt">
									<h2>about us</h2>
									<p>
										The birth of Knowledge and Technology Transfer Division (KTTD) is significantly instrumental in translating ideas into marketable solutions. Hence, The KTTD shall be so in-charged on the overall operation of the three interconnecting and interdependent Offices : the innovation & Technology transfer Unit Support Office (ITSO), the Business Incubation Unit (BIU), the Technology Transfer UNIT (TTU). The KTTD interfaces the programs, projects and activities of these Offices.
									</p>
								</div><!--/.about-us-txt-->
							</div><!--/.single-about-us-->
						</div><!--/.col-->
						<div class="col-sm-6">
							<div class="single-about-us">
								<div class="about-us-img">
									<img src="assets/images/about/about-part.jpg" alt="about images">
								</div><!--/.about-us-img-->
							</div><!--/.single-about-us-->
						</div><!--/.col-->
					</div><!--/.row-->
				</div><!--/.about-us-content-->
			</div><!--/.container-->

		</section><!--/.about-us-->
		<!--about-us end -->

		<!--service start-->
		<section id="service"  class="service">
				<div class="container">
					<div class="service-details">
						<div class="section-header text-center">
							<h2>our services</h2>
							<p>
								Pallamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
							</p>
						</div><!--/.section-header-->
						<div class="service-content-one">
							<div class="row">
								<div class="col-sm-4 col-xs-12">
									<div class="service-single text-center">
										<div class="service-img">
											<img src="assets/images/service/service1.png" alt="image of service" />
										</div><!--/.service-img-->
										<div class="service-txt">
											<h2>
												<a href="#">busisness planning</a>
											</h2>
											<p>
												Lorem ipsum dolo dolor in  in voluptate velit esse cillum dolore. epteur sint oat cupidatat 
											</p>
											<a href="#" class="service-btn">
												learn more
											</a>
										</div><!--/.service-txt-->
									</div><!--/.service-single-->
								</div><!--/.col-->
								<div class="col-sm-4 col-xs-12">
									<div class="service-single text-center">
										<div class="service-img">
											<img src="assets/images/service/service2.png" alt="image of service" />
										</div><!--/.service-img-->
										<div class="service-txt">
											<h2>
												<a href="#">busisness consultency</a>
											</h2>
											<p>
												Lorem ipsum dolo dolor in  in voluptate velit esse cillum dolore. epteur sint oat cupidatat 
											</p>
											<a href="#" class="service-btn">
												learn more
											</a>
										</div><!--/.service-txt-->
									</div><!--/.service-single-->
								</div><!--/.col-->
								<div class="col-sm-4 col-xs-12">
									<div class="service-single text-center">
										<div class="service-img">
											<img src="assets/images/service/service3.png" alt="image of service" />
										</div><!--/.service-img-->
										<div class="service-txt">
											<h2>
												<a href="#">financial services</a>
											</h2>
											<p>
												Lorem ipsum dolo dolor in  in voluptate velit esse cillum dolore. epteur sint oat cupidatat 
											</p>
											<a href="#" class="service-btn">
												learn more
											</a>
										</div><!--/.service-txt-->
									</div><!--/.service-single-->
								</div><!--/.col-->
							</div><!--/.row-->
						</div><!--/.service-content-one-->
						<div class="service-content-two">
							<div class="row">
								<div class="col-sm-4 col-xs-12">
									<div class="service-single text-center">
										<div class="service-img">
											<img src="assets/images/service/service4.png" alt="image of service" />
										</div><!--/.service-img-->
										<div class="service-txt">
											<h2>
												<a href="#">risk management</a>
											</h2>
											<p>
												Lorem ipsum dolo dolor in  in voluptate velit esse cillum dolore. epteur sint oat cupidatat 
											</p>
											<a href="#" class="service-btn">
												learn more
											</a>
										</div><!--/.service-txt-->
									</div><!--/.service-single-->
								</div><!--/.col-->
								<div class="col-sm-4 col-xs-12">
									<div class="service-single text-center">
										<div class="service-img">
											<img src="assets/images/service/service5.png" alt="image of service" />
										</div><!--/.service-img-->
										<div class="service-txt">
											<h2>
												<a href="#">expert advisers</a>
											</h2>
											<p>
												Lorem ipsum dolo dolor in  in voluptate velit esse cillum dolore. epteur sint oat cupidatat 
											</p>
											<a href="#" class="service-btn">
												learn more
											</a>
										</div><!--/.service-txt-->
									</div><!--/.service-single-->
								</div><!--/.col-->
								<div class="col-sm-4 col-xs-12">
									<div class="service-single text-center">
										<div class="service-img">
											<img src="assets/images/service/service6.png" alt="image of service" />
										</div><!--/.service-img-->
										<div class="service-txt">
											<h2>
												<a href="#">24/7 customer support</a>
											</h2>
											<p>
												Lorem ipsum dolo dolor in  in voluptate velit esse cillum dolore. epteur sint oat cupidatat 
											</p>
											<a href="#" class="service-btn">
												learn more
											</a>
										</div><!--/.service-txt-->
									</div><!--/.service-single-->
								</div><!--/.col-->
							</div><!--/.row-->
						</div><!--/.service-content-two-->
					</div><!--/.service-details-->
				</div><!--/.container-->

		</section><!--/.service-->
		<!--service end-->

		<!--statistics start-->
		<section  class="statistics">
			<div class="container">
				<div class="statistics-counter "> 
					<div class="col-md-3 col-sm-6">
						<div class="single-ststistics-box">
							<div class="statistics-img">
								<img src="assets/images/counter/counter1.png" alt="counter-icon" />
							</div><!--/.statistics-img-->
							<div class="statistics-content">
								<div class="counter">2556</div>
								<h3>days worked</h3>
							</div><!--/.statistics-content-->
						</div><!--/.single-ststistics-box-->
					</div><!--/.col-->
					<div class="col-md-3 col-sm-6">
						<div class="single-ststistics-box">
							<div class="statistics-img">
								<img src="assets/images/counter/counter2.png" alt="counter-icon" />
							</div><!--/.statistics-img-->
							<div class="statistics-content">
								<div class="counter">326</div>
								<h3>project finished</h3>
							</div><!--/.statistics-content-->
						</div><!--/.single-ststistics-box-->
					</div><!--/.col-->
					<div class="col-md-3 col-sm-6">
						<div class="single-ststistics-box">
							<div class="statistics-img">
								<img src="assets/images/counter/counter3.png" alt="counter-icon" />
							</div><!--/.statistics-img-->
							<div class="statistics-content">
								<div class="counter">1526</div>
								<h3>coffee cup</h3>
							</div><!--/.statistics-content-->
						</div><!--/.single-ststistics-box-->
					</div><!--/.col-->
					<div class="col-md-3 col-sm-6">
						<div class="single-ststistics-box">
							<div class="statistics-img">
								<img src="assets/images/counter/counter4.png" alt="counter-icon" />
							</div><!--/.statistics-img-->
							<div class="statistics-content">
								<div class="counter">856</div>
								<h3>client satisfied</h3>
							</div><!--/.statistics-content-->
						</div><!--/.single-ststistics-box-->
					</div><!--/.col-->
				</div><!--/.statistics-counter-->	
			</div><!--/.container-->

		</section><!--/.statistics-->
		<!--statistics end-->

		<!--project start-->
		<section id="project"  class="project">
			<div class="container">
				<div class="project-details">
					<div class="project-header text-left">
						<h2>Our Finished Projects</h2>
						<p>
							Pallamco laboris nisi ut aliquip ex ea commodo consequat. 
						</p>
					</div><!--/.project-header-->
					<div class="project-content">
						<div class="gallery-content">
							<div class="isotope">
								<div class="row">
									<div class=" col-md-4 col-sm-12">
										<div class="item big-height">
											<img src="assets/images/project/project1.jpg" alt="portfolio image"/>
											<div class="isotope-overlay">
												<a href="project.html">
													<span class="lnr lnr-link"></span>
													
												</a>
												<h3>
													<a href="project.html">
														aquisition plan
													</a>
												</h3>
												<p>busisness planning</p>
											</div><!-- /.isotope-overlay -->
										</div><!-- /.item -->
									</div><!-- /.col -->
									<div class="col-md-8 col-sm-12">
										<div class="row">
											<div class="col-sm-6 col-xs-12">
												<div class="item">
													<img src="assets/images/project/project2.jpg" alt="portfolio image"/>
													<div class="isotope-overlay">
														<a href="project.html">
															<span class="lnr lnr-link"></span>
															
														</a>
														<h3>
															<a href="project.html">
																aquisition plan
															</a>
														</h3>
														<p>busisness planning</p>
													</div><!-- /.isotope-overlay -->
												</div><!-- /.item -->
											</div><!-- /.col -->
											<div class="col-sm-6 col-xs-12">
												<div class="item">
													<img src="assets/images/project/project3.jpg" alt="portfolio image"/>
													<div class="isotope-overlay">
														<a href="project.html">
															<span class="lnr lnr-link"></span>
															
														</a>
														<h3>
															<a href="project.html">
																aquisition plan
															</a>
														</h3>
														<p>busisness planning</p>
													</div><!-- /.isotope-overlay -->
												</div><!-- /.item -->
											</div><!-- /.col -->
										</div><!-- /.row-->
										<div class="row">
											<div class="col-sm-6 col-xs-12">
												<div class="item">
													<img src="assets/images/project/project4.jpg" alt="portfolio image"/>
													<div class="isotope-overlay">
														<a href="project.html">
															<span class="lnr lnr-link"></span>
															
														</a>
														<h3>
															<a href="project.html">
																aquisition plan
															</a>
														</h3>
														<p>busisness planning
														</p>
													</div><!-- /.isotope-overlay -->
												</div><!-- /.item -->
											</div><!-- /.col -->
											<div class="col-sm-6 col-xs-12">
												<div class="item">
													<img src="assets/images/project/project5.jpg" alt="portfolio image"/>
													<div class="isotope-overlay">
														<a href="project.html">
															<span class="lnr lnr-link"></span>
															
														</a>
														<h3>
															<a href="project.html">
																aquisition plan
															</a>
														</h3>
														<p>busisness planning
														</p>
													</div><!-- /.isotope-overlay -->
												</div><!--/.item -->
											</div><!-- /.col -->
										</div><!-- /.row-->

									</div><!-- /.col -->
								</div><!-- /.row -->
								
							</div><!--/.isotope-->
						</div><!--/.gallery-content-->
					</div><!--/.project-content-->
				</div><!--/.project-details-->
				<div class="project-btn text-center">
					<a href="project.html"  class="project-view">view all
					</a>
				</div><!--/.project-btn-->
			</div><!--/.container-->

		</section><!--/.project-->
		<!--project end-->

		<!--team start -->
		<section id="team" class="team">
			<div class="container">
				<div class="team-details">
					<div class="project-header team-header text-left">
						<h2>Our expert team</h2>
						<p>
							Pallamco laboris nisi ut aliquip ex ea commodo consequat. 
						</p>
					</div><!--/.project-header-->
					<div class="team-card">
						<div class="container">
							<div class="row">
								<div class="owl-carousel  team-carousel">
									<div class="col-sm-3 col-xs-12">
										<div class="single-team-box team-box-bg-1">
											<div class="team-box-inner">
												<h3>tom hanks</h3>
												<p class="team-meta">Founder &  CEO</p>
												<a href="team.html" class="learn-btn">
													learn more
												</a>
											</div><!--/.team-box-inner-->

										</div><!--/.single-team-box-->
									</div><!--.col-->
									<div class="col-sm-3 col-xs-12">
										<div class="single-team-box team-box-bg-2">
											<div class="team-box-inner">
												<h3>alex browne</h3>
												<p class="team-meta">
													Director, Management & Research
												</p>
												<a href="team.html" class="learn-btn">
													learn more
												</a>
											</div><!--/.team-box-inner-->
										</div><!--/.single-team-box-->
									</div><!--.col-->
									<div class="col-sm-3 col-xs-12">
										<div class="single-team-box team-box-bg-3">
											<div class="team-box-inner">
												<h3>darren j. stevens</h3>
												<p class="team-meta">
													Director, Finance Solution
												</p>
												<a href="team.html" class="learn-btn">
													learn more
												</a>
											</div><!--/.team-box-inner-->
										</div><!--/.single-team-box-->
									</div><!--.col-->
									<div class="col-sm-3 col-xs-12">
										<div class="single-team-box team-box-bg-4">
											<div class="team-box-inner">
												<h3>kevin thomson</h3>
												<p class="team-meta">
													Head, Legal Advising
												</p>
												<a href="team.html" class="learn-btn">
													learn more
												</a>
											</div><!--/.team-box-inner-->
										</div><!--/.single-team-box-->
									</div><!--.col-->
								</div><!--/.team-carousel-->
							</div><!--/.row-->
						</div><!--/.container-->
					</div><!--/.team-card-->
				</div><!--/.team-details-->
			</div><!--/.container-->

		</section><!--/.team-->
		<!--team end-->
	
		<!--pricing start -->
		<section id="pricing" class="pricing">
			<div class="container">
				<div class="pricing-details">
					<div class="section-header text-center">
						<h2 class="price-head">our pricing table</h2>
						<p>
							Pallamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
						</p>
					</div><!--/.section-header-->
					<div class="pricing-content">
						<div class="row">
							<div class="col-md-3 col-sm-6">
								<div class="pricing-box">
									<div class="pricing-header">
										<h2>basic</h2>
										<h3 class="packeg_p"><span>$</span>99</h3>
										<p>monthly</p>
									</div><!--/.pricing-header-->
									<ul class="plan-lists">
										<li>01 user</li>
										<li>01 project</li>
										<li>01 advisor team</li>
										<li>complete statistics</li>
										<li>E-Mail support</li>
									</ul><!--/ul-->
									
									<div class="project-btn pricing-btn text-center">
										<a href="project.html"  class="project-view">
											Sign Up Now
										</a>
									</div><!--/.project-btn-->
								</div><!--/.pricing-box-->
							</div><!--/.col-->

							<div class="col-md-3 col-sm-6">
								<div class="pricing-box">
									<div class="pricing-header">
										<h2>standard</h2>
										<h3 class="packeg_p"><span>$</span>299</h3>
										<p>monthly</p>
									</div><!--/.pricing-header-->
									<ul class="plan-lists">
										<li>05 user</li>
										<li>05 project</li>
										<li>05 advisor team</li>
										<li>complete statistics</li>
										<li>full support</li>
									</ul><!--/ul-->
									
									<div class="project-btn pricing-btn text-center">
										<a href="project.html"  class="project-view">
											Sign Up Now
										</a>
									</div><!--/.project-btn-->
								</div><!--/.pricing-box-->
							</div><!--/.col-->

							<div class="col-md-3 col-sm-6">
								<div class="pricing-box">
									<div class="pricing-header">
										<h2>advanced</h2>
										<h3 class="packeg_p"><span>$</span>499</h3>
										<p>monthly</p>
									</div><!--/.pricing-header-->
									<ul class="plan-lists">
										<li>10 user</li>
										<li>10 project</li>
										<li>10 advisor team</li>
										<li>complete statistics</li>
										<li>full support</li>
									</ul><!--/ul-->
									
									<div class="project-btn pricing-btn text-center">
										<a href="project.html"  class="project-view">
											Sign Up Now
										</a>
									</div><!--/.project-btn-->
								</div><!--/.pricing-box-->
							</div><!--/.col-->

							<div class="col-md-3 col-sm-6">
								<div class="pricing-box">
									<div class="pricing-header">
										<h2>unlimited</h2>
										<h3 class="packeg_p"><span>$</span>1099</h3>
										<p>monthly</p>
									</div><!--/.pricing-header-->
									<ul class="plan-lists">
										<li>unlimited user</li>
										<li>unlimited project</li>
										<li>unlimited advisor team</li>
										<li>complete statistics</li>
										<li>full support</li>
									</ul><!--/ul-->
									
									<div class="project-btn pricing-btn text-center">
										<a href="project.html"  class="project-view">
											Sign Up Now
										</a>
									</div><!--/.project-btn-->
								</div><!--/.pricing-box-->
							</div><!--/.col-->

						</div><!--/.row-->
					</div><!--/.pricing-content-->
				</div><!--/.pricing-details-->
			</div><!--/.container-->

		</section><!--/.pricing-->
		<!--pricing end-->

		<!--nwes start -->
		<section id="blog"  class="news">
			<div class="container">
				<div class="news-details">
					<div class="section-header text-center">
						<h2>our latest news</h2>
						<p>
							Pallamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
						</p>
					</div><!--/.section-header-->
					<div class="news-card news-card-pb-25">
							<div class="row">
								<div class="col-md-4 col-sm-6">
									<div class="single-news-box">
										<div class="news-box-bg">
											<img src="assets/images/blog/bl1.jpg" alt="blog image">
											<div class="isotope-overlay">
												<a href="blog_single.html">
													<span class="lnr lnr-link"></span>
													
												</a>
											</div>

										</div><!--/.team-box-bg-->
										<div class="news-box-inner">
											<h3>
												<a href="blog_single.html">
													The Pros and Cons of Starting an Online Consulting Business
												</a>
											</h3>
											<p class="news-meta">
												Posted By:  <span>Mick Steven</span>  //  On <span>12th June, 2017</span>
											</p>
											<!-- <a href="#" class="learn-btn">
												learn more
											</a> -->
										</div><!--/.news-box-inner-->
									</div><!--/.single-news-box-->
								</div><!--.col-->
								<div class="col-md-4 col-sm-6">
									<div class="single-news-box">
										<div class="news-box-bg">
											<img src="assets/images/blog/bl2.jpg" alt="blog image">
											<div class="isotope-overlay">
												<a href="blog_single.html">
													<span class="lnr lnr-link"></span>
													
												</a>
											</div>

										</div><!--/.team-box-bg-->
										<div class="news-box-inner">
											<h3>
												<a href="blog_single.html">
													8 Secrets for Your successful Business Mentor Won't Tell You
												</a>
											</h3>
											<p class="news-meta">
												Posted By:  <span>Mick Steven</span>  //  On <span>12th June, 2017</span>
											</p>
											<!-- <a href="#" class="learn-btn">
												learn more
											</a> -->
										</div><!--/.news-box-inner-->
									</div><!--/.single-news-box-->
								</div><!--.col-->
								<div class="col-md-4 col-sm-6">
									<div class="single-news-box">
										<div class="news-box-bg">
											<img src="assets/images/blog/bl3.jpg" alt="blog image">
											<div class="isotope-overlay">
												<a href="blog_single.html">
													<span class="lnr lnr-link"></span>
													
												</a>
											</div>

										</div><!--/.team-box-bg-->
										<div class="news-box-inner">
											<h3>
												<a href="blog_single.html">
													Hire a Branding Consultant With a Similar Aesthetic to Your Own
												</a>
											</h3>
											<p class="news-meta">
												Posted By:  <span>Mick Steven</span>  //  On <span>12th June, 2017</span>
											</p>
											<!-- <a href="#" class="learn-btn">
												learn more
											</a> -->
										</div><!--/.news-box-inner-->
									</div><!--/.single-news-box-->
								</div><!--.col-->
							</div><!--/.row-->
							<div class="project-btn text-center">
								<a href="project.html"  class="project-view">read more
								</a>
							</div><!--/.project-btn-->
					</div><!--/.news-card-->
					
				</div><!--/news-details-->
			</div><!--/.container-->

		</section><!--/news-->
		<!--news end-->

		<!-- new-project start -->
		<section  id="new-project" class="new-project">
				<div class="container">
					<div class="new-project-details">
						<div class="row">
							<div class="col-md-10 col-sm-8">
								<div class="single-new-project">
									<h3>
										Want to start a new project with us? Let’s Start!
									</h3>
								</div><!-- /.single-new-project-->	
							</div><!-- /.col-->	
							<div class="col-md-2 col-sm-4">
								<div class="single-new-project">
									<a href="#" class="slide-btn">
										start now
									</a>
								</div><!-- /.single-new-project-->	
							</div><!-- /.col-->	
						</div><!-- /.row-->	
					</div><!-- /.new-project-details-->	
				</div><!-- /.container-->	

		</section><!-- /.new-project-->	
		<!-- new-project end -->
		
		<!-- footer-copyright start -->
		<footer class="footer-copyright">
			<div class="container">
				<div class="row">
					<div class="col-sm-7">
						<div class="foot-copyright pull-left">
							<p>
								&copy; All Rights Reserve
							 	<a href="https://www.themesine.com">ThemeSINE</a>
							</p>
						</div><!--/.foot-copyright-->
					</div><!--/.col-->
					<div class="col-sm-5">
						<div class="foot-menu pull-right
						">	  
							<ul>
								<li ><a href="#">legal</a></li>
								<li ><a href="#">sitemap</a></li>
								<li ><a href="#">privacy policy</a></li>
							</ul>
						</div><!-- /.foot-menu-->
					</div><!--/.col-->
				</div><!--/.row-->
				<div id="scroll-Top">
					<i class="fa fa-angle-double-up return-to-top" id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
				</div><!--/.scroll-Top-->
			</div><!-- /.container-->

		</footer><!-- /.footer-copyright-->
		<!-- footer-copyright end -->



		<!-- jaquery link -->

		<script src="assets/js/jquery.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        
        <!--modernizr.min.js-->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		
		
		<!--bootstrap.min.js-->
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
		
		<!-- bootsnav js -->
		<script src="assets/js/bootsnav.js"></script>
		
		<!-- for manu -->
		<script src="assets/js/jquery.hc-sticky.min.js" type="text/javascript"></script>

		
		<!-- vedio player js -->
		<script src="assets/js/jquery.magnific-popup.min.js"></script>


		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

		<!-- isotope js -->
		<!-- <script src="assets/js/masonry.min.js"></script>
		<script src="assets/js/isotop-custom.js"></script> -->

        <!--owl.carousel.js-->
        <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
		
		<!-- counter js -->
		<script src="assets/js/jquery.counterup.min.js"></script>
		<script src="assets/js/waypoints.min.js"></script>
		
        <!--Custom JS-->
        <script type="text/javascript" src="assets/js/jak-menusearch.js"></script>
        <script type="text/javascript" src="assets/js/custom.js"></script>
		

    </body>
	
</html>



