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
	<link rel="stylesheet" href="style/bootstrap/css/bootstrap.min.css" media="screen">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
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
   
      
   <!--Start Navigation
		<header id="header">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu">
								<!--<span class="sr-only">Toggle navigation</span> -->
								<!--<span class="fa fa-bars"></span> 
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button> 
                            <!--Start Logo 
							<div class="logo-nav">
								<a href="bor2.html">
									<img src="images/logo.png" alt="Company logo" />
								</a>
							</div> 
                            <!--End Logo -->

							<!-- end main-menu
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
        
                                <div class="small"></div>
 
                            </div>       
                        </div>
                        <img src="images/slider/2.jpg" alt="">
                    </li>
                    

                </ul>
            </div>
        </section>  -->
	 <!--Start Navigation -->
		<header id="header"class="bg-dark" >
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
						
						<!--	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu">
								<span class="sr-only">Toggle navigation</span>
								<span class="fa fa-bars"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
                            <!--Start Logo -->
							<div class="logo-nav">
								<a href="index.html">
									<img src="images/logo.png" alt="Company logo" />
								</a>
							</div>
                            <!--End Logo -->
							<div class="clear-toggle"></div>
							<div class="row mt-3">
							<div class="d-flex flex-row-reverse">
							<nav class="navbar navbar-expand-lg navbar-dark">
							<div class="container-fluid">
								
								<ul style="font-color:red; font-weight: 600;font-size: 15px;text-transform: uppercase;"  class="navbar-nav me-auto mb-2 mb-lg-0">
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
										<li><a class="dropdown-item" href="">Daily On Call Roster</a></li>
										<li><hr class="dropdown-divider"></li>
										<li><a class="dropdown-item" href="">Medical Officer Roster</a></li>
									
									</ul>
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
					
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
	
		  <!-- Button trigger modal -->
		 <div class="container">
			<div class="col">
				<div class="row">
					<form method="post">
						<div class="input-group mb-3 shadow">
						  <input style="background-color: white;color: black;" class="form-control ms-3 mt-3" type="text" name="phoneSearch" placeholder="Search for phone">
						  <button class="btn btn-primary btn-sm mt-3 mb-4" name="searchButton" type="submit"><i class="bi bi-search ps-3 pe-3"></i></button>
						</div>
					  </form>
				</div>
				<div class="row ">
						<?php include("Dashboard/includes/config.php"); ?>
						<?php
							if(isset($_POST['searchButton'])){
								$phoneSearch = $_POST['phoneSearch'];
								
								if($phoneSearch!=''){
								$searchQuery = mysqli_query($con,"SELECT * FROM phone
								WHERE Phone_Name LIKE '%$phoneSearch%' OR Phone_Designation LIKE '%$phoneSearch%'");
								
								while($searchResult = mysqli_fetch_array($searchQuery))
							{
								$fk_dept = $searchResult['FK_Department'];
								$query_department = mysqli_query($con,"SELECT * FROM department WHERE Dept_ID = '$fk_dept'");
								$result_department = mysqli_fetch_array($query_department);
								$department_name = $result_department['Dept_Name'];
						?>      
							<div class="shadow-lg bg-light rounded mb-3 pt-2">
							<div class="row"><span style="font-size: 25px; font-weight: 600;"><?php echo $searchResult['Phone_Name']; ?></span></div>
							<div class="row"><span style="font-size: 15px; font-weight: 400;"><?php echo $department_name; ?> (<?php echo $searchResult['Phone_Designation']; ?>)</span></div>
							<div class="row pt-2">
								<div class="d-flex flex-row bd-highlight mb-3">
									<div class="bd-highlight"><span style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-size: 12px;">Extension </span><span style="color: rgb(80, 80, 80); font-weight: 500; font-size: 14px;"> <?php echo $searchResult['Phone_Ext']; ?></span></div>
									<div class="ps-2 bd-highlight">| <span style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-size: 12px;">Speed Dial </span><span style="color: rgb(80, 80, 80); font-weight: 500; font-size: 14px;"><?php echo $searchResult['Phone_Dial']; ?></span></div>
									<div class="ps-2 bd-highlight">| <span style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-size: 12px;">Email </span><span style="color: rgb(80, 80, 80); font-weight: 500; font-size: 14px;"><?php echo $searchResult['Phone_email']; ?></span></div>
								</div>
							</div>
							</div>
						<?php            
								}
							}
							}
						?>
				</div>

				<p> LEVEL 6 </p> 	
				<div class="row">


						<div class="d-flex flex-row bd-highlight mb-3">
							<div class="p-2 bd-highlight">
								<button style="height:70px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#administrator">
									<span style="font-size:14px">ADMINISTRATION</span>
								</button>
							</div>
							<div class="p-2 bd-highlight">
								<button style="height:70px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#marketing">
									<span style="font-size:14px">MARKETING/ PR</span>
								</button>
							</div>
							<div class="p-2 bd-highlight">
								<button style="height:70px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#finance">
									<span style="font-size:14px">FINANCE</span>
								</button>
							</div>
							<div class="p-2 bd-highlight">
								<button style="height:70px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#hr">
									<span style="font-size:14px">HUMAN RESOURCE</span>
								</button>
							</div>
							<div class="p-2 bd-highlight">
								<button style="height:70px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#it">
									<span style="font-size:14px">INFORMATION TECHNOLOGY</span>
								</button>
							</div>
							<div class="p-2 bd-highlight">
								<button style="height:70px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#nurs">
									<span style="font-size:14px">NURSING ADM
								</button>
							</div>
								<div class="p-2 bd-highlight">
								<button style="height:70px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#quality">
									<span style="font-size:14px">QUALITY<span>
								</button>
							</div>
								<div class="p-2 bd-highlight">
								<button style="height:70px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ic">
									<span style="font-size:14px">INFECTION CONTROL</span>
								</button>
							</div>
							<div class="p-2 bd-highlight">
								<button style="height:70px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cso">
									<span style="font-size:14px">CLINICAL SURVEY</span>
								</button>
							</div>
						</div>


					
				</div>
			</div>
		 </div>



<!-- ADMINISTRATION -->
<div class="modal fade" id="administrator" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog  modal-xl modal-dialog-centered" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADMINISTRATION</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" >
		<div class="container" >
			<div class="row">
				 <table class="table fl-table">
			
			
					<thead>
					   <tr>
							<th>Name</th>
							<th>Designation</th>
							<th>Extension</th>
							<th>Speed Dial</th>

						</tr>
						</thead>
						<tbody>

						<tr>
							<td>En Nor Aidil Ikram</td>
							<td>CEO</td>
							<td>7889</td>
							<td>2000</td>
						  
						</tr>
						<tr>
							<td>Puan Siti Norazwani</td>
							<td>PA CEO</td>
							<td>7885</td>
							<td>-</td>
				  
						</tr>
						 <tr>
							<td>En Mohd Fikri</td>
							<td>Operation Manager</td>
							<td>7978</td>
							<td>-</td>				  
						</tr>
						<tr>
							<td>Siti Salimah</td>
							<td>Admin Executive</td>
							<td>7884</td>
							<td>-</td>
						</tr>
						<tr>
							<td>Sulaiman</td>
							<td>Despatch</td>
							<td>-</td>
							<td>1080</td>					  
						</tr>

					</tbody>
				</table>
			</div>
		</div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- FINANCE -->
<div class="modal fade" id="finance" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FINANCE</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
 
		<div class="container">
			<div class="row">
				 <table class="table fl-table">
					<thead>
					<tr>
						<th scope="col">Name</th>
						<th scope="col">Designation</th>
						<th scope="col">Extension</th>
						<th scope="col">Speed Dial</th>
					</tr>
					</thead>
					<tbody>
					 <tr>
						<td>Puan Nor Fazidah</td>
						<td>Accountant</td>
						<td>7953</td>
						<td>2004</td>
					</tr>
					<tr>
						<td>Lim Woei shan</td>
						<td>Finance Executive</td>
						<td>7948</td>
						<td>-</td>			  
					</tr>
					 <tr>
						<td>Tengku Muhammad Syakir</td>
						<td>Finance Executive</td>
						<td>7950</td>
						<td>-</td>			  
					</tr>
					<tr>
						<td>Masheta/Sainatus</td>
						<td>Senior Finance Clerk</td>
						<td>7951</td>
						<td>-</td>
					</tr>
						<td>Faruqi/ Amirul Hakim</td>
						<td>Credit Control Executive</td>
						<td>7823</td>
						<td>1373</td>				  
					</tr>
						<tr>
						<td>Khairunnajat</td>
						<td>Credit Control Officer</td>
						<td>-</td>
						<td>1371</td>				  
						</tr>
						<tr>
						<td>Hasrul</td>
						<td>Credit Control Officer</td>
						<td>7854</td>
						<td>-</td>				  
						</tr>
						<tr>
						<td>Fahmi Amirul</td>
						<td>Credit Control Clerk</td>
						<td>7833</td>
						<td>-</td>				  
						</tr>
					</tbody>
				</table>
			</div>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- MARKETING / PR -->
<div class="modal fade" id="marketing" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">MARKETING/PR</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

		<div class="container">
			<div class="row">
				 <table class="table fl-table">
					<thead>
					<tr>
						<th scope="col">Name</th>
						<th scope="col">Designation</th>
						<th scope="col">Extension</th>
						<th scope="col">Speed Dial</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>En Mohd Nazmi</td>
						<td>Head of Marketing</td>
						<td>7957</td>
						<td>-</td>
					</tr>
					<tr>
						<td>Pn Nazatul Shima</td>
						<td>Head of Public Relation</td>
						<td>7957</td>
						<td>-</td>
					</tr>
					 <tr>
						<td>Mohd Faizal</td>
						<td>Senior Marketing Executive</td>
						<td>7723</td>
						<td>-</td>
					</tr>
					<tr>
						<td>Zulaikha Jaafar </td>
						<td>Marketing Executive</td>
						<td>7958</td>
						<td>1061</td>			  
					</tr>
					<tr>
						<td>Muhammad Hafiz </td>
						<td>Graphic Designer </td>
						<td>7761</td>
						<td>1068</td>
					</tr>
					<tr>
						<td>Farah Nor Fairus</td>
						<td>Senior Marketing Clerk</td>
						<td>7958</td>
						<td>-</td>
					</tr>

					</tbody>
				</table>
			</div>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- HR -->
<div class="modal fade" id="hr" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">HUMAN RESOURCE</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
 
		<div class="container">
			<div class="row">
				 <table class="table fl-table">
					<thead>
					<tr>
						<th scope="col">Name</th>
						<th scope="col">Designation</th>
						<th scope="col">Extension</th>
						<th scope="col">Speed Dial</th>
					</tr>
					</thead>
					<tbody>
					 <tr>
						<td>Puan Epah</td>
						<td>Head Of HR</td>
						<td>7944</td>
						<td>2006</td>
					</tr>
					<tr>
						<td>Zahanif</td>
						<td>HR Executive</td>
						<td>7946</td>
						<td>-</td>			  
					</tr>
					 <tr>
						<td>Azila Laili</td>
						<td>HR Executive</td>
						<td>7945</td>
						<td>-</td>			  
					</tr>
					 <tr>
						<td>Nazatul Nadia</td>
						<td>HR Executive</td>
						<td>7945</td>
						<td>-</td>			  
					</tr>
					<tr>
						<td>Khikmatul Jannah</td>
						<td>HR Assitant</td>
						<td>7032</td>
						<td>-</td>
					</tr>
					</tbody>
				</table>
			</div>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- IT -->
<div class="modal fade" id="it" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">INFORMATION TECHNOLOGY</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
 
		<div class="container">
			<div class="row">
				 <table class="table fl-table">
					<thead>
					<tr>
						<th scope="col">Name</th>
						<th scope="col">Designation</th>
						<th scope="col">Extension</th>
						<th scope="col">Speed Dial</th>
					</tr>
					</thead>
					<tbody>
					 <tr>
						<td>Puan Nor Asyikin </td>
						<td>Head of IT</td>
						<td>7879</td>
						<td>1063</td>
					</tr>
					<tr>
						<td>Muhammad Naim</td>
						<td>IT Executive</td>
						<td>7954</td>
						<td>1065</td>			  
					</tr>
					 <tr>
						<td>Nur Afiqah</td>
						<td>IT Executive</td>
						<td>7955</td>
						<td>1066</td>			  
					</tr>
					<tr>
						<td>Ameirul Mustaqim </td>
						<td>IT Officer</td>
						<td>7954</td>
						<td>1064 </td>
					</tr>
					</tbody>
				</table>
			</div>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Nur Adm -->
<div class="modal fade" id="nurs" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">NURSING ADMIN</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
 
		<div class="container">
			<div class="row">
				 <table class="table fl-table">
					<thead>
					<tr>
						<th scope="col">Name</th>
						<th scope="col">Designation</th>
						<th scope="col">Extension</th>
						<th scope="col">Speed Dial</th>
					</tr>
					</thead>
					<tbody>
					 <tr>
						<td>Puan Ridzwani</td>
						<td>CNO</td>
						<td>7857</td>
						<td>2003</td>
					</tr>
					<tr>
						<td>Puan Neelavani</td>
						<td>Deputy CNO</td>
						<td>7879</td>
						<td>2005</td>			  
					</tr>
					 <tr>
						<td>Fatin Nabiha</td>
						<td>Nursing Clerk</td>
						<td>7886</td>
						<td>-</td>			  
					</tr>

					</tbody>
				</table>
			</div>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>		
<!-- Quality -->
<div class="modal fade" id="quality" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">QUALITY</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
 
		<div class="container">
			<div class="row">
				 <table class="table fl-table">
					<thead>
					<tr>
						<th scope="col">Name</th>
						<th scope="col">Designation</th>
						<th scope="col">Extension</th>
						<th scope="col">Speed Dial</th>
					</tr>
					</thead>
					<tbody>
					 <tr>
						<td>Muhammad Firdaus</td>
						<td>Quality In Charged </td>
						<td>7852</td>
						<td>-</td>
					</tr>
					</tbody>
				</table>
			</div>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>		

	  <!-- Infection Control-->
<div class="modal fade" id="ic" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">INFECTION CONTROL</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<div class="container">
			<div class="row">
				 <table class="table fl-table">
					<thead>
					<tr>
						<th scope="col">Name</th>
						<th scope="col">Designation</th>
						<th scope="col">Extension</th>
						<th scope="col">Speed Dial</th>
					</tr>
					</thead>
					<tbody>
					 <tr>
						<td>Puan Suhaili</td>
						<td>Infection Control Officer </td>
						<td>N/A</td>
						<td>1052</td>
					</tr>
					 <tr>
						<td>Nur Shahida</td>
						<td>Infection Control Nurse </td>
						<td>7851</td>
						<td>1060</td>
					</tr>
					</tbody>
				</table>
			</div>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>		
	  <!-- CSO -->
<div class="modal fade" id="cso" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">CLINICAL SURVEY</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
 
		<div class="container">
			<div class="row">
				 <table class="table fl-table">
					<thead>
					<tr>
						<th scope="col">Name</th>
						<th scope="col">Designation</th>
						<th scope="col">Extension</th>
						<th scope="col">Speed Dial</th>
					</tr>
					</thead>
					<tbody>
					 <tr>
						<td>Puan Rohadilla</td>
						<td>Clinical Survey Officer </td>
						<td>N/A</td>
						<td>1049</td>
					</tr>
					</tbody>
				</table>
			</div>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>		

		<p> LEVEL 5 </p> 		
		  <!-- Button trigger modal -->
		 <div class="container">
			<div class="row">

				<div class="col-12">
					<div class="d-flex flex-row bd-highlight mb-3">
						<div class="p-2 bd-highlight">
							<button style="height:70px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#surgw">
								<span style="font-size:14px">SURGICAL WARD</span>
							</button>
						</div>
						<div class="p-2 bd-highlight">
							<button style="height:70px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#medw">
								<span style="font-size:14px">MEDICAL WARD</span>
							</button>
						</div>
						<div class="p-2 bd-highlight">
							<button style="height:70px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#nurse">
								<span style="font-size:14px">NURSE INSTRUCTOR</span>
							</button>
						</div>
						</div>

					</div>
				</div>

				
			</div>
		 </div>

<!-- surgical ward -->
<div class="modal fade" id="surgw" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">SURGICAL WARD</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<div class="container">
			<div class="row">
				 <table class="table fl-table">
					<thead>
					   <tr>
							<th>Name</th>
							<th>Designation</th>
							<th>Extension</th>
							<th>Speed Dial</th>

						</tr>
						</thead>
						<tbody>

						<tr>
							<td>Sr Ivana Izzati</td>
							<td>UM Surgical Ward </td>
							<td>7970</td>
							<td>1047</td>
						  
						</tr>
						<tr>
							<td>Counter Nurse A </td>
							<td>SRN</td>
							<td>7967 / 7966</td>
							<td>-</td>
				  
						</tr>
						<tr>
							<td>Counter Nurse B </td>
							<td>SRN</td>
							<td>7964 / 7968</td>
							<td>-</td>				  
						</tr>
						<tr>
							<td>B\O Counter </td>
							<td>Ward Clerk</td>
							<td>7802</td>
							<td>-</td>				  
						</tr>
					</tbody>
				</table>
			</div>
		</div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- medical ward -->
<div class="modal fade" id="medw" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">MEDICAL WARD</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<div class="container">
			<div class="row">
				 <table class="table fl-table">
					<thead>
					   <tr>
							<th>Name</th>
							<th>Designation</th>
							<th>Extension</th>
							<th>Speed Dial</th>

						</tr>
						</thead>
						<tbody>

						<tr>
							<td>Sr Sharil Husna</td>
							<td>UM Medical Ward </td>
							<td>7919</td>
							<td>1041</td>
						  
						</tr>
						<tr>
							<td>Counter Nurse A </td>
							<td>SRN</td>
							<td>7960 / 7961</td>
							<td>-</td>
				  
						</tr>
						<tr>
							<td>Counter Nurse B </td>
							<td>SRN</td>
							<td>7963 / 7962</td>
							<td>-</td>				  
						</tr>
						<tr>
							<td>B\O Counter </td>
							<td>Ward Clerk</td>
							<td>7997 / 7735</td>
							<td>-</td>				  
						</tr>
					</tbody>
				</table>
			</div>
		</div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Nurse Instructor -->
<div class="modal fade" id="nurse" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">NURSE INSTRUCTOR</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<div class="container">
			<div class="row">
				 <table class="table fl-table">
					<thead>
					   <tr>
							<th>Name</th>
							<th>Designation</th>
							<th>Extension</th>
							<th>Speed Dial</th>

						</tr>
						</thead>
						<tbody>

						<tr>
							<td>Sr Lili Murina</td>
							<td>Nurse Instructor </td>
							<td>7911</td>
							<td>-</td>
						  
						</tr>
						<tr>
							<td>Sr Roslina</td>
							<td>Nurse Instructor</td>
							<td>7911</td>
							<td>-</td>
				  
						</tr>
					</tbody>
				</table>
			</div>
		</div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<p> LEVEL 3A </p> 		
		  <!-- Button trigger modal -->
		 <div class="container">
			<div class="row">

				<div class="col-12">
					<div class="d-flex flex-row bd-highlight mb-3">
						<div class="p-2 bd-highlight">
							<button style="height:70px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#matw">
								<span style="font-size:14px">MATERNITY WARD</span>
							</button>
						</div>
						<div class="p-2 bd-highlight">
							<button style="height:70px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paedw">
								<span style="font-size:14px">PAEDIATRIC WARD</span>
							</button>
						</div>
						</div>

					</div>
				</div>

				
			</div>
		 </div>

<!-- maternity ward -->
<div class="modal fade" id="matw" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">MATERNITY WARD</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<div class="container">
			<div class="row">
				 <table class="table fl-table">
					<thead>
					   <tr>
							<th>Name</th>
							<th>Designation</th>
							<th>Extension</th>
							<th>Speed Dial</th>

						</tr>
						</thead>
						<tbody>

						<tr>
							<td>Sr Rohana</td>
							<td>Unit Manager</td>
							<td>7931</td>
							<td>1044</td>
						  
						</tr>
						<tr>
							<td>Counter Nurse</td>
							<td>SRN</td>
							<td>7933\ 7934</td>
							<td>-</td>
				  
						</tr>
						<tr>
							<td>B\O Counter </td>
							<td>Ward Clerk</td>
							<td>7810</td>
							<td>-</td>				  
						</tr>
					</tbody>
				</table>
			</div>
		</div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- paed ward -->
<div class="modal fade" id="paedw" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">PAEDIATRIC WARD</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<div class="container">
			<div class="row">
				 <table class="table fl-table">
					<thead>
					   <tr>
							<th>Name</th>
							<th>Designation</th>
							<th>Extension</th>
							<th>Speed Dial</th>

						</tr>
						</thead>
						<tbody>

						<tr>
							<td>Sr Aqilah</td>
							<td>UM Medical Ward </td>
							<td>7930</td>
							<td>1051</td>
						  
						</tr>
						<tr>
							<td>Counter Nurse </td>
							<td>SRN</td>
							<td>7928 / 7929</td>
							<td>-</td>
				  
						</tr>
						<tr>
							<td>B\O Counter </td>
							<td>Ward Clerk</td>
							<td>7927</td>
							<td>-</td>				  
						</tr>
					</tbody>
				</table>
			</div>
		</div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<p> LEVEL 3 </p> 		
		  <!-- Button trigger modal -->
		 <div class="container">
			<div class="row">

				<div class="col-12">
					<div class="d-flex flex-row bd-highlight mb-3">
						<div class="p-2 bd-highlight">
							<button style="height:70px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#clinic">
								<span style="font-size:14px">SPEACIALIST CLINIC</span>
							</button>
						</div>
						<div class="p-2 bd-highlight">
							<button style="height:70px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ot">
								<span style="font-size:14px">OPERATION THEATHER</span>
							</button>
							</div>
						<div class="p-2 bd-highlight">
							<button style="height:70px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#dw">
								<span style="font-size:14px">DAY WARD</span>
							</button>
							</div>
						<div class="p-2 bd-highlight">
							<button style="height:70px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#icu">
								<span style="font-size:14px">ICU \ HDU</span>
							</button>
							</div>

						</div>
						</div>
						</div>
						</div>

					</div>
				</div>

				
			</div>
		 </div>

<!-- speacilist clinic  -->
<div class="modal fade" id="clinic" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">SPEACIALIST CLINIC</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<div class="container">
			<div class="row">
				 <table class="table fl-table">
					<thead>
					   <tr>
							<th>Name</th>
							<th>Disicpline</th>
							<th>Extension</th>
							<th>Speed Dial</th>
							<th>Clinic Assistant</th>

						</tr>
						</thead>
						<tbody>

						<tr>
							<td>Datin Dr Lilian</td>
							<td>OBS & Gynae </td>
							<td>6901</td>
							<td>1130</td>
							<td>7901(Fathirah)</td>
						  
						</tr>
						<tr>
							<td>Dr Vijayavel</td>
							<td>OBS & Gynae </td>
							<td>6902</td>
							<td>1115</td>
							<td>7902 (Fadhilah)</td>
				  
						</tr>
						<tr>
							<td>Dr Raymond</td>
							<td>Chest Physician</td>
							<td>6900</td>
							<td>1185</td>	
                            <td>7900(Aisyahtul)</td>							
						</tr>
						<tr>
							<td>Dr Rosni </td>
							<td>Paediatrician</td>
							<td>6903</td>
							<td>1113</td>	
                            <td>7903(Safurah)</td>							
						</tr>
						<tr>
							<td>Dr Ooi Hooi Leng</td>
							<td>Paediatrician</td>
							<td>6904</td>
							<td>1125</td>	
                            <td>7904(Asyuha)</td>							
						</tr>
						<tr>
							<td>Dr Vanitha </td>
							<td>Paediatrician</td>
							<td>6909</td>
							<td>1136</td>	
                            <td>7909(Shawaiti)</td>							
						</tr>
					</tbody>
				</table>
			</div>
		</div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- ot -->
<div class="modal fade" id="ot" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">OPERATION THEATHER</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<div class="container">
			<div class="row">
				 <table class="table fl-table">
					<thead>
					   <tr>
							<th>Name</th>
							<th>Designation</th>
							<th>Extension</th>
							<th>Speed Dial</th>

						</tr>
						</thead>
						<tbody>

						<tr>
							<td>Sr Ziana</td>
							<td>UM OT </td>
							<td>7918</td>
							<td>1058</td>
						  
						</tr>
						<tr>
							<td>Counter Nurse </td>
							<td>SRN</td>
							<td>7910 \ 7912</td>
							<td>-</td>
				  
						</tr>
						<tr>
							<td>Counter Nurse (Surg)</td>
							<td>SRN</td>
							<td>7913 \ 7914</td>
							<td>-</td>
				  
						</tr>
						<tr>
							<td>CSSD (Inside)</td>
							<td>SRN</td>
							<td>7924</td>
							<td>-</td>
				  
						</tr>
						<tr>
							<td>CSSD (Outside)</td>
							<td>SRN</td>
							<td>7915</td>
							<td>-</td>
				  
						</tr>
						<tr>
							<td>Dr Nik Marzuki</td>
							<td>Anaesth</td>
							<td>7883</td>
							<td>1106</td>
				  
						</tr>
						<tr>
							<td>Dr Zanariah</td>
							<td>Anaesth</td>
							<td>7890</td>
							<td>1107</td>
				  
						</tr>
						<tr>
							<td>Dr Rosliza</td>
							<td>Anaesth</td>
							<td>7890</td>
							<td>1129</td>
				  
						</tr>
						<tr>
							<td>Dr Tham Li Yeen</td>
							<td>Anaesth</td>
							<td>7890</td>
							<td>1103</td>
				  
						</tr>
					</tbody>
				</table>
			</div>
		</div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- day ward -->
<div class="modal fade" id="dw" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">DAY WARD</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<div class="container">
			<div class="row">
				 <table class="table fl-table">
					<thead>
					   <tr>
							<th>Name</th>
							<th>Designation</th>
							<th>Extension</th>
							<th>Speed Dial</th>

						</tr>
						</thead>
						<tbody>

						<tr>
							<td>Sr Thevi</td>
							<td>UM Day Ward</td>
							<td>7763</td>
							<td>1050</td>
						  
						</tr>
						<tr>
							<td>Counter Nurse </td>
							<td>SRN</td>
							<td>7916</td>
							<td>-</td>
				  
						</tr>
						<tr>
							<td>B\O Counter</td>
							<td>Ward Clerk</td>
							<td>7917</td>
							<td>-</td>
				  
						</tr>
						<tr>
							<td>Endoscopy Room</td>
							<td>SRN</td>
							<td>7923</td>
							<td>-</td>				  
						</tr>
						
					</tbody>
				</table>
			</div>
		</div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- icu -->
<div class="modal fade" id="icu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ICU/HDU</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<div class="container">
			<div class="row">
				 <table class="table fl-table">
					<thead>
					   <tr>
							<th>Name</th>
							<th>Designation</th>
							<th>Extension</th>
							<th>Speed Dial</th>

						</tr>
						</thead>
						<tbody>

						<tr>
							<td>Sr Maryani</td>
							<td>UM ICU / HDU</td>
							<td>7922</td>
							<td>1062</td>
						  
						</tr>
						<tr>
							<td>Counter Nurse(ICU)</td>
							<td>SRN</td>
							<td>7920</td>
							<td>-</td>
				  
						</tr>
						<tr>
							<td>Counter Nurse(HDU)</td>
							<td>SRN</td>
							<td>7921</td>
							<td>-</td>
			  
						</tr>
						
					</tbody>
				</table>
			</div>
		</div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<p> LEVEL 2 </p> 		
		  <!-- Button trigger modal -->
		 <div class="container">
			<div class="row">

				<div class="col-12">
					<div class="d-flex flex-row bd-highlight mb-3">
						<div class="p-2 bd-highlight">
							<button style="height:70px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#clinicc">
								<span style="font-size:14px">SPEACIALIST CLINIC</span>
							</button>
						</div>
						<div class="p-2 bd-highlight">
							<button style="height:70px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#lab">
								<span style="font-size:14px">LABORATORY</span>
							</button>
							</div>
						<div class="p-2 bd-highlight">
							<button style="height:70px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#spd">
								<span style="font-size:14px">SPD / CATHLAB</span>
							</button>
							</div>
						<div class="p-2 bd-highlight">
							<button style="height:70px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#wellness">
								<span style="font-size:14px">WELLNESS</span>
							</button>
							</div>
						<div class="p-2 bd-highlight">
							<button style="height:70px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#dialysis">
								<span style="font-size:14px">DIALYSIS</span>
							</button>
							</div>
						<div class="p-2 bd-highlight">
							<button style="height:70px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#rehab">
								<span style="font-size:14px">PHYSIO / REHAB </span>
							</button>
							</div>
						<div class="p-2 bd-highlight">
							<button style="height:70px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#conference">
								<span style="font-size:14px">CONFERENCE ROOM </span>
							</button>
							</div>
						</div>
						</div>
						</div>
						</div>

					</div>
				</div>

				
			</div>
		 </div>

<!-- speacilist clinic  -->
<div class="modal fade" id="clinicc" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">SPEACIALIST CLINIC</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<div class="container">
			<div class="row">
				 <table class="table fl-table">
					<thead>
					   <tr>
							<th>Name</th>
							<th>Disicpline</th>
							<th>Extension</th>
							<th>Speed Dial</th>
							<th>Clinic Assistant</th>

						</tr>
						</thead>
						<tbody>

						<tr>
							<td>Dr Manohar</td>
							<td>Gen Surgeon </td>
							<td>6873</td>
							<td>1110</td>
							<td>7973(Mahirah)</td>
						  
						</tr>
						<tr>
							<td>Dr Hue</td>
							<td>Gen Surgeon </td>
							<td>6872</td>
							<td>1104</td>
							<td>7872(Munah)</td>
				  
						</tr>
						<tr>
							<td>Dr Husin </td>
							<td>Gen Surgeon</td>
							<td>6870</td>
							<td>1108</td>	
                            <td>7870(Angelina)</td>							
						</tr>
						<tr>
							<td>Dr Sri Subanesh </td>
							<td>Ortho Surgeon</td>
							<td>6867</td>
							<td>1110</td>	
                            <td>7867(Shuhadah)</td>							
						</tr>
						<tr>
							<td>Dr Thi</td>
							<td>Urologist</td>
							<td>6868</td>
							<td>1121</td>	
                            <td>7868(Suhana)</td>							
						</tr>
						<tr>
							<td>Dr Mazita </td>
							<td>ENT</td>
							<td>6865</td>
							<td>1105</td>	
                            <td>7865(Ramiza)</td>							
						</tr>
						<tr>
							<td>Dr Vincent </td>
							<td>ENT</td>
							<td>6864</td>
							<td>1109</td>	
                            <td>7864(Liyana)</td>							
						</tr>
						<tr>
							<td>Dr Fauzi </td>
							<td>Ophthalmologist</td>
							<td>7942</td>
							<td>1116</td>	
                            <td>7998(Asmaliza)</td>							
						</tr>
						<tr>
							<td>Dr Zurina </td>
							<td>Ophthalmologist</td>
							<td>7942</td>
							<td>1117</td>	
                            <td>7998(Amy)</td>							
						</tr>
						<tr>
							<td>Dr Lim Eu Jin</td>
							<td>Cardiologist</td>
							<td>6875</td>
							<td>1118</td>	
                            <td>7875(Anihaniza)</td>							
						</tr>
						<tr>
							<td>Dr Ravinderjet </td>
							<td>Cardiologist</td>
							<td>6896</td>
							<td>1119</td>	
                            <td>7896(Amira)</td>							
						</tr>


					</tbody>
				</table>
			</div>
		</div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- lab  -->
<div class="modal fade" id="lab" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">LABORATORY</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<div class="container">
			<div class="row">
				 <table class="table fl-table">
					<thead>
					   <tr>
							<th>Name</th>
							<th>Disicpline</th>
							<th>Extension</th>
							<th>Speed Dial</th>
							

						</tr>
						</thead>
						<tbody>

						<tr>
							<td>Pn Siti</td>
							<td>Head LAB </td>
							<td>7973</td>
							<td>1059</td>
						
						  
						</tr>
						<tr>
							<td>Counter LAB</td>
							<td>Scientics Laboratory </td>
							<td>7897 / 7899</td>
							<td>N/A</td>				  
						</tr>
					</tbody>
				</table>
			</div>
		</div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- spd -->
<div class="modal fade" id="spd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">SPD / CATHLAB</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<div class="container">
			<div class="row">
				 <table class="table fl-table">
					<thead>
					   <tr>
							<th>Name</th>
							<th>Disicpline</th>
							<th>Extension</th>
							<th>Speed Dial</th>
						</tr>
						</thead>
						<tbody>

						<tr>
							<td>Sr Siti</td>
							<td>UM SPD </td>
							<td>7755</td>
							<td>1045</td>						  
						</tr>
						<tr>
							<td>Cathlab</td>
							<td>SRN</td>
							<td>7952</td>
							<td>-</td>				  
						</tr>
						<tr>
							<td>Treatment Room</td>
							<td>SRN</td>
							<td>7753</td>
							<td>-</td>				  
						</tr>
						<tr>
							<td>Treadmill Room</td>
							<td>SRN</td>
							<td>7754</td>
							<td>-</td>				  
						</tr>
						<tr>
							<td>Counter Nurse</td>
							<td>SRN</td>
							<td>7887</td>
							<td>-</td>				  
						</tr>
						<tr>
							<td>ECHO Room</td>
							<td>SRN</td>
							<td>7756</td>
							<td>-</td>				  
						</tr>

					</tbody>
				</table>
			</div>
		</div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>		
<!-- wellness  -->
<div class="modal fade" id="wellness" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">WELLNESS</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<div class="container">
			<div class="row">
				 <table class="table fl-table">
					<thead>
					   <tr>
							<th>Name</th>
							<th>Disicpline</th>
							<th>Extension</th>
							<th>Speed Dial</th>
							

						</tr>
						</thead>
						<tbody>

						<tr>
							<td>Dr Shobana</td>
							<td>HOS Wellness </td>
							<td>7854</td>
							<td>1163</td>
						</tr>
						<tr>
							<td>Rozina / Rima </td>
							<td>Wellness Clerk</td>
							<td>7826</td>
							<td>-</td>				  
						</tr>
						<tr>
							<td>Wellness Doc Room </td>
							<td>SRN</td>
							<td>7882/7877</td>
							<td>-</td>				  
						</tr>
					</tbody>
				</table>
			</div>
		</div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>	
<!-- dialysis  -->
<div class="modal fade" id="dialysis" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">DIALYSIS</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<div class="container">
			<div class="row">
				 <table class="table fl-table">
					<thead>
					   <tr>
							<th>Name</th>
							<th>Disicpline</th>
							<th>Extension</th>
							<th>Speed Dial</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>Sr Liyana</td>
							<td>UM Dialysis</td>
							<td>7971</td>
							<td>1057</td>
						</tr>
						<tr>
							<td>Counter Nurse </td>
							<td>SRN</td>
							<td>7895 / 7892 / 7991</td>
							<td>-</td>				  
						</tr>
						<tr>
							<td>B\O Counter</td>
							<td>Cashier</td>
							<td>7894</td>
							<td>-</td>				  
						</tr>
					</tbody>
				</table>
			</div>
		</div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>	
<!-- rehab -->
<div class="modal fade" id="rehab" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">PHYSIOTHERAPHY / REHAB</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<div class="container">
			<div class="row">
				 <table class="table fl-table">
					<thead>
					   <tr>
							<th>Name</th>
							<th>Disicpline</th>
							<th>Extension</th>
							<th>Speed Dial</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>En Amirul </td>
							<td>HOS Physio</td>
							<td>7893</td>
							<td>1081</td>
						</tr>
						<tr>
							<td>Counter</td>
							<td>Physiotherapist</td>
							<td>7891</td>
							<td>-</td>				  
						</tr>
					</tbody>
				</table>
			</div>
		</div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>			
<!-- conference   -->
<div class="modal fade" id="conference" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">CONFERENCE ROOM</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<div class="container">
			<div class="row">
				 <table class="table fl-table">
					<thead>
					   <tr>
							<th>Name</th>
							<th>Extension</th>
						</tr>
						</thead>
						<tbody>

						<tr>
							<td>Conference Room</td>
							<td>7972 / 7027 </td>

					</tbody>
				</table>
			</div>
		</div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>			
<p> LEVEL 1 </p> 		
		  <!-- Button trigger modal -->
		 <div class="container">
			<div class="row">

				<div class="col-12">
					<div class="d-flex flex-row bd-highlight mb-3">
						<div class="p-2 bd-highlight">
							<button style="height:70px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cliniccc">
								<span style="font-size:14px">SPEACIALIST CLINIC</span>
							</button>
						</div>
						<div class="p-2 bd-highlight">
							<button style="height:70px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#did">
								<span style="font-size:14px">DID</span>
							</button>
							</div>
						<div class="p-2 bd-highlight">
							<button style="height:70px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#diet">
								<span style="font-size:14px">DIET</span>
							</button>
							</div>
						<div class="p-2 bd-highlight">
							<button style="height:70px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#medrec">
								<span style="font-size:14px">MEDICAL RECORD</span>
							</button>
							</div>
						<div class="p-2 bd-highlight">
							<button style="height:70px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#phar">
								<span style="font-size:14px">PHARMACY</span>
							</button>
							</div>
						<div class="p-2 bd-highlight">
							<button style="height:70px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cc">
								<span style="font-size:14px">CREDIT CONTROL </span>
							</button>
							</div>
						<div class="p-2 bd-highlight">
							<button style="height:70px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#gl">
								<span style="font-size:14px">GL / ADMISSION </span>
							</button>
							</div>
						<div class="p-2 bd-highlight">
							<button style="height:70px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ae">
								<span style="font-size:14px"> ACCIDENT & EMERGENCY </span>
							</button>
							</div>
						<div class="p-2 bd-highlight">
							<button style="height:70px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cs">
								<span style="font-size:14px">CUSTOMER SERVICE </span>
							</button>
							</div>
						<div class="p-2 bd-highlight">
							<button style="height:70px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#bo">
								<span style="font-size:14px">BUSINESS OFFICE </span>
							</button>
							</div>	
						</div>
						</div>
						</div>
						</div>

					</div>
				</div>

				
			</div>
		 </div>

<!-- speacilist clinic  -->
<div class="modal fade" id="cliniccc" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">SPEACIALIST CLINIC</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<div class="container">
			<div class="row">
				 <table class="table fl-table">
					<thead>
					   <tr>
							<th>Name</th>
							<th>Disicpline</th>
							<th>Extension</th>
							<th>Speed Dial</th>
							<th>Clinic Assistant</th>

						</tr>
						</thead>
						<tbody>

						<tr>
							<td>Dr Anil</td>
							<td>Physician </td>
							<td>6859</td>
							<td>1102</td>
							<td>7859(Syaqirin)</td>
						  
						</tr>
						<tr>
							<td>Dr Khor</td>
							<td>Physician </td>
							<td>6860</td>
							<td>1101</td>
							<td>7860(Syaza)</td>
				  
						</tr>
						<tr>
							<td>Dr Lim Choo Gee</td>
							<td>Physician</td>
							<td>6872</td>
							<td>1134</td>	
                            <td>7872(Fauziah)</td>							
						</tr>
						<tr>
							<td>Dr Asmah</td>
							<td>OBS & Gynae</td>
							<td>6861</td>
							<td>1124</td>	
                            <td>7861(Ashikin)</td>							
						</tr>
						<tr>
							<td>Dr Yazid</td>
							<td>Ortho Surgeon</td>
							<td>6881</td>
							<td>1149</td>	
                            <td>7881(Amira)</td>							
						</tr>
						<tr>
							<td>Dr Jee Shir Li </td>
							<td>General Surgeon</td>
							<td>6832</td>
							<td>1126</td>	
                            <td>7832(Linda)</td>							
						</tr>
					</tbody>
				</table>
			</div>
		</div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- did  -->
<div class="modal fade" id="did" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">DID</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<div class="container">
			<div class="row">
				 <table class="table fl-table">
					<thead>
					   <tr>
							<th>Name</th>
							<th>Designation</th>
							<th>Extension</th>
							<th>Speed Dial</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>En Hafiz</td>
							<td>HOS DID</td>
							<td>7840</td>
							<td>1054</td>
						</tr>
						<tr>
							<td>Dr Hamzah </td>
							<td>Radiologist</td>
							<td>7845</td>
							<td>1127</td>				  
						</tr>
						<tr>
							<td>Dr Anisha</td>
							<td>Radiologist</td>
							<td>7874</td>
							<td>1148</td>				  
						</tr>
						<tr>
							<td>Counter X-Ray</td>
							<td>Radiographer</td>
							<td>7843/7844</td>
							<td>-</td>				  
						</tr>
						<tr>
							<td>On call Room</td>
							<td>N/A</td>
							<td>7842</td>
							<td>-</td>				  
						</tr>
						<tr>
							<td>MRI</td>
							<td>N/A</td>
							<td>7841</td>
							<td>-</td>				  
						</tr>
						<tr>
							<td>CT Scan</td>
							<td>N/A</td>
							<td>7839</td>
							<td>-</td>				  
						</tr>
					</tbody>
				</table>
			</div>
		</div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>	

<!-- diet  -->
<div class="modal fade" id="diet" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">DIETETIC</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<div class="container">
			<div class="row">
				 <table class="table fl-table">
					<thead>
					   <tr>
							<th>Name</th>
							<th>Designation</th>
							<th>Extension</th>
							<th>Speed Dial</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>Ms Louisa</td>
							<td>Dietian</td>
							<td>7762</td>
							<td>1055</td>
						</tr>
						<tr>
							<td>Shahirah </td>
							<td>Supervisor</td>
							<td>7762</td>
							<td>-</td>				  
						</tr>
						<tr>
							<td>Diet Aide Kitchen</td>
							<td></td>
							<td>7836</td>
							<td>-</td>				  
						</tr>
					</tbody>
				</table>
			</div>
		</div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>	
<!--medical record  -->
<div class="modal fade" id="medrec" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">MEDICAL RECORD</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<div class="container">
			<div class="row">
				 <table class="table fl-table">
					<thead>
					   <tr>
							<th>Name</th>
							<th>Designation</th>
							<th>Extension</th>
							<th>Speed Dial</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>Pn Asyikin</td>
							<td>Head Med Record</td>
							<td>7812</td>
							<td>1063</td>
						</tr>
						<tr>
							<td>Khadijah</td>
							<td>In charged</td>
							<td>7812</td>
							<td>-</td>				  
						</tr>
						<tr>
							<td>En Yazid / Nathan / Ira</td>
							<td>Med Rec</td>
							<td>7811</td>
							<td>-</td>				  
						</tr>
					</tbody>
				</table>
			</div>
		</div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>	
<!--phar -->
<div class="modal fade" id="phar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">PHARMACY</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<div class="container">
			<div class="row">
				 <table class="table fl-table">
					<thead>
					   <tr>
							<th>Name</th>
							<th>Designation</th>
							<th>Extension</th>
							<th>Speed Dial</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>Ms Tan win Win</td>
							<td>Head Phar</td>
							<td>7850</td>
							<td>2020</td>
						</tr>
						<tr>
							<td>Phar Counter</td>
							<td>Outpatient</td>
							<td>7848</td>
							<td>-</td>				  
						</tr>
						<tr>
							<td>Phar Counter</td>
							<td>In Patient</td>
							<td>7849</td>
							<td>-</td>				  
						</tr>
						<tr>
							<td>Pharmacy Room</td>
							<td></td>
							<td>7718</td>
							<td>-</td>				  
						</tr>
						<tr>
							<td>Phar Discharge</td>
							<td></td>
							<td>7843</td>
							<td>-</td>				  
						</tr>
						<tr>
							<td>Phar Store</td>
							<td></td>
							<td>7853</td>
							<td>-</td>				  
						</tr>
						<tr>
							<td>Phar Counselling</td>
							<td></td>
							<td>7847</td>
							<td>-</td>				  
						</tr>
						<tr>
							<td> B\O Counter </td>
							<td>Cashiert</td>
							<td>7846</td>
							<td>-</td>				  
						</tr>
				
					</tbody>
				</table>
			</div>
		</div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>	
<!--credit control 
<div class="modal fade" id="cc" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">CREDIT CONTROL</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<div class="container">
			<div class="row">
				 <table class="table fl-table">
					<thead>
					   <tr>
							<th>Name</th>
							<th>Designation</th>
							<th>Extension</th>
							<th>Speed Dial</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>Pn Liyana</td>
							<td>Accountant</td>
							<td>7953</td>
							<td>2004</td>
						</tr>
						<tr>
							<td>Hotline CC</td>
							<td></td>
							<td>1373</td>
							<td></td>				  
						</tr>
						<tr>
							<td>Faruqi</td>
							<td>Executive</td>
							<td>7823</td>
							<td>1373</td>				  
						</tr>
						<tr>
							<td>Najat</td>
							<td>Executive</td>
							<td>7726</td>
							<td>1371</td>				  
						</tr>
						<tr>
							<td>Hasrul</td>
							<td>Executive</td>
							<td>7012</td>
							<td></td>				  
						</tr>
					</tbody>
				</table>
			</div>
		</div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>	-->

<!--gl -->
<div class="modal fade" id="gl" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">GL \ ADMISSION</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<div class="container">
			<div class="row">
				 <table class="table fl-table">
					<thead>
					   <tr>
							<th>Name</th>
							<th>Designation</th>
							<th>Extension</th>
							<th>Speed Dial</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>Ikmal Mardiha</td>
							<td>Admission</td>
							<td>7734</td>
							<td>-</td>
						</tr>
						<tr>
							<td>Azira</td>
							<td>Admission</td>
							<td>7724</td>
							<td>-</td>				  
						</tr>
						<tr>
							<td>Nazrin</td>
							<td>GL / Insurance</td>
							<td>7733</td>
							<td>-</td>				  
						</tr>
						<tr>
							<td>Ezahatul</td>
							<td>GL / Insurance</td>
							<td>7828</td>
							<td>-</td>				  
						</tr>
					</tbody>
				</table>
			</div>
		</div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>	
<!--gl -->
<div class="modal fade" id="gl" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">GL \ ADMISSION</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<div class="container">
			<div class="row">
				 <table class="table fl-table">
					<thead>
					   <tr>
							<th>Name</th>
							<th>Designation</th>
							<th>Extension</th>
							<th>Speed Dial</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>Ikmal Mardiha</td>
							<td>Admission</td>
							<td>7734</td>
							<td>-</td>
						</tr>
						<tr>
							<td>Azira</td>
							<td>Admission</td>
							<td>7724</td>
							<td>-</td>				  
						</tr>
						<tr>
							<td>Nazrin</td>
							<td>GL / Insurance</td>
							<td>7733</td>
							<td>-</td>				  
						</tr>
						<tr>
							<td>Ezahatul</td>
							<td>GL / Insurance</td>
							<td>7828</td>
							<td>-</td>				  
						</tr>
					</tbody>
				</table>
			</div>
		</div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>	
<!--ae -->
<div class="modal fade" id="ae" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ACCIDENT & EMERGENCY</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<div class="container">
			<div class="row">
				 <table class="table fl-table">
					<thead>
					   <tr>
							<th>Name</th>
							<th>Designation</th>
							<th>Extension</th>
							<th>Speed Dial</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>Sr Ramlah</td>
							<td>UM A&E</td>
							<td>7818</td>
							<td></td>
						</tr>
						<tr>
							<td>Yellow Counter</td>
							<td>SRN</td>
							<td>7814</td>
							<td>-</td>				  
						</tr>
						<tr>
							<td>Triage Counter</td>
							<td>SRN</td>
							<td>7819</td>
							<td>-</td>				  
						</tr>
						<tr>
							<td>Emergency No</td>
							<td>-</td>
							<td>7999</td>
							<td>-</td>				  
						</tr>
						<tr>
							<td>Hanizman</td>
							<td>Ambulan Driver</td>
							<td>-</td>
							<td>1085</td>				  
						</tr>
						<tr>
							<td>B\O A&E </td>
							<td>Cashier</td>
							<td>7822 / 7817 </td>
							<td>-</td>				  
						</tr>
						<tr>
							<td>Dr Chalvantharan </td>
							<td>Medical Officer</td>
							<td>7820</td>
							<td>2010</td>				  
						</tr>					
						<tr>
							<td>Dr Sudha Rawat </td>
							<td>Medical Officer</td>
							<td>7821 </td>
							<td>1152</td>				  
						</tr>
						<tr>
							<td>Dr Nor Aina </td>
							<td>Medical Officer</td>
							<td>7821 </td>
							<td>1151</td>				  
						</tr>
						<tr>
							<td>Dr Hari </td>
							<td>MO</td>
							<td>7821 </td>
							<td>1153</td>				  
						</tr>
						<tr>
							<td>Dr Muzafariman</td>
							<td>Medical Officer</td>
							<td>7821 </td>
							<td>1154</td>				  
						</tr>
						<tr>
							<td>Dr Imran</td>
							<td>Medical Officer</td>
							<td>7821 </td>
							<td>1155</td>				  
						</tr>
							<tr>
							<td>Dr Amran</td>
							<td>Medical Officer</td>
							<td>7821 </td>
							<td>1166</td>				  
						</tr>
						<tr>
							<td>Sr Susila </td>
							<td>UM Night</td>
							<td>7818 </td>
							<td>1040</td>				  
						</tr>
						<tr>
							<td>Sr Kartini</td>
							<td>UM Night</td>
							<td>7818 </td>
							<td>1042</td>				  
						</tr>
					</tbody>
				</table>
			</div>
		</div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>	
<!--cs-->
<div class="modal fade" id="cs" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">CUSTOMER SERVICE</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<div class="container">
			<div class="row">
				 <table class="table fl-table">
					<thead>
					   <tr>
							<th>Name</th>
							<th>Designation</th>
							<th>Extension</th>
							<th>Speed Dial</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>Pn Azlina</td>
							<td>CS Manager</td>
							<td>7751</td>
							<td></td>
						</tr>
						<tr>
							<td>Rabiatul Husna</td>
							<td>CS Executive</td>
							<td>7751</td>
							<td></td>				  
						</tr>
						<tr>
							<td>Rashadan</td>
							<td>CS Officer</td>
							<td>7700</td>
							<td></td>				  
						</tr>
						<tr>
							<td>Receptionist</td>
							<td>Customer Service</td>
							<td>7700</td>
							<td></td>				  
						</tr>
						<tr>
							<td>Subra</td>
							<td>Operator</td>
							<td>0</td>
							<td>1234</td>				  
						</tr>
						<tr>
							<td>Hanna</td>
							<td>Operator</td>
							<td>0</td>
							<td>1235</td>				  
						</tr>
						<tr>
							<td>Batma</td>
							<td>Operator</td>
							<td>0</td>
							<td>1440</td>				  
						</tr>
						<tr>
							<td>Faizal</td>
							<td>Operator</td>
							<td>0</td>
							<td>1111</td>				  
						</tr>
						<tr>
							<td>Subha</td>
							<td>Operator</td>
							<td>0</td>
							<td>1112</td>				  
						</tr>
						<tr>
							<td>Ain Najiha</td>
							<td>Operator</td>
							<td>0</td>
							<td>1460</td>				  
						</tr>
					</tbody>
				</table>
			</div>
		</div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>	
<!--BO -->
<div class="modal fade" id="bo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">BUSINESS OFFICE</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<div class="container">
			<div class="row">
				 <table class="table fl-table">
					<thead>
					   <tr>
							<th>Name</th>
							<th>Designation</th>
							<th>Extension</th>
							<th>Speed Dial</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>Pn Azean </td>
							<td>HOS Bus. Office</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>Nazatul Shima</td>
							<td>Senior Clerk</td>
							<td>7831</td>
							<td></td>				  
						</tr>
						<tr>
							<td>Noraini</td>
							<td>Senior Clerk</td>
							<td>7830</td>
							<td>1067</td>				  
						</tr>
						<tr>
							<td>Hayati</td>
							<td>Senior Clerk</td>
							<td>7025</td>
							<td></td>				  
						</tr>
						<tr>
							<td>Centralize Billing</td>
							<td>In Patient</td>
							<td>7830/ 2917</td>
							<td></td>				  
						</tr>
					</tbody>
				</table>
			</div>
		</div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>	
<p> LEVEL B1 </p> 		
		  <!-- Button trigger modal -->
		 <div class="container">
			<div class="row">

				<div class="col-12">
					<div class="d-flex flex-row bd-highlight mb-3">
						<div class="p-2 bd-highlight">
							<button style="height:70px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pur">
								<span style="font-size:14px">PURCHASING</span>
							</button>
						</div>
						<div class="p-2 bd-highlight">
							<button style="height:70px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#os">
								<span style="font-size:14px">OUTSOURCE</span>
							</button>
						</div>
						<div class="p-2 bd-highlight">
							<button style="height:70px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#linen">
								<span style="font-size:14px">LINEN</span>
							</button>
						</div>
						<div class="p-2 bd-highlight">
							<button style="height:70px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#me">
								<span style="font-size:14px">MAINTENANCE & ENGINEERING</span>
							</button>
						</div>
						</div>

					</div>
				</div>

				
			</div>
		 </div>

<!--purchasing -->
<div class="modal fade" id="pur" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">PURCHASING</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<div class="container">
			<div class="row">
				 <table class="table fl-table">
					<thead>
					   <tr>
							<th>Name</th>
							<th>Designation</th>
							<th>Extension</th>
							<th>Speed Dial</th>

						</tr>
						</thead>
						<tbody>

						<tr>
							<td>En Zaki Shahrudin</td>
							<td>Head Purchasing</td>
							<td>7969</td>
							<td>1087</td>
						  
						</tr>
						<tr>
							<td>Fairuz</td>
							<td>Executive</td>
							<td>7988</td>
							<td>-</td>
				  
						</tr>
						<tr>
							<td>Nazri </td>
							<td>Supervisor</td>
							<td>7985</td>
							<td>1089</td>				  
						</tr>
					</tbody>
				</table>
			</div>
		</div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!--outsource -->
<div class="modal fade" id="os" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">OUTSOURCE</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<div class="container">
			<div class="row">
				 <table class="table fl-table">
					<thead>
					   <tr>
							<th>Name</th>
							<th>Designation</th>
							<th>Extension</th>
							<th>Speed Dial</th>

						</tr>
						</thead>
						<tbody>

						<tr>
							<td>En Shafarol</td>
							<td>Head Outsource</td>
							<td>7947</td>
							<td>1079</td>
						  
						</tr>
						<tr>
							<td>Norairin</td>
							<td>Executive</td>
							<td>7974</td>
							<td>1083</td>			  
						</tr>
					</tbody>
				</table>
			</div>
		</div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
	  <!--linen -->
	  <div>
<div class="modal fade" id="linen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">LINEN</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<div class="container">
			<div class="row">
				 <table class="table fl-table">
					<thead>
					   <tr>
							<th>Name</th>
							<th>Designation</th>
							<th>Extension</th>
							<th>Speed Dial</th>

						</tr>
						</thead>
						<tbody>

						<tr>
							<td>Hazim</td>
							<td>staff linen</td>
							<td></td>
							<td>1330</td>
						  
						</tr>
						<tr>
							<td>Suhaimi</td>
							<td>staff linen</td>
							<td></td>
							<td>1332</td>			  
						</tr>
					</tbody>
				</table>
			</div>
		</div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

	  <!--maintenance -->
<div class="modal fade" id="me" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">MAINTENANCE & ENGINEERING</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<div class="container">
			<div class="row">
				 <table class="table fl-table">
					<thead>
					   <tr>
							<th>Name</th>
							<th>Designation</th>
							<th>Extension</th>
							<th>Speed Dial</th>

						</tr>
						</thead>
						<tbody>

						<tr>
							<td>Pn Siti Fatimah</td>
							<td>Hosp Engineer</td>
							<td>7984</td>
							<td>1069</td>
						  
						</tr>
						<tr>
							<td>En Nazaruddin</td>
							<td>Chargeman</td>
							<td>7984</td>
							<td>1053</td>			  
						</tr>
						<tr>
							<td>Nurul Hidayah</td>
							<td>Maintenance Clerk</td>
							<td>7983</td>
							<td></td>			  
						</tr>
						<tr>
							<td>Maintenance</td>
							<td></td>
							<td>7982</td>
							<td>-</td>			  
						</tr>
					</tbody>
				</table>
			</div>
		</div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
           </div> <!-- /.row-->
       </div> <!-- /.container-->
   </footer>
   <!--End Footer-->


	
  <!--<a href="#" class="scrollup"> <i class="fa fa-chevron-up"> </i> </a>-->

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
	
	<div class="backBtn">
      <span class="line tLine"></span>
      <span class="line mLine"></span>
     <!-- <span class="label">Back</span> -->
      <span class="line bLine"></span>
	</div>