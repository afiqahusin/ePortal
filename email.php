<!doctype html>
<!--
	Lamoda by TEMPLATE STOCK
	templatestock.co @templatestock
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->


<html lang="en-gb" class="no-js">
  <head>
    <meta charset="utf-8">
	<title>ePortal</title>
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">		

		
	<!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
 
 

     <!--styles -->
	<link rel="stylesheet" href="style/bootstrap/css/bootstrap.min.css" media="screen">
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="js/owl-carousel/owl.theme.css" rel="stylesheet">
    <link href="js/owl-carousel/owl.transitions.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    <link rel="stylesheet" href="css/etlinefont.css">
    <link href="css/style.css" type="text/css"  rel="stylesheet"/>
	<link href="css/table.css" type="text/css"  rel="stylesheet"/>
	<link href="css/accordion1.css" type="text/css"  rel="stylesheet"/>


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
								<!--	<img src="images/logo.png" alt="Company logo" /> -->
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
									<a class="nav-link active" aria-current="page" href="index.php">Home</a>
									</li>
									<li  class="nav-item"> <a class="nav-link active" href="phone.php">Phone Directory</a> </li>
                                    
                                    <li  class="nav-item"> <a class="nav-link active" href="email.php">Email Directory</a> </li>
                                    
                                     
									<li class="nav-item dropdown">
									<a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										Consultant Roster
									</a>
									<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
										<li><a class="dropdown-item" href="doc/consultant_nov_latest.htm">Monthly Roster </a></li>
										<li><hr class="dropdown-divider"></li>
										<li><a class="dropdown-item" href="ae.html">Daily On Call Roster</a></li>
										<li><hr class="dropdown-divider"></li>
										<li><a class="dropdown-item" href="ae.html">Medical Officer Roster</a></li>
									
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

        <!-- Start Slider  -->
      <!--  <section id="home" class="home">
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
          <!-- End Slider  -->
