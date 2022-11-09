<!doctype html>

<head>

    <meta charset="utf-8">
	<title>ONE KLGSH</title>
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">		
		
	<!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      

     <!--styles -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="js/owl-carousel/owl.theme.css" rel="stylesheet">
    <link href="js/owl-carousel/owl.transitions.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    <link rel="stylesheet" href="css/etlinefont.css">
    <link href="css/style.css" type="text/css"  rel="stylesheet"/>
	<link href="css/table.css" type="text/css"  rel="stylesheet"/>

	<body  data-spy="scroll" data-target="#main-menu">
 

  <!--Start Page loader -->
  <div id="pageloader">   
        <div class="loader">
          <img src="images/progress.gif" alt='loader' />
        </div>
   </div>
   <!--End Page loader -->
   
      
   <!--Start Navigation-->
		<header id="header">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							 <!--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu">
								<span class="sr-only">Toggle navigation</span>
								<span class="fa fa-bars"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button> -->
                            <!--Start Logo -->
							<!--<div class="logo-nav">-->
								<a href="index.html">
									<img src="images/logo.png" alt="Company logo" />
								</a>
							</div>
                            <!--End Logo -->
							<div class="clear-toggle">
							</div>
							<div id="main-menu" class="collapse scroll navbar-right">
								<ul class="nav">
                                
									<li class="active"> <a href="#home">Home</a> </li>
									
									<li> <a href="rehab.html">Phone Directory</a> </li>
                                    
                                    <li> <a href="email.html">Email Directory</a> </li>
                                    
                                    <li> <a href="doc/Consultant_oncall.htm" target="_blank">CONSULTANT ROASTER</a></li>
                                    
                                     <li> <a href="form.html">Form</a> </li>
                                   
								    <li> <a href="bor.html">BOR</a> </li>
																	
										
								</ul>
							</div><!-- end main-menu -->
						</div>
					</div>
				</div>
			</header>
    <!--End Navigation-->

      
        <!-- Start Slider  -->
        <section id="home" class="home">
             <div class="slider-overlay"></div>
            <div class="flexslider">
                <ul class="slides scroll">
                    <li class="first">
                        <div class="slider-text-wrapper">  
                           <div class="container">
                                <div class="big"></div>          
                                <div class="small"></div>
 
                            </div>       
                        </div>
                        <img src="images/slider/2.jpg" alt="">
                    </li>
                    

                </ul>
            </div>
        </section>
          <!-- End Slider  -->

           </div> <!-- /.row-->
       </div> <!-- /.container-->
   </footer>
   <!--End Footer-->
   
   <!-- BOR --> 
   
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {


}

.float-left1 {
float:left;
width:45%;
}

.float-right1 {
float:right;
width:45%;
}
div {
  margin-bottom: 7px;
  padding: 2px 6px;
}

.footer1{
 width:100%;
height:10px;
}

.content{
width:100%;
}

.tajuk {

}

.danger {
  background-color:  #ffeb3b;
  border-left: 20px solid  #ffffcc; 
}

.success {
  background-color: #ffeb3b;
  border-left: 20px solid  #ffffcc;
}

.info {
  background-color: #ffeb3b;
  border-left: 20px solid  #ffffcc;
}


.warning {
  background-color: #ffeb3b;
  border-left: 20px solid  #ffffcc;
}




.tajuk {

}
.danger1 {
  background-color:  #4CAF50;
  border-left: 20px solid  #ddffdd; 
}

.success1 {
  background-color: #4CAF50;
  border-left: 20px solid  #ddffdd;
}

.info1 {
  background-color: #4CAF50;
  border-left: 20px solid  #ddffdd;
}


.warning1 {
  background-color: #4CAF50;
  border-left: 20px solid  #ddffdd;
}





</style>
</head>

 <!--<p style="text-align:center;"> <img class = "center" text allign  src="logo.png"  width = "800" height = "250"/></p> -->


 <?php include("Dashboard/includes/config.php"); ?>
<?php
  $query_showBor = mysqli_query($con,"SELECT * FROM bor ORDER BY Bor_ID DESC LIMIT 1");
  $result_showBor = mysqli_fetch_array($query_showBor);
?>
<body>
<div class="container">
	<div class="col">
		<div class="row">
			<div class="col-2"></div>
			<div class="col-4">
				<!-- operation bed -->
				<h2><CENTER></b> <font size=4 face = "Comic sans MS" > HOSPITAL WIDE BED OCCUPANCY RATE AS AT <?php echo $result_showBor['Bor_Date']; ?> <?php echo $result_showBor['Bor_Time']; ?> </b> </CENTER></h2>
				<div class="float-left1">
					<font size=6><div class="tajuk">
					 <p><strong><center> <u> <font face = "Arial" > OPERATIONAL BED</strong></p>
					</div></center> </u>
					
					<font size=6><div class="danger">
					 <p><strong><center>BED CAPACITY:<?php echo $result_showBor['O_Capacity']; ?></strong></p>
					</div></center>

					<div class="success">
					  <p><strong><center>BED OCCUPIED:<?php echo $result_showBor['O_Occupied']; ?></strong></p>
					</div></center>

					<div class="info">
					  <p><strong><center>BED AVAILABLE:<?php echo $result_showBor['O_Available']; ?></strong></p>
					</div></center>

					<div class="warning">
					  <p><strong><center>TOTAL BED OCCUPANCY RATE (BOR):<?php echo $result_showBor['O_Rate']; ?>% </strong></p>
					</div></center>
				</div>
					
			</div>
			<div class="col-4">
			<!--licensed bed -->
				<div class="float-right1">
						<font size=6><div class="tajuk">
						 <p><strong><center> <u> <font face = "Arial" > LICENSED BED</strong> </p>
						</div></center></u>
						
						<font size=6 color=white><div class="danger1">
						 <p><strong><center>BED CAPACITY:<?php echo $result_showBor['L_Capacity']; ?> </strong></p>
						</div></center>

						<div class="success1">
						  <p><strong><center>BED OCCUPIED:<?php echo $result_showBor['L_Occupied']; ?> </strong></p>
						</div></center>

						<div class="info1">
						  <p><strong><center>BED AVAILABLE:<?php echo $result_showBor['L_Available']; ?></strong></p>
						</div></center>

						<div class="warning1">
						  <p><strong><center>TOTAL BED OCCUPANCY RATE (BOR):<?php echo $result_showBor['L_Rate']; ?>% </strong></p>
						</div></center>
				</div>
			</div>
			<div class="col-2"></div>
		</div>
	</div>
</div>
<div class="col-sm-12">
<div class="content">
			

					
</div>
</div>

	
				



</div>
							
</div>
</div>


<div class="footer1"> 
<h1> <marquee> <font color=black><font size=5> <b> LETS WORK TOGETHER EVERYONE TO ACHIEVE HOSPITAL TARGET </b> </font> </marquee> </h1>
</font>
</marquee>
</div>

  <a href="#" class="scrollup"> <i class="fa fa-chevron-up"> </i> </a>

    <!--Plugins-->
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

