<?php
	include('server.php');

    if(!empty($_SESSION['username'])){
        header('location: client-my-technologies.php');
    }
?>

<!DOCTYPE html>
<html dir="ltr">
<head>
    
	<script>
    var themeHasJQuery = !!window.jQuery;
</script>
<script type="text/javascript" src="./assets-home/js/jquery.js?1.0.675"></script>
<script>
    window._$ = jQuery.noConflict(themeHasJQuery);
</script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./assets-home/css/bootstrap.css?1.0.675" media="screen" />
<script type="text/javascript" src="./assets-home/js/bootstrap.min.js?1.0.675"></script>
<!--[if lte IE 9]>
<link rel="stylesheet" href="./assets-home/css/layout.ie.css?1.0.675">
<script src="./assets-home/js/layout.ie.js?1.0.675"></script>
<![endif]-->
<link class="" href='//fonts.googleapis.com/css?family=Open+Sans:300,300italic,regular,italic,600,600italic,700,700italic,800,800italic&subset=latin' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="./assets-home/js/layout.core.js"></script>
<script src="./assets-home/js/CloudZoom.js?1.0.675"></script>
<script src="assets/js/jquery.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        
        <!--modernizr.min.js-->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		
		
		<!--bootstrap.min.js-->
        <script type="text/javascript" src="./assets-home/js/bootstrap.min.js"></script>
		
		<!-- bootsnav js -->
		<script src="./assets-home/js/bootsnav.js"></script>
		
		<!-- for manu -->
		<script src="./assets-home/js/jquery.hc-sticky.min.js" type="text/javascript"></script>

		
		<!-- vedio player js -->
		<script src="./assets-home/js/jquery.magnific-popup.min.js"></script>


		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

		<!-- isotope js -->
		<!-- <script src="assets/js/masonry.min.js"></script>
		<script src="assets/js/isotop-custom.js"></script> -->

        <!--owl.carousel.js-->
        <script type="text/javascript" src="./assets-home/js/owl.carousel.min.js"></script>
		
		<!-- counter js -->
		<script src="./assets-home/js/jquery.counterup.min.js"></script>
		<script src="./assets-home/js/waypoints.min.js"></script>
		
        <!--Custom JS-->
        <script type="text/javascript" src="./assets-home/js/jak-menusearch.js"></script>
        <script type="text/javascript" src="./assets-home/js/custom.js"></script>
		
	
    <title>Home Page</title>
	<link rel="stylesheet" href="./assets-home/css/style.css?1.0.675">
	<script src="./assets-home/js/script.js?1.0.675"></script>
    <meta charset="utf-8">
    
    
    
 <meta name="keywords" content="HTML, CSS, JavaScript">

    
 <style>a {
  transition: color 250ms linear;
}
</style>
</head>
<body class=" bootstrap bd-body-1 
 bd-homepage bd-pagebackground-3  bd-margins">
    <header class=" bd-headerarea-1 bd-margins">
        <section class=" bd-section-4 bd-tagstyles" id="section4" data-section-title="">
    <div class="bd-container-inner bd-margins clearfix">
        
    </div>
</section>
	
		<section class=" bd-section-11 bd-page-width bd-tagstyles " id="section7" data-section-title="Logo With Contacts">
    <div class="bd-container-inner bd-margins clearfix">
        <div class=" bd-layoutbox-20 bd-page-width  bd-no-margins clearfix">
    <div class="bd-container-inner">
        <div class=" bd-layoutbox-26 bd-no-margins clearfix">
    <div class="bd-container-inner">
        <span class="bd-iconlink-5 bd-own-margins bd-icon-57 bd-icon "></span>
	
		<p class=" bd-textblock-74 bd-no-margins bd-content-element">
    9123 456 789<br><a href="#" draggable="false">
info@company.com
</a>
</p>
    </div>
</div>
	
		<div class=" bd-layoutbox-24 bd-no-margins clearfix">
    <div class="bd-container-inner">
        <span class="bd-iconlink-2 bd-own-margins bd-icon-53 bd-icon "></span>
	
		<p class=" bd-textblock-72 bd-no-margins bd-content-element">
    263 Iñigo St, Obrero, Davao City, 8000<br>