<div class="container">
	<div class="col  mt-5 pt-5">
				<div class="row">
					<form method="post">
						<div class="input-group mb-3 shadow bg-black  bg-opacity-10">
						  <input style="background-color: white;color: black;" class="form-control ms-3 mt-3" type="text" name="phoneSearch" placeholder="Search for phone">
						  <button class="btn btn-primary btn-sm mt-3 mb-4 me-4" name="searchButton" type="submit"><i class="bi bi-search ps-3 pe-3"></i></button>
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
							<div class="row">
								<div class="d-flex flex-row bd-highlight">
								  <div class="p-2 bd-highlight"><span style="font-size: 45px; font-weight: 600;"><?php echo $searchResult['Phone_Name']; ?></span></div>
								  <div class="p-2 mt-4 bd-highlight"><span style="font-size: 15px; font-weight: 400;"><?php echo $department_name; ?> (<?php echo $searchResult['Phone_Designation']; ?>)</span></div>
								</div>
							</div>
							<div class="row">
								<div class="d-flex flex-row bd-highlight mb-3">
									<div class="ps-2 bd-highlight"><span style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-size: 15px;">Email </span><span style="color: rgb(80, 80, 80); font-weight: 50; font-size: 20px;"><?php echo $searchResult['Phone_email']; ?></span></div>
								</div>
							</div>
							</div>
						<?php            
								}
							}
							}
						?>
				</div>
		<div class="row">
				
				
    <div class="panel-group wrap" id="bs-collapse">
      <div class="panel">
        <div class="panel-heading">
          <h4 class="panel-title">
        <a data-bs-toggle="collapse" aria-expanded="false" aria-controls="multiCollapseExample1" data-parent="#" href="#one">
          MANAGEMENT & HOS 
        </a>
      </h4>
        </div>
        <div id="one" class="panel-collapse collapse">
          <div class="panel-body">
       <div class="table-wrapper">
    <table class="fl-table"> 
		 <thead>
        <tr>
            <th>Name</th>
            <th>Email Address</th>           
        </tr>
        </thead>    
		 <tbody>

        <tr>
            <td>En Aidil Ikram Bin Mohamad <br> Chief Executive Officer </br></td>
            <td>aidil@kpjhealth.com.my</td>         
        </tr>
		 <tr>
            <td>Pn Siti Noor Azwani Bt Hassan<br>PA CEO</br></td>
            <td>snazwani@kpjklang.com</td>           
        </tr>
        <tr>
            <td>En Mohd Fikri Bin Bukhari<br>Operation Manager</br></td>
            <td>fikri@kpjhealth.com.my</td>          
        </tr>
		 <tr>
            <td>Pn Ridzwani Binti Shariff<br>Chief Nursing Officer</br></td>
            <td>ridzwanis@kpjklang.com</td> 
        </tr>
        <tr>
            <td>Pn Neelavani A/P Munianday<br>Deputy CNO</br></td>
            <td>neelavani@kpjklang.com</td>               
        </tr>
        <tr>
            <td>Pn Norfazidah Bt Bawadi <br>Accountant</br></td>
            <td>norfazidah@kpjhealth.com.my</td>    
        </tr>
        <tr>
            <td>En Mohd Nazmi<br>Head Of Marketing</br></td>
            <td>mohdnazmi@kpjklang.com</td> 
        </tr>
        <tr>
            <td>Pn Nor Asyikin Abu Bakar<br>IT & Health Information Manager</br></td>
            <td>asyiknab@kpjklang.com</td>    
        </tr>		
		    <tr>
            <td>Pn Azlina Kamaruddin<br>Customer Service Manager</br></td>
            <td>azlina@kpjklang.com</td>

        </tr>	
		    <tr>
            <td>Pn Siti Meriam Bt Ishak<br>Laboratory Manager</br></td>
            <td>smeriam@kpjklang.com</td>

        </tr>	
		    <tr>
            <td>En Muhammad Zaki Shaharudin<br>HOS Purchasing</br></td>
            <td>mzakis@kpjklang.com</td>

        </tr>	
		<tr>
            <td>Ms Tan Win Win<br>HOS Pharmacy </br></td>
            <td>tanww@kpjklang.com</td>         
        </tr>
		<tr>
            <td>Pn Khadijah Binti Shapiai<br>Medical Record In-charge</br></td>
            <td>khadijahsh@kpjklang.com</td>         
        </tr>
		<tr>
            <td>En Mohammad Firdaus Badrul Hisham<br>Quality In Charge</br></td>
            <td>firdausbh@kpjklang.com</td>         
        </tr>
		<tr>
            <td>Ms Louisa Low <br>Dietitian</br></td>
            <td>lowsy@kpjklang.com</td>         
        </tr>
		<tr>
            <td>Cik Nursakinah Abdul Ghani<br>Audiologist</br></td>
            <td>nsakinah@kpjklang.com</td>         
        </tr>
		<tr>
            <td>En Mohd Hafiz Bin Wagimin<br>HOS Diagnostic Imaging </br></td>
            <td>hafiz@kpjklang.com</td>         
        </tr>
		<tr>
            <td>En Amirul Faiz Bin Jasmi<br>HOS Rehabilitation</br></td>
            <td>amirulf@kpjklang.com</td>         
        </tr>
		<tr>
            <td>En Shafarolakma Shukor<br>HOS Outsource</br></td>
            <td>shafarol@kpjklang.com</td>         
        </tr>	
		<tr>
            <td>Suhaili Saad<br>Infection Control Officer </br></td>
            <td>ssuhaili@kpjklang.com</td>         
        </tr>
		<tr>
            <td>Rohadillah Binti Abdullah<br>Clinical Survey Officer </br></td>
			<td>rohadillah@kpjklang.com</td>
        </tr>		
        </tr>
        </tr>
		</body>
 </table>	
          </div>
        </div>
      </div>
	
			
			<!-- end div wrap -->
			
			<!-- start div consultant -->
			
    <div class="panel mt-3">
        <div class="panel-heading">
			<h4 class="panel-title">
			<a data-bs-toggle="collapse" aria-expanded="false" data-parent="#" href="#two">
			 CONSULTANT & CLINIC ASSISTANT
			</a>
			</h4>
        </div>
			<div id="two" class="panel-collapse collapse">
				<div class="col-12 mt-3">
					<div class="d-flex flex-row bd-highlight">
					  <div class="bd-highlight">
							
							<div class="">
								<div class="">
									<table class="fl-table">
					 
											 <thead>
											 <tr>
												<th>Name</th>
												<th>Email Address</th> 
												<th>Clinic Assistant</th>
			
											</tr>
											</thead>
											<tbody>
											 <tr>
												<td>Dr Abdul Yazid Mohd Kassim<br>Orthopaedic Surgery , Oncology</br></td>
												<td>dryazidk@kpjklang.com</td>     
												<td>Ramizah<br>ramizah@kpjklang.com</br></td>
  			
											</tr>
											 <tr>
												<td>Dr Ahmad Fauzi Md. Sharif<br>Eye / Ophthalmology</br></td>
												<td>drfauzi@kpjklang.com</td>  
												<td>Asmaliza Bt Ilias<br>asmalizai@kpjklang.com</br></td>  			
											</tr>
											  <tr>
												<td>Dr Anil K Radhakrishnan<br>Gastroenterology , General Medicine</span></br></td>
												<td>dranil@kpjklang.com</td>  
												<td>Nur Assyaqirin Bt Mohd Rafi<br>syaqirin@kpjklang.com</br></td>			
											</tr>

											<tr>
												<td>Dr Asmah Binti Mastor<br>Obstetric & Gynaecology</br></td>
												<td>drasmah@kpjklang.com</td> 
												<td>Siti Norashikin Nyatoh<br>snorashikin@kpjklang.com</br></td>
											</tr>
												<tr>
												<td>Dr Hue Teck Lee<br>General Surgeon </br></td>
												<td>drhue@kpjklang.com</td> 
												<td>Munah Binti Wazir <br>munahw@kpjklang.com</br></td>		
											</tr>
												<tr>
												<td>Dr Husin Marijan<br>General, Laparascopic Surgery</br></td>
												<td>drhusin@kpjklang.com</td> 
												<td>Angelina Tadlip Lim<br>angelina@kpjklang.com</br></td>		
											</tr>
												<tr>
												<td>Dr Jee Shir Li<br>General Surgeon</br></td>
												<td>drjee@kpjklang.com</td>  
												<td>Noor Aslinda Ismail<br>naslinda@kpjklang.com</br></td>	
											</tr>
												<tr>
												<td>Dr Khor Boon Pin<br>Gastroenterology , General Medicine</br></td>
												<td>drkhor@kpjklang.com</td>    
												<td>Sharifah Syaza Amani<br>ssyaza@kpjklang.com</br></td>		
											</tr>
											   <tr>
												<td>Datin Dr Lilian George<br>Obstetric & Gynaecology</br></td>
												<td>drlilian@kpjklang.com</td>    
												<td>Izzatul Fathira Binti Hussain<br>izzatulf@kpjklang.com</br></td>			
											</tr>
												   <tr>
												<td>Dr Lim Choo Gee<br>General Medicine, Nephrology , Kidney</br></td>
												<td>drlimcg@kpjklang.com</td>  
												<td>Fauziah Binti Yazid<br>yfauziah@kpjklang.com</br></td>		
											</tr>
												   <tr>
												<td>Dr Lim Eu Jin<br>Cardiology / Interventional Cardiology, General Medicine</br></td>
												<td>drlim@kpjklang.com</td>   
												<td>Hanizah Binti Yahya<br>hanizahy@kpjklang.com</br></td>				
											</tr>
											<tr>
												<td>Dr Manohar Padmanathan<br>General, Colorectal, Laparascopic Surgery</br></td>
												<td>drmanohar@kpjklang.com</td>   
												<td>Mahirah Bt Mohamad<br>mahirahm@kpjklang.com</br></td>		
											</tr>
											   <tr>
												<td>Dr Mazita Ami<br>Ent/ Otorhinolaryngology</br></td>
												<td>drmazita@kpjklang.com</td>    
												<td>Asmida Bt Saidin<br>asmidas@kpjklang.com</br></td> 			
											</tr>

											 <tr>
												<td>Dr Ooi Hooi Leng<br>Paediatrics,  Paediatrics Endocrinology / Dm</br></td>
												<td>drooi@kpjklang.com</td>  
												<td>Norasyuha Binti Nordin Saari<br>asyuhans@kpjklang.com</br></td>			
											</tr>
											<tr>
												<td>Dr Ravinderjit Singh<br>Cardiology / Interventional Cardiology</br></td>
												<td>drravinder@kpjklang.com</td>   
												<td>Nur Amirah Binti Ramlan<br>nuramirah@kpjklang.com</br></td> 			
											</tr>

											<tr>
												<td>Dr Rosni Jamalludin<br>Paediatrics</br></td>
												<td>drrosni@kpjklang.com</td>        
												<td>Siti Safurah Bt Ali Badar<br>safurah@kpjklang.com</br></td>		
											</tr>
											<tr>
												<td>Dr Sri Subanesh Narayanan<br>Orthopeadic Surgery</br></td>
												<td>drsubanesh@kpjklang.com</td>      
												<td>Siti Syuhada Zakaria<br>ssyuhada@kpjklang.com</br></td>		
											</tr>
											<tr>
												<td>Dr Syed Ahmad Faisal Syed Kamaruddin<br>Orthopeadic Surgery</br></td>
												<td>drfaisal@kpjklang.com</td>  
												<td>Fadhilah Sulaiman<br>fadhilahs@kpjklang.com</br></td> 			
											</tr>

												<tr>
												<td>Dr Thi Ha Htun<br>Urology </br></td>
												<td>drthi@kpjklang.com</td>  
												<td>Sayang Suhana Binti Rosli<br>ssuhana@kpjklang.com</br></td>			
											</tr>
											
											   <tr>
												<td>Dr Vanitha A/P Sivanesan<br>Paediatrics</br></td>
												<td>drvanitha@kpjklang.com</td>  
												<td>Noor Shawaiti Zainun<br>shawaiti@kpjklang.com</br></td>	
											</tr>
												<tr>
												<td>Dr Vijayavel<br>Obstetric & Gynaecology, Laparascopic Surgery</br></td>
												<td>drvijay@kpjklang.com</td> 
												<td>Rosmafazila Binti Norddin<br>rosmafazila@kpjklang.com</br> </td>			
											</tr>
											  <tr>
												<td>Dr Vincent Tan Eng Soon<br>Ent/Otorhinolaryngology</br></td>
												<td>drvincent@kpjklang.com</td>     
												<td>Nur Liyana Binti Abdullah Nabawi<br>liyanan@kpjklang.com</br></td>   			
											</tr>

												<tr>
												<td>Dr Raymond George<br>Chest Physician</br></td>
												<td>drraymond@kpjklang.com</td> 
												<td>Siti Najiha Shuib<br>snajihah@kpjklang.com</br></td>											
											</tr>
										   <tr>
												<td>Dr Riana Kipiani <br>Ear Nose & Throat</br></td>
												<td>drriana@kpjklang.com</td>
												<td>Siti Nadia Binti Abd Samad<br>snadias@kpjklang.com</br></td>		
											</tr>
											
											  <tr>
												<td>Dr Siti Suriyati Bt Buang<br>Neurosurgery</br></td>
												<td>drsiti@kpjklang.com</td>
												<td>N/A</td>		
											</tr>
											 <tr>
												<td>Dr Zurina Zainal Abidin<br>Eye / Ophthamalogy Eye</br></td>
												<td>drzurina@kpjklang.com</td>   
												<td>N/A</td>		
											</tr>
											 <tr>
												<td>Dr Zanariah Sabiron<br>Anaesthesiology</br></td>
												<td>drzanariah@kpjklang.com</td>  
												<td>N/A</td>
		
											</tr>
											 <tr>
												<td>Dr Hamzah Bin Ahmad <br>Radiologist & Imaging</br></td>
												<td>drhamzaha@kpjklang.com</td>  
												<td>N/A</td>
	
											</tr>
											   <tr>
												<td>Dr Rosliza Bt Samsudin<br>Anaesthesiology</br></td>
												<td>drrosliza@kpjklang.com</td>   
												<td></td>												
											</tr>
											 <tr>
												<td>Dr Nik Marzuki Mohamad<br>Anaesthesiology</br></td>
												<td>drmarzuki@kpjklang.com</td> 
												<td>N/A</td>			
											</tr>		
												<tr>
												<td>Dr Anisha Gobindram<br>Radiologist & Imaging</br></td>
												<td>dranisha@kpjklang.com</td>
												<td>N/A</td>			
											</tr>		
											<tbody>
									</table>
					
								</div>		
							
							</div>
					  </div>
					</div>
				</div>
			</div>
    </div>		
		
			<!-- start div medical officer -->
			
      <div class="panel">
        <div class="panel-heading">
          <h4 class="panel-title">
        <a  data-bs-toggle="collapse" aria-expanded="false" data-toggle="collapse" data-parent="#" href="#three">
         MEDICAL OFFICER
        </a>
      </h4>
        </div>
        <div id="three" class="panel-collapse collapse">
          <div class="panel-body">
       <div class="table-wrapper">
    <table class="fl-table">
	
		 <thead>
         <tr>
            <th>Name</th>
            <th>Designation</th>
            <th>Email Address</th>		
        </tr>
        </thead>
        <tbody>
		 <tr>
            <td>Dr Chalvantharan A/L Peravy</td>
            <td>Chief Medical Officer</td>
            <td>drchalvan@kpjklang.com</td>         
        </tr>
		<tr>
            <td>Dr Ellan Govan Kolandasamy</td>
            <td>Medical Officer</td>
            <td>drellan@kpjklang.com</td>         
        </tr>
		<tr>
            <td>Dr Amran Marzuki</td>
            <td>Medical Officer</td>
            <td>dramranm@kpjklang.com</td>    
		 <tr>
            <td>Dr Hari Jayaraman</td>
            <td>Medical Officer</td>
            <td>drhari@kpjklang.com</td>  
		 <tr>
            <td>Dr Nor Aina Adnan</td>
            <td>Medical Officer</td>
            <td>draina@kpjklang.com</td>         
        </tr>
		 <tr>
            <td>Dr Sudha Rawat</td>
            <td>Medical Officer</td>
            <td>drsudha@kpjklang.com</td>         
        </tr>
		<tr>
            <td>Dr Shobana Supramaniam</td>
            <td>Medical Officer</td>
            <td>drshobana@kpjklang.com</td>         
        </tr>
	     <tr>
            <td>Dr Nur Nadia Binti Abd Rahim</td>
            <td>Medical Officer</td>
            <td>drnadia@kpjklang.com</td>         
        </tr>
	     <tr>
            <td>Dr Mohd Muzafariman Mohd Mydin</td>
            <td>Medical Officer</td>
            <td>drmuzafar@kpjklang.com</td>         
        </tr>
		 <tr>
            <td>Dr Mohammad Al-Imran Bin Dr. Kassim</td>
            <td>Medical Officer</td>
            <td>dramin@kpjklang.com</td>         
        </tr>			
		<tr>
            <td>Dr Shamala A/P Paranthaman</td>
            <td>Medical Officer</td>
            <td>drshamala@kpjklang.com</td>         
        </tr>		
		
        <tbody>
    </table>
	
	</div>		
			
          </div>
        </div>

      </div>
			<!-- start div UM -->
			
      <div class="panel">
        <div class="panel-heading">
          <h4 class="panel-title">
        <a  data-bs-toggle="collapse" aria-expanded="false" data-toggle="collapse" data-parent="#" href="#four">
         UNIT MANAGER
        </a>
      </h4>
        </div>
        <div id="four" class="panel-collapse collapse">
          <div class="panel-body">
       <div class="table-wrapper">
    <table class="fl-table">
	  
		 <thead>
         <tr>
            <th>Name</th>
            <th>Ward</th>
            <th>Email Address</th>
         </tr>
		 <tr>
            <td>Ivanna Izzati Mohamad Derapi</td>
            <td>Surgical Ward</td>
            <td>ivanna@kpjklang.com</td>         
        </tr>
		<tr>
            <td>Kartini Mardikun</td>
            <td>Night Unit Manager</td>
            <td>kartinim@kpjklang.com</td>         
        </tr>
		<tr>
            <td>Maryani Bt. Ab. Satar</td>
            <td>ICU / HDU </td>
            <td>maryani@kpjklang.com</td>         
        </tr>
		<tr>
            <td>Norlili Murina Mat</td>
            <td>Nurse Instructor</td>
            <td>norlili@kpjklang.com</td>         
        </tr>
		<tr>
            <td>Nurliyana Binti Masri</td>
            <td>Dialysis</td>
            <td>liyanam@kpjklang.com</td>         
        </tr>
		<tr>
            <td>Nurul Sharil Husna Sharif</td>
            <td>Medical Ward </td>
            <td>nshusnaa@kpjklang.com</td>         
        </tr>
		<tr>
            <td>Nurziana Binti Zainul</td>
            <td> OT </td>
            <td>nurziana@kpjklang.com</td>         
        </tr>
		<tr>
            <td>Ramlah Bt Ibrahim</td>
            <td> Accident & Emergency </td>
            <td>ramlahib@kpjklang.com</td>         
        </tr>
		<tr>
            <td>Rohana binti Ali</td>
            <td> Maternity Ward</td>
            <td>rohanaa@kpjklang.com</td>         
        </tr>
		<tr>
            <td>Roslina Bt Ahmad Kasrin</td>
            <td> Nurse Instructor </td>
            <td>roslinaak@kpjklang.com</td>         
        </tr>
		<tr>
            <td>Siti Rusyati Bt Mohamed Taruddin</td>
            <td> SPD </td>
            <td>sitirusyati@kpjklang.com</td>         
        </tr>

		<tr>
            <td>Susila A/P Subramanian</td>
            <td> Night UM</td>
            <td>susila@kpjklang.com</td>         
        </tr>
		<tr>
            <td>Thevi Lokanamdom</td>
            <td> Endoscopy</td>
            <td>theviloka@kpjklang.com</td>         
        </tr>

		</body>
 </table>	
          </div>
        </div>
      </div>


    </div>
			<!-- start div finance -->
			
      <div class="panel">
        <div class="panel-heading">
          <h4 class="panel-title">
        <a  data-bs-toggle="collapse" aria-expanded="false" data-parent="#" href="#five">
         FINANCE
        </a>
      </h4>
        </div>
        <div id="five" class="panel-collapse collapse">
          <div class="panel-body">
       <div class="table-wrapper">
    <table class="fl-table">
	  
		 <thead>
         <tr>
            <th>Name</th>
            <th>Designation</th>
            <th>Email Address</th>   	
        </tr>
        </thead>
        <tbody>
		 <thead>		
		<tr>
            <td>Tengku Muhammad Syakir Tengku Paris</td>
            <td>Account Executive</td>
            <td>tmsyakir@kpjklang.com</td>         
        </tr>
		<tr>
            <td>Lim Woei Shan</td>
            <td>Account Executive</td>
            <td>limws@kpjklang.com</td>         
        </tr>
		<tr>
            <td>Mohammad Faruqi Bin Mohd Basori</td>
            <td>Credit Control Executive</td>
            <td>faruqi@kpjklang.com</td>         
        </tr>
		<tr>
            <td>Mohamad Amirul Hakim Selamat</td>
            <td>Credit Control Officer</td>
            <td>mamirul@kpjklang.com</td>         
        </tr>

		<tr>
            <td>Mohd Hasrul Bin Abd Razak</td>
            <td>Credit Control Officer</td>
            <td>hasrul@kpjklang.com</td>         
        </tr>
		</body>
 </table>	
          </div>
        </div>
      </div>


    </div>
