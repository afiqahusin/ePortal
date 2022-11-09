<!doctype html>
<!--
	Lamoda by TEMPLATE STOCK
	templatestock.co @templatestock
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->


<html lang="en-gb" class="no-js">
  <head>
    <meta charset="utf-8">
	<title>ONE KLGSH</title>
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">		

		
	<!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
 
 

     <!--styles -->
	<link rel="stylesheet" href="style/bootstrap/css/bootstrap.min.css" media="screen">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="js/owl-carousel/owl.theme.css" rel="stylesheet">
    <link href="js/owl-carousel/owl.transitions.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    <link rel="stylesheet" href="css/etlinefont.css">
    <link href="css/style.css" type="text/css"  rel="stylesheet"/>
	<!--<link href="css/table.css" type="text/css"  rel="stylesheet"/>
	<link href="css/accordion.css" type="text/css"  rel="stylesheet"/> -->


   <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    
	<body  data-spy="scroll" data-target="#main-menu">


  <!--Start Page loader -->
  <div id="pageloader">   
        <div class="loader">
          <img src="images/progress.gif" alt='loader' />
        </div>
   </div>
   <!--End Page loader -->
   
      
   <!--Start Navigation-->
		<header id="header" class="bg-dark">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">

                            <!--Start Logo -->
							<div class="logo-nav">
								<a href="bor2.html">
									<!--<img src="images/logo.png" alt="Company logo" /> -->
								</a>
							</div>
                            <!--End Logo -->

							
							<div class="clear-toggle"></div>
							<div class="row mt-3">
							<div class="d-flex flex-row-reverse">
							<nav class="navbar navbar-expand-lg navbar-dark">
							<div class="container-fluid">
								
								<ul style="font-weight: 600;font-size: 15px;text-transform: uppercase;"  class="navbar-nav me-auto mb-2 mb-lg-0">
									<li class="nav-item">
									<a class="nav-link active" aria-current="page" href="bor2.php">Home</a>
									</li>
									<li  class="nav-item"> <a class="nav-link active" href="rehab.php">Phone Directory</a> </li>
                                    
                                    <li  class="nav-item"> <a class="nav-link active" href="email.php">Email Directory</a> </li>
                                    
                                    
									<li class="nav-item dropdown">
									<a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										Consultant Roster
									</a>
									<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
										<li><a class="dropdown-item" href="doc/Consultant_oncall.htm">Monthly Roster </a></li>
										<li><hr class="dropdown-divider"></li>
										<li><a class="dropdown-item" href="ae.html">Daily On Call Roster</a></li>
										<li><hr class="dropdown-divider"></li>
										<li><a class="dropdown-item" href="ae.html">Medical Officer Roster</a></li>
									
									</ul>
									</li>
									</li>
									
									 <li  class="nav-item"> <a class="nav-link active" href="form.html">Form</a> </li>
									 
								</ul>

							</div>
							</nav>
							</div>
							
		<div class="row">
							
						</div>
					</div>
				</div>
		
			</header>
    <!--End Navigation-->

        <!-- Start Slider
        <section id="home" class="home">
             <div class="slider-overlay"></div>
            <div class="flexslider">
                <ul class="slides scroll">
                    <li class="first">
                        <div class="slider-text-wrapper">  
                           <div class="container">
                                <<div class="big"></div>          
                                <div class="small"></div>
 
                            </div>       
                        </div>
                        <img src="images/slider/2.jpg" alt="">
                    </li>
                    

                </ul>
            </div>
        </section> -->

	<!-- CAROUSEL 
			<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
					  <div class="carousel-inner">
						<div class="slider-overlay"></div>
						  <img src="images/slider/1.jpg" style="height:300px;" class="d-block w-100" alt="...">
						</div> -->
						<!--<div class="carousel-item">
						<div class="slider-overlay"></div>
						  <img src="images/slider/2.jpg" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
						<div class="slider-overlay"></div>
						  <img src="images/slider/2.jpg" class="d-block w-100" alt="...">
						</div>-->
					  </div>
			</div>

		
		
		
          <!-- End Slider  -->
	

	
		  <!--BOR  -->
<?php include("Dashboard/includes/config.php"); ?>
<?php
  $query_showBor = mysqli_query($con,"SELECT * FROM bor ORDER BY Bor_ID DESC LIMIT 1");
  $result_showBor = mysqli_fetch_array($query_showBor);
