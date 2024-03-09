<?php 
session_start();
include('unset.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Booking</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap-4.0.0.css" rel="stylesheet">
	    <link href="css/bookings.css" rel="stylesheet">
	  <link type="text/css" href="css/style.css" rel="stylesheet">
	  <link href="css/css.css" rel="stylesheet">
	   <link href="css/sweetalert2.css" rel="stylesheet">	
	  
<?php
	  error_reporting(0);
	/*$url=$_SERVER['REQUEST_URL'];
	  header("Refresh: 30; URL=$url");*/
	  ?>
	  
	 <!--  <link href="css/global2.css" rel="stylesheet">-->

  </head>
  <body>
	  <script src="js/sweetalert2.js"> </script>
	  <script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/popper.min.js"></script> 
	<script src="js/bootstrap-4.0.0.js"></script>

  	<!-- body code goes here -->
			<div class="container-fluid bg " id="bg">
			   <?php
			include('connection.php');
			include('header.php');
	  include_once('functions.php'); 
	  ?>
	<div class="card">
		<div class="card-body">
				<div class="card-header bg-info text-white text-center" style="background-color: black"><h3>BOOK A APPOINTMENT</h3></div>
			
	
				<?php
				
				session_start();
				$doc_id = $_GET['id']; 
				
				
				
				?>
		
			
			<script src="js/jquery.min.js"></script>
			<div class="row">
				<div class="col-lg-12">
				
				
				
				<!------------------------------------------------------------------------------------------------>
					
					  
				
				<div class="col">
	
		
	<form role="form" class="form-container" action="#" method="post">
	
		<input type="text" value="<?php echo $_SESSION['name'] ?>" id="patient" readonly class="form-control" placeholder="Name" required ><br>
		
		<input type="text" value="<?php echo $_SESSION['surname'] ?>" readonly id="surname" class="form-control" placeholder="Surname"  required ><br>
		
		<input type="text" value="<?php echo $doc_id; ?>" id="doc_id" readonly class="form-control" placeholder="doc ID"  required ><br>
		<?php
		$today = date("Y-m-d");
		?>
		<input type="date" min="<?php echo $today ?>" id="date" class="form-control" placeholder="Date"  required ><br>
	
		<select id="time" class="form-control" >
		<option disabled selected>Time</option>
		<option>8:00-9:30</option>
			<option>10:00-11:30</option>
			<option>13:00-14:30</option>
			<option>15:00 - 16:30</option>
		
		
		</select><br>
		<?php 
$fetchD = mysqli_query($db,"SELECT * FROM user WHERE identity_number='".$_SESSION['doc_id']."' ");
			   $nombodyComparesToyou = mysqli_fetch_array($fetchD);
			   
	 $dob = $nombodyComparesToyou['dob'];
$new = new DateTime(''.$dob.'');
$today = new DateTime();
			 
$actual = $today->diff($new);

			 $age = $actual->y;
			  
			   
?>
			<input type="text" id="age" hidden="" class="form-control" value=" <?php  echo $age; ?>"><br><br>
		<input type="button" id="buku" class="btn btn-dark btn-block"  value="Book" ><br>
		
		<input type="text" id="diseases"  hidden="" value="<?php echo $_SESSION['TABLE']?>">
		<input type="text" id="percentage"  hidden="" value="<?php echo $_SESSION['chance']?>">
		<input type="text" id="region"  hidden="" value="<?php echo $_SESSION['region']?>">
	
		<input type="text" id="sex"  hidden="" value="<?php echo $_SESSION['sex']?>">
		<input type="text" id="identity" hidden=""  value="<?php echo $_SESSION['doc_id']?>">
	</form>

		</div>
	
		
					
					
					
					
					
					<!--------------------------------------------------------------------------------------------->
				
				
				
				
				
				
				
				</div>
				
			
						
	  </div>
			</div>
				</div>
	  </div>
<script>
	  
	  
	$(document).ready(function()
					 {
			
			$("#buku").on('click',function()
						 {
				var patient = $("#patient").val();
				var surname = $("#surname"). val();
				var doc_id = $("#doc_id").val();
				var date = $("#date").val();
				var time =$("#time").val();
				var diseases = $("#diseases").val();
				var percentage = $("#percentage").val();
				var region = $("#region").val();
				var age = $("#age").val();
				var sex = $("#sex").val();
				var identity = $("#identity").val();
				
				if(patient=="" || surname == "" || doc_id == "" || date =="" || time == ""  )
					{
						swal.fire({
							type: 'error',
							title: 'Error',
							text: 'Fill in all fields please'
							
						})
					}
				else
					{
						$.ajax({
							
							url: 'code.php',
							method: 'POST',
							data: {
								
								buku:1 ,
								patientJs :patient ,
								surnameJs : surname,
								doc_idJs: doc_id,
								dateJs : date,
								timeJs : time,
								diseasesJs : diseases,
								percentageJs : percentage,
								regionJs: region,
								ageJs : age,
								sexJs : sex,
								identityJs: identity
					
							},
							success: function(data)
							{
								if(data=="booking success")
									{
										swal.fire({
											
											type: "success",
											title: "Notification",
											text: data,
																					
										})
									}
								if(data=="time slot arealdy booked")
								{
									swal.fire({
										
										type: "error",
											title: "Error!",
											text: data,
										
									})
									
								}
								
								if(data=="fully booked")
								{
									swal.fire({
										
										type: "error",
											title: "Error!",
											text: data,
										
									})
									
								}
								
									if(data=="you are already booked")
								{
									swal.fire({
										
										type: "error",
											title: "Error!",
											text: data,
										
									})
									
								}
							
									
								
							}
							
							
							
						})
					}
				
			})
		
		
		
		
	});
	
	
	  
	  </script>
	
  </body>
</html>