<!-- start div Talent Management-->
			
      <div class="panel">
        <div class="panel-heading">
          <h4 class="panel-title">
        <a  data-bs-toggle="collapse" aria-expanded="false" data-parent="#" href="#six">
         HUMAN RESOURCE
        </a>
      </h4>
        </div>
        <div id="six" class="panel-collapse collapse">
          <div class="panel-body">
       <div class="table-wrapper">
    <table class="fl-table">
	  
		 <thead>	
       <tr>
            <th>Name</th>
            <th>Designation</th>
            <th>Email Address</th>          
        </tr>		
        </thead>
        <tbody>
		<tr>
            <td>Pn Epah Hassan</td>
            <td>HOS HR</td>
            <td>epahh@kpjklang.com</td>         
        </tr>		
		<tr>
            <td>Azila Laili Ahmad Suhaime</td>
            <td>HR Executive</td>
            <td>azilalaili@kpjklang.com</td>         
        </tr>
		<tr>
            <td>Muhammad Zahanif Mohammad Zaini</td>
            <td>HR Executive</td>
            <td>zahanif@kpjklang.com</td>         
        </tr>
		<tr>
            <td>Nazatul Nadia</td>
            <td>HR Executive</td>
            <td>nazatuln@kpjklang.com</td>         
        </tr>
		<tr>
            <td>Khikmatul Jannah</td>
            <td>HR Officer</td>
            <td>tms@kpjklang.com</td>         
        </tr>
		</body>
 </table>	
          </div>
        </div>
      </div>
    </div>		 
	