?>	  
		  
<div class="container">

	 <div class="col-12 mt-5 pt-3">
	&nbsp;
		&nbsp;
		   <center><h2 style="color:black;font-size:20px;"> HOSPITAL WIDE BED OCCUPANCY RATE AS AT <?php echo $result_showBor['Bor_Date']; ?> <?php echo $result_showBor['Bor_Time']; ?>  </h2></center>
		</div> 
		&nbsp;

		<div class="row mb">
	
			<div class="col-6">
				<div class="d-flex flex-column bd-highlight mb-3">
				  <div class="p-2 bd-highlight"><center><span style="font-size:20px;font-weight:700; font-family:Arial">LICENSED BED</span></center></div>
				  <div class="p-2 bd-highlight bg-primary"><center><span style="font-size:15px;font-weight:700; font-family:Arial; color:white">BED CAPACITY:<?php echo $result_showBor['O_Capacity']; ?></span></center></div>
				  <div class="p-2 bd-highlight bg-primary mt-2"><center><span style="font-size:15px;font-weight:700; font-family:Arial; color:white">BED OCCUPIED:<?php echo $result_showBor['O_Occupied']; ?></span></center></div>
				  <div class="p-2 bd-highlight bg-primary mt-2"><center><span style="font-size:15px;font-weight:700; font-family:Arial; color:white">BED AVAILABLE:<?php echo $result_showBor['O_Available']; ?></span></center></div>
				  <div class="p-2 bd-highlight bg-primary mt-2"><center><span style="font-size:15px;font-weight:700; font-family:Arial; color:white">TOTAL BED OCCUPANCY RATE (BOR):<?php echo $result_showBor['O_Rate']; ?>%</span></center></div>
				</div>
			</div>
			<div class="col-6">
				<div class="d-flex flex-column bd-highlight mb-3">
				  <div class="p-2 bd-highlight"><center><span style="font-size:20px;font-weight:700; font-family:Arial">OPERATIONAL BED</span></center></div>
				  <div class="p-2 bd-highlight bg-danger"><center><span style="font-size:15px;font-weight:700; font-family:Arial; color:white">BED CAPACITY:<?php echo $result_showBor['L_Capacity']; ?></span></center></div>
				  <div class="p-2 bd-highlight bg-danger mt-2"><center><span style="font-size:15px;font-weight:700; font-family:Arial; color:white">BED OCCUPIED:<?php echo $result_showBor['L_Occupied']; ?></span></center></div>
				  <div class="p-2 bd-highlight bg-danger mt-2"><center><span style="font-size:15px;font-weight:700; font-family:Arial; color:white">BED AVAILABLE:<?php echo $result_showBor['L_Available']; ?></span></center></div>
				  <div class="p-2 bd-highlight bg-danger mt-2"><center><span style="font-size:15px;font-weight:700; font-family:Arial; color:white">TOTAL BED OCCUPANCY RATE (BOR):<?php echo $result_showBor['L_Rate']; ?>%</span></center></div>
				</div>
			</div>
</div>
</div>
</div>
<!-- testing 

	<div class="col" ></div>
		<div class="d-flex flex-column bd-highlight mb-2">
		<img src="images/trivia.jpg"<a class="nav-link active"  width="700" height="auto"> </a>
	
<!-- poster

			</div>   
		</form> 
	</div>
</div>

	<div class="col-2" ></div>
		<img src="images/5088481.jpg"><a class="nav-link active" href="rehab.php" alt="" id="5088481.png"> </a>
-->

		<div class="row mt-5 bg-danger">.</div>
		
 <marquee> <font color=black><font size=5> <b> LETS WORK TOGETHER EVERYONE TO ACHIEVE HOSPITAL TARGET </b> </font> </marquee>
   <!--End Footer-->

  <a href="#" class="scrollup"> <i class="fa fa-chevron-up"> </i> </a>

    <!--Plugins-->
	<script src="style/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="style/jQuery/jquery-3.6.0.min.js"></script>
	
	<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="js/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript" src="js/jquery.easypiechart.js"></script>
    <script type="text/javascript" src="js/jquery.appear.js"></script>
    <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
   <script type="text/javascript" src="js/custom.js"></script> 
    
 </body>
</html>

	