</p>
    </div>
</div>
    </div>
</div>
    </div>
</section>
	
		<div data-affix
     data-offset=""
     data-fix-at-screen="top"
     data-clip-at-control="bottom"
     
 data-enable-lg
     
 data-enable-md
     
 data-enable-sm
     
     class=" bd-affix-2 bd-no-margins bd-margins "><section class=" bd-section-5 bd-tagstyles " id="section5" data-section-title="">
    <div class="bd-container-inner bd-margins clearfix">
        <div class=" bd-layoutbox-10 bd-page-width  bd-no-margins clearfix">
    <div class="bd-container-inner">
        <div class=" bd-layoutbox-13 bd-no-margins bd-no-margins clearfix">
    <div class="bd-container-inner">
        <a class=" bd-logo-3" href="">
    <img class=" bd-imagestyles-8" src="./assets-home/images/6e10c7b6b27b89cbe854f2003beafd20_30.png">
</a>
    </div>
</div>
	
		<div class=" bd-layoutbox-17 bd-no-margins bd-no-margins clearfix">
    <div class="bd-container-inner">
        
    
    <nav class=" bd-hmenu-3" data-responsive-menu="true" data-responsive-levels="expand on click">
        
            <div class=" bd-responsivemenu-2 collapse-button">
    <div class="bd-container-inner">
        <div class="bd-menuitem-7 ">
            <a  data-toggle="collapse"
                data-target=".bd-hmenu-3 .collapse-button + .navbar-collapse"
                href="#" onclick="return false;">
                    <span>Menu</span>
            </a>
        </div>
    </div>
</div>
            <div class="navbar-collapse collapse">
            
            <div class=" bd-horizontalmenu-1 clearfix">
                <div class="bd-container-inner">
                    
                    <ul class=" bd-menu-1 nav nav-pills navbar-left">
                        

                        

                        

                        

                        

                        

                        

                        
                        
                            
                            <li class="smooth-menu bd-menuitem-1
                                        
                                        bd-toplevel-item
                                        
                                        "
                                    >

                                
                            
                            <a  href="#section4" >Home</a>

                                
                                    
                            
                            
                            </li>
                            
                            <li class="smooth-menu bd-menuitem-1
                                        
                                        bd-toplevel-item
                                        
                                        "
                                    >

                                
                            
                            <a  href="#about" >About</a>

                                
                                    
                            
                            
                            </li>
                            
                            <li class="smooth-menu bd-menuitem-1
                                        
                                        bd-toplevel-item
                                        
                                        "
                                    >

                                
                            
                                <a  href="#team" >Team</a>

                                
                                    
                            
                            
                            </li>
                    </ul>
                    
                </div>
            </div>
            
        
            </div>
    </nav>
    </div>
</div>
    </div>
</div>
    </div>
</section></div>
</header>
	
		<section class=" bd-section-1 bd-page-width bd-tagstyles " id="section3" data-section-title="Header Section With 2 Containers">
    <div class="bd-container-inner bd-margins clearfix">
        
    </div>
</section>
	
		<div class=" bd-content-13">
    
    <div class=" bd-htmlcontent-1 bd-margins" 
 data-page-id="page.0">
    <section class=" bd-section-9 bd-page-width bd-tagstyles " id="section4" data-section-title="One Plus Two">
    <div class="bd-container-inner bd-margins clearfix">
        <div class=" bd-layoutcontainer-9 bd-page-width  bd-columns bd-no-margins">
    <div class="bd-container-inner">
        <div class="container-fluid">
            <div class="row 
 bd-row-flex 
 bd-row-align-middle">
                <div class=" bd-columnwrapper-26 
 col-md-6
 col-sm-12">
    <div class="bd-layoutcolumn-26 bd-column" ><div class="bd-vertical-align-wrapper"><h1 class=" bd-textblock-40 bd-content-element">
    KTTD Tagline<br>