<!-- start div marketing-->
			
      <div class="panel">
        <div class="panel-heading">
          <h4 class="panel-title">
        <a  data-bs-toggle="collapse" aria-expanded="false" data-parent="#" href="#seven">
         MARKETING & PR
        </a>
      </h4>
        </div>
        <div id="seven" class="panel-collapse collapse">
          <div class="panel-body">
       <div class="table-wrapper">
    <table class="fl-table">
	
		 <thead>
		  <tr>
            <th>Name</th>
            <th>Designation</th>
            <th>Email Address</th>          
        </tr>		
        </thead>
        <tbody>	
		<tr>
            <td>Mohd Nazmi Bin Harun</td>
            <td>HOS Marketing </td>
            <td>mfaizal@kpjklang.com</td>         
        </tr>
		<tr>
            <td>siti Nazatul Shima</td>
            <td>HOS Public Relation </td>
            <td>snshima@kpjklang.com</td>         
        </tr>
		<tr>
            <td>Mohd Faizal Ameran</td>
            <td>Senior Marketing Executive</td>
            <td>mfaizal@kpjklang.com</td>         
        </tr>
		<tr>
            <td>Zulaikha Jaafar</td>
            <td>Marketing Executive</td>
            <td>zulaikaj@kpjklang.com</td>         
        </tr>
		<tr>
            <td>Mohamad Hafiz Bin Ahmad</td>
            <td>Graphic Designer</td>
            <td>mhafiza@kpjklang.com</td>         
        </tr>
		<tr>
            <td>Farah Noor Fairus Binti Abdul Rahim</td>
            <td>Assistant Executive</td>
            <td>farahar@kpjklang.com</td>         
        </tr>	

		</body>
 </table>	
          </div>
        </div>
      </div>


    </div>
