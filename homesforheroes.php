
<?php
	
	// * IMPORTANT * Set your email information here
	define('DESTINATION_EMAIL','carterthedesigner@gmail.com');
	define('MESSAGE_SUBJECT','Freeman Realty Group - Homes For Heroes Page Email');
	define('REPLY_TO', 'carterthedesigner@gmail.com');
	define('FROM_ADDRESS', 'carterthedesigner@gmail.com');
	define('REDIRECT_URL', 'index.html');
	
	require_once('validation.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Freeman Realty Group - Homes For Heroes</title>

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
   
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand hidden-xs" href="index.html">Freeman Realty Group</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                   <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="buyingahome.html">Buying a Home</a>
                    </li>
                    <li>
                        <a href="sellingahome.html">Selling a Home</a>
                    </li>
                    <li>
                        <a href="homesforheros.html">Homes For Heroes</a>
                    </li>
                    <li>
                        <a href="agents.html">Agents</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">

                    <h2 class="intro-text text-center">
                        <strong>Homes For Heroes</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-6">
                  <br>
                   <h2 class="intro-text"><strong>What is Home For Heroes?</strong></h2>
             
                    <p>The Nation's Largest Hero Savings Program COR Residential has partnered with Homes For Heroes, a national program that offers discounts for Firefighters, Emergency Medical Technicians, Military and Veterans, Law Enforcement, Teachers, Clergy, and Healthcare Workers when buying or selling a home.</p>
                    <p>When Heroes buy or sell a home using Michael as their agent they receive substantial savings!</p>
                </div>
                <div class="col-md-6">
                    <img class="img-responsive hidden-xs align-center" src="images/layout/homesforheroes-tagline.jpg" alt="Freeman Realty Group" width="400px">
                    
                    <img class="img-responsive img-border-left hidden-sm hidden-md hidden-lg align-center" src="images/layout/heroes-logo2.jpg" alt="Freeman Realty Group">
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        
        
        
		 <div class="row">
            
                <div class="col-md-6">
                  <br>
                 	<img src="images/layout/grouppic.jpg" alt="Homes For Heroes" class="img-responsive align-center" width="400px">
                  
					<h2 class="intro-text"><strong>Here Are The Savings We Offer Heroes Using The Homes For Heroes® Program:</strong></h2>
                    <ul>
                    	<li>The Hero receives a 25% rebate, at closing, from COR’s gross commission. The average hero receives $2,000!</li>
                    	<li>Discounted lending fees charged by Homes for Heroes® lender affiliates.</li>
                    	<li>Closing Fee discounts from affiliated real estate attorneys, averaging an additional $150!</li>
                    	<li>Friends of Heroes: We can connect you with local home inspectors and other service providers that offer discounts to heroes!</li>
                    </ul>
                    
                    	

                </div>
                <div class="col-md-6">
                    <h2 class="intro-text"><strong>Register As A Hero:</strong></h2>
                    	<?php include('inc/form2.php'); ?>
                    	
                </div>
                <div class="clearfix"></div>
            
        </div>
       

    </div>
    <!-- /.container -->

 <footer>
 <div class="container">
            <div class="row">
            
              
               
                <div class="col-xs-12 col-sm-12 text-center">
                         <br class="hidden-xs"><br class="hidden-xs"><br class="hidden-xs"><br>
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