</h1>
	
		<div class=" bd-spacer-15 clearfix"></div>
	
		<p class=" bd-textblock-42 bd-content-element">
    The KTTD translates ideas and innovations into marketable solutions. To facilitate this process, the KTTD will evaluate promising technologies, protect, incubate &amp; commercialize USeP’s innovation to industry, negotiable licensing or startup &amp; maintain relationship with industry partners.
</p>
	
		<a 
 name="Signup"
 onclick="jQuery(this).closest('form').submit();" href="#" class="bd-linkbutton-17  bd-button-16  bd-own-margins bd-content-element" data-toggle="modal" data-target=".bs-example-modal-lg" >
    Sign Up
</a>
	
		<a 
 name="Signin"
 onclick="jQuery(this).closest('form').submit();" href="#" class="bd-linkbutton-2  bd-button-12  bd-own-margins bd-content-element" data-toggle="modal" data-target=".bs-example-modal-sm">
    Sign IN
</a>

        <!-- small modal -->
							<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
								<div class="modal-dialog modal-sm" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="mySmallModalLabel">
												Sign In

											</h4> 
											<form action="main.php" method="post" class="sm-frm" style="padding:25px">
												<label>Username :</label>
												<input type="text" class="form-control" name="username" placeholder="client123">
												<label>Password :</label>
												<input type="password" name="password" class="form-control" placeholder="********">
												<label><input type="checkbox" name="personality"> Remenber Me</label><br>
												<button type="submit" name="btnLogin" class="btn btn-default pull-right">Login</button>
											</form>

										</div>
									</div>
								</div>

							</div>
<?php

                                            if(isset($_GET['error']) == 1){
                                                echo "<font color='red'><p>Invalid Account!</p></font>";
                                            }

                                            ?>
        
        <!-- large modal -->
							<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
								<div class="modal-dialog modal-lg" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="myLargeModalLabel">Sign Up</h4> 
                                            <?php

                                            if(isset($_GET['error']) == 2){
                                                echo "<font color='red'><p>Account Registered Waiting for Aprroval!</p></font>";
                                            }

                                            ?>
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
												    <label>Firstname</label>
												    <input type="text" class="form-control" name="firstname"
                                                    placeholder="">
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
                                                    <label>Image</label>
                                                    <input type="file" name="picture" value="Select Image" id="image" required>
												    <br>                                                
												    <input type="submit" class="btn btn-default pull-right" name="btnRegister" value="Submit" id="insert"></button>
											</form>
                                            
										</div>
									</div>
								</div>
							</div>
	
		<div class=" bd-spacer-17 clearfix"></div></div></div>
</div>
	
		<div class=" bd-columnwrapper-28 
 col-md-3
 col-sm-6
 col-xs-6">
    <div class="bd-layoutcolumn-28 bd-column" ><div class="bd-vertical-align-wrapper"></div></div>
</div>
	
		<div class=" bd-columnwrapper-30 
 col-md-3
 col-sm-6
 col-xs-6">
    <div class="bd-layoutcolumn-30 bd-column" ><div class="bd-vertical-align-wrapper"></div></div>
</div>
            </div>
        </div>
    </div>
</div>
    </div>
</section>
	
		<section class=" bd-section-8 bd-tagstyles" id="section4" data-section-title="Six Columns With Header">
    <div class="bd-container-inner bd-margins clearfix">
        <div class=" bd-layoutcontainer-6 bd-columns bd-no-margins">
    <div class="bd-container-inner">
        <div class="container-fluid">
            <div class="row 
 bd-row-flex 
 bd-row-align-top">
                <section id="about" class="about-us">
                <div class=" bd-columnwrapper-10 
 col-xs-12">
    <div class="bd-layoutcolumn-10 bd-column" ><div class="bd-vertical-align-wrapper"><h1 class=" bd-textblock-4 bd-no-margins bd-content-element">
    <br><br>About KTTD<br>
</h1>
	
		<h2 class=" bd-textblock-10 bd-no-margins bd-content-element">
    The birth of Knowledge and Technology Transfer Division (KTTD) is 