<!-- start div admin & nursing admin -->
			
      <div class="panel">
        <div class="panel-heading">
          <h4 class="panel-title">
        <a  data-bs-toggle="collapse" aria-expanded="false" data-parent="#" href="#eight">
         ADMINISTRATION & NURSING ADMIN
        </a>
      </h4>
        </div>
        <div id="eight" class="panel-collapse collapse">
          <div class="panel-body">
       <div class="table-wrapper">
    <table class="fl-table">
	
		 <thead>
        <tr>
            <th>Name</th>
            <th>Designation</th>
            <th>Email Address</th>          
        </tr>		
        </thead>
        <tbody>	
		<tr>
            <td>Siti Salimah Sheikh Mustaffa</td>
            <td>Admin Executive</td>
            <td>ssalimah@kpjklang.com</td>         
        </tr>
		<tr>
            <td>Nur Fatin Nabiha Binti Mispan</td>
            <td>Nursing Admin</td>
            <td>nabiha@kpjklang.com</td>         
        </tr>		 

		</body>
 </table>	
          </div>
        </div>
      </div>


    </div>		
	
<!-- start div biomed -->
			
      <div class="panel">
        <div class="panel-heading">
          <h4 class="panel-title">
        <a  data-bs-toggle="collapse" aria-expanded="false" data-parent="#" href="#nine">
         BIOMEDICAL & MAINTENANCE
        </a>
      </h4>
        </div>
        <div id="nine" class="panel-collapse collapse">
          <div class="panel-body">
       <div class="table-wrapper">
    <table class="fl-table">
	 
		 <thead>
        <tr>
            <th>Name</th>
            <th>Designation</th>
            <th>Email Address</th>          
        </tr>		
        </thead>
        <tbody>	
		<tr>
            <td>Pn Siti Fatimah Bte Abd Rahman</td>
            <td>Hospital Engineer</td>
            <td>sfatimah@kpjklang.com</td>         
        </tr>
		<tr>
            <td>En Nazaruddin</td>
            <td>Chargeman (Maintenance)</td>
            <td>nazaruddin@kpjklang.com</td>         
        </tr>
			<tr>
            <td>Nor Amirah Binti Mohd Noh</td>
            <td>Biomedical Executive</td>
            <td>amirahmn@kpjklang.com</td>         
        </tr>		

		</body>
 </table>	
          </div>
        </div>
      </div>


    </div>
	
