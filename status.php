<html>

<head>
<style>
p {
  background-image: url('2.jpg');
}
</style>
</head>

				<title> OT STATUS </title>

				 <p style="text-align:center;"> <img class = "center" text allign  src="logo.png"  width = "450" height = "150"/></p>

					<link rel="stylesheet" href="style/bootstrap/css/bootstrap.min.css" media="screen">
					<link rel="stylesheet" type="text/css" href="css/animate.css" />
					<link rel="stylesheet" href="css/etlinefont.css">
					<link href="css/style.css" type="text/css"  rel="stylesheet"/>


				<body>

				<div class="content">
				<div class="container">
			     <div class="row">
				<div class="col-12">		

							<h2><CENTER></b> <font face = "Arial" > OPERATION THEATER STATUS </b> </CENTER></h2>
							<br>
							<br>
							<br>
							<br>
							<h1> <marquee> <font color=black><font size=5> <b> WELCOME TO KPJ KLANG SPECIALIST HOSPITAL </b> </font> </marquee> </h1>
							<br>
							<br>
			
						<!-- Editable table -->
					<div class="card">

					  <div class="card-body">
						<div id="table" class="table-editable">
						  <span class="table-add float-right mb-3 mr-2"
							><a href="#!" class="text-success"
							  ><i class="fas fa-plus fa-2x" aria-hidden="true"></i></a
						  ></span>
						  <table class="table table-bordered table-responsive-md table-striped text-center">
							<thead>
							  <tr>
							  <th class="text-center">OT ROOM</th>
								<th class="text-center">DR NAME </th>
								<th class="text-center">DATE / TIME </th>
								<th class="text-center">STATUS </th>
							  </tr>
							</thead>
							<tbody>
								<?php include("Dashboard/includes/config.php"); ?>
								<?php 
									$query_otstat = mysqli_query($con,"SELECT * FROM otstat WHERE Otstat_status <> 'completed' ORDER BY Otstat_ID");
									while($result_otstat = mysqli_fetch_array($query_otstat)){

										$fk_doctor_id = $result_otstat['FK_Otstat_Doctor_ID'];
										$query_doctor = mysqli_query($con,"SELECT * FROM doctor WHERE Doctor_ID = '$fk_doctor_id'");
										$result_doctor = mysqli_fetch_array($query_doctor);
								?>
							  <tr>
								<td class="p-4"  contenteditable="true"><?php echo $result_otstat['Otstat_Room']; ?></td>
								<td class="p-4" contenteditable="true"><?php echo $result_doctor['Doctor_Name']; ?></td>
								<td class="p-4" contenteditable="true"><?php echo $result_otstat['Otstat_Date']; ?> | <?php echo $result_otstat['Otstat_Time'] ?></td>
								<td class="p-4" style="font-weight: 600; font-size: 18px;" ><?php echo strtoupper($result_otstat['Otstat_status']); ?></td>
							  </tr>
								<?php
									}
								?>
							</tbody>
						  </table>
						</div>
					  </div>
					</div>
					<!-- Editable table -->
						


					</div>
	<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script> 
	
</body>