
<?php
	
	// * IMPORTANT * Set your email information here
	define('DESTINATION_EMAIL','mfreeman@corresidential.com');
	define('MESSAGE_SUBJECT','Freeman Realty Group - Contact Page Email');
	define('REPLY_TO', 'mfreeman@corresidential.com');
	define('FROM_ADDRESS', 'mfreeman@corresidential.com');
	define('REDIRECT_URL', 'index.html');
	
	require_once('validation.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   	<meta name="description" content="Freeman Realty Group, Working with home buyers and sellers all over metro Atlanta. North Georgia affiliate for Homes for Heroes. Saving heroes thousands of dollars on home purchase and sell.">
	<meta name="keywords" content="homes for heroes, realty group, atlanta realty group, home buying, atlanta home buying, atlanta home selling, metro atlanta realty"/>
	<meta name="author" content="Carter Guthrie carterguthrie.com">

    <title>Freeman Realty Group - Contact</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>



<!-- Mobile Nav -->
	<div class="row">
		<div class="col-xs-12 hidden-md hidden-lg">
		 		<br>
			<img src="images/layout/menu-icon2.png" class="toggle no-border" width="53px" align="right" alt="carterguthrie.com menu icon">
  	  	
   				<nav class="mobile-nav toggle-info">
   					<ul> <br><br><br>
   						<li class="main-nav-style mobile-main-nav"><a href="index.html" title="Freeman Realty Group">HOME</a></li>
								
						<li class="main-nav-style mobile-main-nav"><a href="#" title="Freeman Realty Group">FIND A PROPERTY</a>
							<ul>
								<li class="dropdown-styler"><a href="popularcommunities.html" title="Freeman Realty Group">- POPULAR COMMUNITIES</a></li>
								<li class="dropdown-styler"><a href="http://freemanteamsells.idxbroker.com/idx/search/basic" title="Freeman Realty Group">- BASIC SEARCH</a></li>
								<li class="dropdown-styler"><a href="http://freemanteamsells.idxbroker.com/idx/search/advanced" title="Freeman Realty Group">- ADVANCED SEARCH</a></li>
								<li class="dropdown-styler"><a href="http://freemanteamsells.idxbroker.com/idx/map/mapsearch" title="Freeman Realty Group">- MAP SEARCH</a></li>
								<li class="dropdown-styler"><a href="http://freemanteamsells.idxbroker.com/idx/searchbycity" title="Freeman Realty Group">- BROWSE BY CITY</a></li>
								
							</ul>
						
						</li>
							
						<li class="main-nav-style mobile-main-nav"><a href="homesforheroes.php" title="Freeman Realty Group">HOMES FOR HEROES</a></li>
							
						<li class="main-nav-style mobile-main-nav"><a href="buyingahome.html" title="Freeman Realty Group">BUYING A HOME</a></li>
							
						<li class="main-nav-style mobile-main-nav"><a href="sellingahome.html" title="Freeman Realty Group">SELLING A HOME</a></li>
							
						<li class="main-nav-style mobile-main-nav"><a href="agents.html" title="Freeman Realty Group">AGENTS</a></li>
							
						<li class="main-nav-style mobile-main-nav"><a href="#" title="Freeman Realty Group">CONTACT</a>
						<ul>
								<li class="dropdown-styler"><a href="contact.php" title="Freeman Realty Group">- CONTACT INFORMATION</a></li>
								<li class="dropdown-styler"><a href="http://freemanteamsells.idxbroker.com/idx/homevaluation" title="Freeman Realty Group">- HOME VALUATION CONTACT</a></li>
								<li class="dropdown-styler"><a href="http://freemanteamsells.idxbroker.com/idx/scheduleshowing/b032/XXX" title="Freeman Realty Group">- SCHEDULE A SHOWING</a></li>
								<li class="dropdown-styler"><a href="http://freemanteamsells.idxbroker.com/idx/search/emailupdatesignup" title="Freeman Realty Group">- SIGN UP FOR EMAIL UPDATES</a></li>
								
						</ul>
						
						</li>
							<br>						

					
   					</ul>
   				</nav>
   			<br><br>			
		</div>
	</div>
	
	
<!-- Website Content --> 
   <div class="row">
    	<div class="hidden-xs col-sm-1"></div> 
			
			<div class="col-xs-12 col-sm-4">
			  <br>
				<a href="contact.php" title="Freeman Realty Group"><img src="images/layout/all-freeman.png" alt="Freeman Realty Group" usemap="#Map" class="img-responsive align-center">
                <map name="Map">
                  <area shape="rect" coords="170,25,393,188" href="index.html">
                  <area shape="rect" coords="189,189,375,212" href="contact.php">
                </map>
			  </a>
			</div>

   			<div class="col-xs-12 col-sm-6">
   			   <br class="hidden-xs"><br class="hidden-xs"><br>
 			   <a href="homesforheroes.php" title="Freeman Realty Group"><img src="images/layout/heroes.png" alt="Freeman Realty Group" class="img-responsive align-center"></a>
  			   <br class="hidden-sm hidden-md"><br class="hidden-xs hidden-sm hidden-md"> 			
	   			<div class="network-style2">

					<a href="https://www.linkedin.com/pub/michael-freeman/bb/337/485" title="Freeman Realty Group - LinkedIn" target="_blank"><img src="images/layout/in.png" onmouseover="this.src='images/layout/in2.png'" onmouseout="this.src='images/layout/in.png'"  alt="Freeman Realty Group - LinkedIn" class="img-responsive nav-location"></a>
			
					<a href="https://plus.google.com/105063529403750053585/plusones?fd=1" title="Freeman Realty Group - Facebook" target="_blank"><img src="images/layout/g.png" onmouseover="this.src='images/layout/g2.png'" onmouseout="this.src='images/layout/g.png'"  alt="Freeman Realty Group - Google Plus" class="img-responsive nav-location"></a>
				
					<a href="https://www.facebook.com/homesforheroesmike?ref=aymt_homepage_panel" title="Freeman Realty Group - Facebook" target="_blank"><img src="images/layout/fb.png" onmouseover="this.src='images/layout/fb2.png'" onmouseout="this.src='images/layout/fb.png'"  alt="Freeman Realty Group - Google Plus" class="img-responsive nav-location"></a>	
				</div>
	   		</div>
	 <div class="hidden-xs col-sm-1"></div>  
   </div>   
 
<br class="hidden-sm">


<!-- Navigation -->
     
<div id="container" class="hidden-xs hidden-sm">
    <nav>
        <ul>
            <li><a href="index.html">HOME</a></li>
            
            <li><a href="#">FIND A PROPERTY</a>
            <!-- First Tier Drop Down -->
            <ul>
                <li><a href="popularcommunities.html">POPULAR COMMUNITIES</a></li>
                <li><a href="http://freemanteamsells.idxbroker.com/idx/search/basic">BASIC SEARCH</a></li>
                <li><a href="http://freemanteamsells.idxbroker.com/idx/search/advanced">ADVANCED SEARCH</a></li>
                <li><a href="http://freemanteamsells.idxbroker.com/idx/map/mapsearch">MAP SEARCH</a></li>
                <li><a href="http://freemanteamsells.idxbroker.com/idx/searchbycity">BROWSE BY CITY</a></li>
            </ul>        
            </li>
                 <li><a href="homesforheroes.php">HOMES FOR HEROES</a></li>
                 <li><a href="buyingahome.html">BUYING A HOME</a></li>
				 <li><a href="sellingahome.html">SELLING A HOME</a></li>
				 <li><a href="agents.html">AGENTS</a></li>
                   
                 <li><a href="">CONTACT</a>   
                        <!-- Third Tier Drop Down -->
                     <ul>
                       <li><a href="contact.php">CONTACT INFORMATION</a></li>
                       <li><a href="http://freemanteamsells.idxbroker.com/idx/homevaluation">HOME VALUATION CONTACT</a></li>
                       <li><a href="http://freemanteamsells.idxbroker.com/idx/scheduleshowing/b032/XXX">SCHEDULE A SHOWING</a></li>
                       <li><a href="http://freemanteamsells.idxbroker.com/idx/search/emailupdatesignup">SIGN UP FOR EMAIL UPDATES</a></li>
                     </ul>
                    </li>
        </ul>
    </nav>
	</div>

    
<!-- Main content -->  

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    
                    <h2 class="intro-text text-center"><strong>Contact</strong></h2>
                    <hr>
                </div>
                <div class="col-md-6">
					<img class="img-responsive img-border-left" src="images/layout/neighborhoodhouse3.jpg" alt="">
                </div>
                <div class="col-md-6">
                   <p>We would love to hear from you. Please fill out our contact form below or you are more than welcome to call or email us:  
                    </p>
                    <p>Phone:
                        <strong>678-201-6840</strong>
                    </p>
                    <p>Email:
                        <strong><a href="mailto:mfreeman@corresidential.com">mfreeman@corresidential.com</a></strong>
                    </p>
                    <p>We will get in touch with you shortly! 
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
                <div class="col-xs-12">
                    
                    <h2 class="intro-text text-center">
                        <strong>Contact Form</strong>
                    </h2>
                    <hr>

                    
                        <div class="row">
							<div class="col-xs-1"></div>
                           <div class="col-xs-10">
                            <?php include('inc/form.php'); ?>
                            </div>
                            <div class="col-xs-1"></div>
                        </div>
                    
                </div>
        </div>

    </div>
    <!-- /.container -->

 <footer>
 <div class="container">
            <div class="row">
            
              
               
                <div class="col-xs-12 col-sm-12 text-center">
                         <br>
                         <hr class="hidden-sm hidden-md hidden-lg">
                         <br class="hidden-sm hidden-md hidden-lg">
					
                         
<!-- Footer Nav -->				
				<nav class="nav-footer align-center">
					<ul>
						<li><a href="index.html" class=" nav-footer-left"  title="Freeman Realty Group - Home">HOME</a></li>
						<li><a href="buyingahome.html" class=""  title="Freeman Realty Group - Buying">BUYING</a></li>
						<li><a href="sellingahome.html" class=""  title="Freeman Realty Group - Selling">SELLING</a></li> 
						<li><a href="homesforheroes.php" class=""  title="Freeman Realty Group - Homes for Heroes">HOMES FOR HEROES</a></li>
						<li><a href="agents.html" class=""  title="Freeman Realty Group - Agents">AGENTS</a></li>
						<li><a href="contact.php" class=""  title="Freeman Realty Group - Contact">CONTACT</a></li> 
						
					</ul>
				</nav>
               
   
                 <div class="row">
                 	 <div class="col-xs-6 col-sm-3">
                 	 	<br class="hidden-xs hidden-lg"><br class="hidden-xs">
             	<img src="images/layout/logo.png" alt="Freeman Realty Group" class="img-responsive">
             		 </div>
                	 <div class="col-xs-6 hidden-sm hidden-md hidden-lg">
                 	 	<br class="hidden-sm hidden-md hidden-lg">
             	<img src="images/layout/logo_corresidential.gif" alt="Freeman Realty Group" class="img-responsive">
             		 </div>
                 	<div class="col-xs-12 col-sm-6">
                  
                  <!-- END OF Footer Nav -->
                 			<br class="hidden-xs hidden-lg">
                  			<p class="contact-footer-size">
                  			<br class="hidden-xs"><br>
                  			   Michael Freeman
                  			<br>
							   COR Residential Real Estate
							<br>
							   420 South Hill St.
							<br>
							   Buford, Georgia
							<br>
							   Cell: 678-201-6840
							<br>
							   Fax: 706-684-0494
							<br>
							   E-mail: mikefreemansells@yahoo.com</p>
                  
					</div>
                 	 <div class="col-xs-6 col-sm-3">
                 	      <br class="hidden-xs hidden-lg"><br class="hidden-xs"><br class="hidden-xs">
             			<a href="http://www.corresidential.com/" title="COR Residential Real Estate"><img src="images/layout/logo_corresidential.gif" alt="Freeman Realty Group" class="img-responsive hidden-xs"></a>
             			<br class="hidden-xs"><br class="hidden-xs">
<!-- Social Network Buttons -->	
            <div class="network-style2 hidden-xs">

				<a href="https://www.linkedin.com/pub/michael-freeman/bb/337/485" title="Freeman Realty Group - LinkedIn" target="_blank"><img src="images/layout/in.png" onmouseover="this.src='images/layout/in2.png'" onmouseout="this.src='images/layout/in.png'"  alt="Freeman Realty Group - LinkedIn" class="img-responsive nav-location"></a>
			
				<a href="https://plus.google.com/105063529403750053585/plusones?fd=1" title="Freeman Realty Group - Facebook" target="_blank"><img src="images/layout/g.png" onmouseover="this.src='images/layout/g2.png'" onmouseout="this.src='images/layout/g.png'"  alt="Freeman Realty Group - Google Plus" class="img-responsive nav-location"></a>
				
				<a href="https://www.facebook.com/homesforheroesmike?ref=aymt_homepage_panel" title="Freeman Realty Group - Facebook" target="_blank"><img src="images/layout/fb.png" onmouseover="this.src='images/layout/fb2.png'" onmouseout="this.src='images/layout/fb.png'"  alt="Freeman Realty Group - Google Plus" class="img-responsive nav-location"></a>
					
			</div>
                         			
                          			
             		 </div>
                  </div>
                   
                    <p class="copyright-style margin-copyrightstyle hidden-xs">Copyright &copy; Freeman Realty Group 2015</p>
                    <p class="copyright-style hidden-sm hidden-md hidden-lg">Copyright &copy; Freeman Realty Group 2015</p>
                    
                    
                    <div class="network-style2 hidden-sm hidden-md hidden-lg">

				<a href="https://www.linkedin.com/pub/michael-freeman/bb/337/485" title="Freeman Realty Group - LinkedIn" target="_blank"><img src="images/layout/in.png" onmouseover="this.src='images/layout/in2.png'" onmouseout="this.src='images/layout/in.png'"  alt="Freeman Realty Group - LinkedIn" class="img-responsive nav-location"></a>
			
				<a href="https://plus.google.com/105063529403750053585/plusones?fd=1" title="Freeman Realty Group - Facebook" target="_blank"><img src="images/layout/g.png" onmouseover="this.src='images/layout/g2.png'" onmouseout="this.src='images/layout/g.png'"  alt="Freeman Realty Group - Google Plus" class="img-responsive nav-location"></a>
				
				<a href="https://www.facebook.com/homesforheroesmike?ref=aymt_homepage_panel" title="Freeman Realty Group - Facebook" target="_blank"><img src="images/layout/fb.png" onmouseover="this.src='images/layout/fb2.png'" onmouseout="this.src='images/layout/fb.png'"  alt="Freeman Realty Group - Google Plus" class="img-responsive nav-location"></a>	
			</div>
                </div>
               
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