<!-- start div consultant -->
			
      <div class="panel">
        <div class="panel-heading">
          <h4 class="panel-title">
        <a  data-bs-toggle="collapse" aria-expanded="false" data-parent="#" href="#ten">
         BUSINESS OFFICE
        </a>
      </h4>
        </div>
        <div id="ten" class="panel-collapse collapse">
          <div class="panel-body">
       <div class="table-wrapper">
    <table class="fl-table">
	
		 <thead>
		        <tr>
            <th>Name</th>
            <th>Designation</th>
            <th>Email Address</th>          
        </tr>		
        </thead>
        <tbody>	
		<tr>
            <td>Nurazean Binti Jamal</td>
            <td>BO HOS</td>
            <td>azeanj@kpjklang.com</td>         
        </tr>
		<tr>
            <td>Nazatul Shima Binti Yahya</td>
            <td>Chief Cashier</td>
            <td>nazatul@kpjklang.com</td>         
        </tr>
		<tr>
            <td>Pungkulali A/P Sothivelr</td>
            <td>BO Officer</td>
            <td>pungkulali@kpjklang.com</td>         
        </tr>
		</body>
 </table>	
          </div>
        </div>
      </div>


    </div>		
				<!-- start div general email -->
			
      <div class="panel">
        <div class="panel-heading">
          <h4 class="panel-title">
        <a  data-bs-toggle="collapse" aria-expanded="false" data-parent="#" href="#eleven">
         GENERAL EMAIL (SUPPORT SERVICE)
        </a>
      </h4>
        </div>
        <div id="eleven" class="panel-collapse collapse">
          <div class="panel-body">
       <div class="table-wrapper">
    <table class="fl-table">
	
		 <thead>	
      <tr>
            <th>Services</th>
            <th>Email Address</th>          
        </tr>		
        </thead>
        <tbody>	
		<tr>
            <td>Customer Services</td>
            <td>customer@kpjklang.com</td>        
        </tr>
		<tr>
            <td>Account Services</td>
            <td>acc@kpjklang.com</td>        
        </tr>
		<tr>
            <td>Fems ( Maintenance)</td>
            <td>fems@kpjklang.com</td>        
        </tr>
		<tr>
            <td>Finance</td>
            <td>finance@kpjklang.com</td>        
        </tr>
		<tr>
            <td>Guarantee Letter (BO)</td>
            <td>gl@kpjklang.com</td>        
        </tr>
		<tr>
            <td>IPC (Marketing)</td>
            <td>ipcklgsh@kpjklang.com</td>        
        </tr>
		<tr>
            <td>IT Services</td>
            <td>itservices@kpjklang.com</td>        
        </tr>
		<tr>
            <td>Biomedical Services</td>
            <td>klgshbiomed@kpjklang.com</td>        
        </tr>
		<tr>
            <td>Public Relational</td>
            <td>pr@kpjklang.com</td>        
        </tr>
		<tr>
            <td>Purchasing Services</td>
            <td>purchasing@kpjklang.com</td>        
        </tr>
		<tr>
            <td>Medical Record</td>
            <td>medicalrecord@kpjklang.com</td>        
        </tr>
		<tr>
            <td>Outsource</td>
            <td>klgshoutsource@kpjklang.com</td>        
        </tr>
		</body>
 </table>	
          </div>
        </div>
      </div>


    </div>
			<!-- start div general email--> 
			
      <div class="panel">
        <div class="panel-heading">
          <h4 class="panel-title">
        <a  data-bs-toggle="collapse" aria-expanded="false" data-parent="#" href="#twelve">
        GENERAL EMAIL (NURSING)
        </a>
      </h4>
        </div>
        <div id="twelve" class="panel-collapse collapse">
          <div class="panel-body">
       <div class="table-wrapper">
    <table class="fl-table">
	 
		 <thead>	
        <tr>
            <th>Ward</th>
            <th>Email Address</th>          
        </tr>		
        </thead>
        <tbody>	
		<tr>
            <td>Accident & Emergency</td>
            <td>klgshae@kpjklang.com</td>         
        </tr>
		<tr>
            <td>Day Ward</td>
            <td>klgshdayward@kpjklang.com</td>         
        </tr>
		<tr>
            <td>Dialysis</td>
            <td>klgshdialysis@kpjklang.com</td>         
        </tr>
		<tr>
            <td>ICU</td>
            <td>klgshicu@kpjklang.com</td>         
        </tr>
				<tr>
            <td>Maternity Ward</td>
            <td>klgshmat@kpjklang.com</td>         
        </tr>
				<tr>
            <td>Medical Ward</td>
            <td>klgshmed@kpjklang.com</td>         
        </tr>
				<tr>
            <td>OT</td>
            <td>klgshot@kpjklang.com</td>         
        </tr>
				<tr>
            <td>Paediatric Ward</td>
            <td>klgshpaed@kpjklang.com</td>         
        </tr>
				<tr>
            <td>surgical Ward</td>
            <td>klgshsurg@kpjklang.com</td>         
        </tr>
		<tr>
            <td>SPD</td>
            <td>klgshspd@kpjklang.com</td>         
        </tr>
			<tr>
            <td>Wellness</td>
            <td>klgshwellness@kpjklang.com</td>         
        </tr>
				</body>
 </table>	
          </div>
        </div>
      </div>


    </div>
 			<!-- start div allied health -->
			
      <div class="panel">
        <div class="panel-heading">
          <h4 class="panel-title">
        <a  data-bs-toggle="collapse" aria-expanded="false" data-parent="#" href="#thirteen">
         GENERAL EMAIL (ALLIED HEALTH)
        </a>
      </h4>
        </div>
        <div id="thirteen" class="panel-collapse collapse">
          <div class="panel-body">
       <div class="table-wrapper">
    <table class="fl-table">
	 
		 <thead>   
        <tr>
            <th>Services</th>
            <th>Email Address</th>          
        </tr>		
        </thead>
        <tbody>	
		<tr>
            <td>Radiographer (DID)</td>
            <td>klgshxray@kpjklang.com</td>         
        </tr>
		<tr>
            <td>rehabilitation</td>
            <td>klgshphysio@kpjklang.com