significantly instrumental in translating ideas into marketable 
solutions. Hence, The KTTD shall be so in-charged on the overall 
operation of the three interconnecting and interdependent Offices : the 
innovation &amp; Technology transfer Unit Support Office (ITSO), the 
Business Incubation Unit (BIU), the Technology Transfer UNIT (TTU). The 
KTTD interfaces the programs, projects and activities of these Offices.
</h2></div></div>
</div>
                </section>
	
		<div class=" bd-columnwrapper-14 
 col-md-4
 col-sm-6">
    <div class="bd-layoutcolumn-14 bd-background-width  bd-column" ><div class="bd-vertical-align-wrapper"><img class="bd-imagelink-2 bd-imagescaling bd-imagescaling-3 bd-own-margins bd-imagestyles   "  src="./assets-home/images/f3258a9569b34bd83249f4a0ca9572e9_1457721366_47.Explore.png">
	
		<h4 class=" bd-textblock-13 bd-content-element">
    <a href="#" draggable="false">
    Strategies</a>
</h4>
	
		<div class=" bd-spacer-2 clearfix"></div>
	
		<p class=" bd-textblock-15 bd-content-element">
    The formation of visions of the company, statement of corporate objectives, weighing of the potential, the formation of conditions
</p></div></div>
</div>
	
		<div class=" bd-columnwrapper-16 
 col-md-4
 col-sm-6">
    <div class="bd-layoutcolumn-16 bd-column" ><div class="bd-vertical-align-wrapper"><img class="bd-imagelink-7 bd-imagescaling bd-imagescaling-6 bd-own-margins bd-imagestyles   "  src="./assets-home/images/8035ad83ddf811e849ee9ad1e8f2402f_1457722286_megaphone.png">
	
		<h4 class=" bd-textblock-17 bd-content-element">
    <a href="#">
    Solutions</a>
</h4>
	
		<div class=" bd-spacer-5 clearfix"></div>
	
		<p class=" bd-textblock-19 bd-content-element">
    We present you the various topics of business consultations, from which you can choose the one that interests you. We provide consulting services&nbsp;
</p></div></div>
</div>
	
		<div class=" bd-columnwrapper-18 
 col-md-4
 col-sm-6">
    <div class="bd-layoutcolumn-18 bd-column" ><div class="bd-vertical-align-wrapper"><img class="bd-imagelink-9 bd-imagescaling bd-imagescaling-8 bd-own-margins bd-imagestyles   "  src="./assets-home/images/75a0494fcbe9144e30cbded041fe83a2_1457717915_41.Trophy.png">
	
		<h4 class=" bd-textblock-21 bd-content-element">
    <a href="#">
    Results</a>
</h4>
	
		<div class=" bd-spacer-7 clearfix"></div>
	
		<p class=" bd-textblock-25 bd-content-element">
    Our best experts are co-working for the best result. The synergistic effect of our decisions is achieved through a well-established pattern of interaction
</p></div></div>
</div>
            </div>
        </div>
    </div>
</div>
    </div>
            <br><br><br>
</section>
	
		<section class=" bd-section-10 bd-tagstyles" id="section4" data-section-title="Three Columns With Header">
    <div class="bd-container-inner bd-margins clearfix">
        <div class=" bd-layoutcontainer-11 bd-columns bd-no-margins">
    <div class="bd-container-inner">
        <div class="container-fluid">
            <div class="row 
 bd-row-flex 
 bd-row-align-top">
                <section id="team" class="team">
                <div class=" bd-columnwrapper-34 
 col-xs-12">
    <div class="bd-layoutcolumn-34 bd-column" ><div class="bd-vertical-align-wrapper"><h1 class=" bd-textblock-44 bd-content-element">
    <br><br>Meet Our Team
</h1>
	
		<div class=" bd-spacer-19 clearfix"></div>
	
		<h3 class=" bd-textblock-46 bd-content-element">
    We believe in Quality over Quantity. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue.