</td>         
        </tr>
		<tr>
            <td>Pharmacy</td>
            <td>klgshpharmacy@kpjklang.com</td>         
        </tr>
			<tr>
            <td>Dietary</td>
            <td>klgshdiet@kpjklang.com</td>         
        </tr>	
		</body>
 </table>	
          </div>
        </div>
      </div>


    </div>		
	        </div>   <!-- end of panel -->

				
				
		</div>
	</div>
</div>

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

			<!-- start div consultant 
			
      <div class="panel">
        <div class="panel-heading">
          <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#" href="#two">
         MANAGEMENT
        </a>
      </h4>
        </div>
        <div id="two" class="panel-collapse collapse">
          <div class="panel-body">
       <div class="table-wrapper">
    <table class="fl-table">
	
	<caption> MANAGEMENT </caption>   
		 <thead>
         <tr>
            <th>Name</th>
            <th>Discipline</th>
            <th>Email Address</th> 
            <th>Clinic Assistant</th>
            <th>Email Address</th>			
        </tr>
        </thead>
        <tbody>
		 <thead>
        <tr>
            <th>Name</th>
            <th>Designation</th>
            <th>Email Address</th>           
        </tr>
        </thead>    
		 <tbody>

        <tr>
            <td>En Aidil Ikram Bin Mohamad</td>
            <td>CEO</td>
            <td>aidil@kpjhealth.com.my</td>         
        </tr>

		</body>
 </table>	
          </div>
        </div>
      </div>


    </div>
			
			<!-- end div wrap -->		