</h3></div></div>
</div>
                </section>
		<div class=" bd-columnwrapper-36 
 col-md-3
 col-sm-6">
    <div class="bd-layoutcolumn-36 bd-column" ><div class="bd-vertical-align-wrapper"><img class="bd-imagelink-17 bd-own-margins bd-imagestyles-12   "  src="./assets-home/images/2707a329145c282130141926acb4bcf7_e55.jpg">
	
		<h2 class=" bd-textblock-48 bd-content-element">
    Markus Lang
</h2>
	
		<h3 class=" bd-textblock-50 bd-content-element">
    Art Director
</h3>
	
		<div class="bd-separator-2  bd-separator-center bd-separator-content-center clearfix" >
    <div class="bd-container-inner">
        <div class="bd-separator-inner">
            
        </div>
    </div>
</div>
	
		<p class=" bd-textblock-52 bd-content-element">
    Lorem ipsum dolor sit amet<br>Aenean imperdiet vestibulum<br>Morbi eleifend augue sed<br>
</p>
	
		<div class=" bd-socialicons-2">
    
        <a target="_blank" data-social-url data-path-to-root="." class=" bd-socialicon-19 bd-socialicon"
   href="//www.facebook.com/sharer.php?u=">
    <span class="bd-icon"></span><span></span>
</a>
    
        <a target="_blank" data-social-url data-path-to-root="." class=" bd-socialicon-20 bd-socialicon"
   href="//twitter.com/share?url=&amp;text=">
    <span class="bd-icon"></span><span></span>
</a>
    
        <a target="_blank" data-social-url data-path-to-root="." class=" bd-socialicon-21 bd-socialicon"
   href="//plus.google.com/share?url=">
    <span class="bd-icon"></span><span></span>
</a>
    
    
    
    
    
    
    
    
</div></div></div>
</div>
	
		<div class=" bd-columnwrapper-38 
 col-md-3
 col-sm-6">
    <div class="bd-layoutcolumn-38 bd-column" ><div class="bd-vertical-align-wrapper"><img class="bd-imagelink-22 bd-own-margins bd-imagestyles-13   "  src="./assets-home/images/8c318a7e1fc270899c66abac67026996_wderf.jpg">
	
		<h2 class=" bd-textblock-54 bd-content-element">
    Paul Adams
</h2>
	
		<h3 class=" bd-textblock-56 bd-content-element">
    Developer
</h3>
	
		<div class="bd-separator-6  bd-separator-center bd-separator-content-center clearfix" >
    <div class="bd-container-inner">
        <div class="bd-separator-inner">
            
        </div>
    </div>
</div>
	
		<p class=" bd-textblock-58 bd-content-element">
    Lorem ipsum dolor sit amet<br>Aenean imperdiet vestibulum<br>Morbi eleifend augue sed<br>
</p>
	
		<div class=" bd-socialicons-5">
    
        <a target="_blank" data-social-url data-path-to-root="." class=" bd-socialicon-56 bd-socialicon"
   href="//www.facebook.com/sharer.php?u=">
    <span class="bd-icon"></span><span></span>
</a>
    
        <a target="_blank" data-social-url data-path-to-root="." class=" bd-socialicon-57 bd-socialicon"
   href="//twitter.com/share?url=&amp;text=">
    <span class="bd-icon"></span><span></span>
</a>
    
        <a target="_blank" data-social-url data-path-to-root="." class=" bd-socialicon-58 bd-socialicon"
   href="//plus.google.com/share?url=">
    <span class="bd-icon"></span><span></span>
</a>
    
    
    
    
    
    
    
    
</div></div></div>
</div>
	
		<div class=" bd-columnwrapper-44 
 col-md-3
 col-sm-6">
    <div class="bd-layoutcolumn-44 bd-column" ><div class="bd-vertical-align-wrapper"><img class="bd-imagelink-26 bd-own-margins bd-imagestyles-14   "  src="./assets-home/images/103d8c766c603dec36fc3afce0a25f16_sss.jpg">
	
		<h2 class=" bd-textblock-60 bd-content-element">
    Lana Stevens
</h2>
	
		<h3 class=" bd-textblock-62 bd-content-element">
    Manager
</h3>
	
		<div class="bd-separator-8  bd-separator-center bd-separator-content-center clearfix" >
    <div class="bd-container-inner">
        <div class="bd-separator-inner">
            
        </div>
    </div>
</div>
	
		<p class=" bd-textblock-64 bd-content-element">
    Lorem ipsum dolor sit amet<br>Aenean imperdiet vestibulum<br>Morbi eleifend augue sed<br>
</p>
	
		<div class=" bd-socialicons-7">
    
        <a target="_blank" data-social-url data-path-to-root="." class=" bd-socialicon-78 bd-socialicon"
   href="//www.facebook.com/sharer.php?u=">
    <span class="bd-icon"></span><span></span>
</a>
    
        <a target="_blank" data-social-url data-path-to-root="." class=" bd-socialicon-79 bd-socialicon"
   href="//twitter.com/share?url=&amp;text=">
    <span class="bd-icon"></span><span></span>
</a>
    
        <a target="_blank" data-social-url data-path-to-root="." class=" bd-socialicon-80 bd-socialicon"
   href="//plus.google.com/share?url=">
    <span class="bd-icon"></span><span></span>
</a>
    
    
    
    
    
    
    
    
</div></div></div>
</div>
	
		<div class=" bd-columnwrapper-46 
 col-md-3
 col-sm-6">
    <div class="bd-layoutcolumn-46 bd-column" ><div class="bd-vertical-align-wrapper"><img class="bd-imagelink-30 bd-own-margins bd-imagestyles-17   "  src="./assets-home/images/28a17e2726ca926f5a1d45637fd0699a_fgh.jpg">
	
		<h2 class=" bd-textblock-66 bd-content-element">
    Johnnie King
</h2>
	
		<h3 class=" bd-textblock-68 bd-content-element">
    Interface Designer
</h3>
	
		<div class="bd-separator-10  bd-separator-center bd-separator-content-center clearfix" >
    <div class="bd-container-inner">
        <div class="bd-separator-inner">
            
        </div>
    </div>
</div>
	
		<p class=" bd-textblock-70 bd-content-element">
    Lorem ipsum dolor sit amet<br>Aenean imperdiet vestibulum<br>Morbi eleifend augue sed<br>
</p>
	
		<div class=" bd-socialicons-9">
    
        <a target="_blank" data-social-url data-path-to-root="." class=" bd-socialicon-100 bd-socialicon"
   href="//www.facebook.com/sharer.php?u=">
    <span class="bd-icon"></span><span></span>
</a>
    
        <a target="_blank" data-social-url data-path-to-root="." class=" bd-socialicon-101 bd-socialicon"
   href="//twitter.com/share?url=&amp;text=">
    <span class="bd-icon"></span><span></span>
</a>
    
        <a target="_blank" data-social-url data-path-to-root="." class=" bd-socialicon-102 bd-socialicon"
   href="//plus.google.com/share?url=">
    <span class="bd-icon"></span><span></span>
</a>
    
    
    
    
    
    
    
    
</div></div></div>
</div>
            </div>
        </div>
    </div>
</div>
    </div>
</section>
</div>
</div>
	
		<footer class=" bd-footerarea-1 bd-margins">
        <section class=" bd-section-2 bd-tagstyles" id="section2" data-section-title="">
    <div class="bd-container-inner bd-margins clearfix">
        <p class=" bd-textblock-1 bd-content-element">
    © 2016 Themler.com
</p>
	
		<div class=" bd-pagefooter-1">
    <div class="bd-container-inner">
        
            <a href='http://www.themler.io/html-templates' target="_blank">HTML Template</a> created with <a href='http://themler.io' target="_blank">Themler</a>.
    </div>
</div>
    </div>
</section>
</footer>
	
		<div data-smooth-scroll data-animation-time="250" class=" bd-smoothscroll-3"><a href="#" class=" bd-backtotop-1 ">
    <span class="bd-icon-67 bd-icon "></span>
</a></div>
</body>
</html>