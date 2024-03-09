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
    <title>New doc</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap-4.0.0.css" rel="stylesheet">
	
  </head>
  <body>
  	<!-- body code goes here -->
	  <?php include('header.php')
	  ?>
<div class="container-fluid">
	  <br>
	  <div class="col-lg-5 mx-auto">
		  <div class="card-header text-capitalize text-center bg-info">Add new doc</div><br>
		  <form role="form" method="post" action="code.php">
	<input type="text" name="name" placeholder="Name" class="form-control" required><br>
		   <input type="text" name="surname" placeholder="Surname" class="form-control" required><br>
			  <input type="tel" name="phone" placeholder="Phone number" class="form-control" required><br>
			  <select name="sex" class="form-control">
			  <option selected disabled>Sex</option>
				  <option>Male</option>
				  <option>Female</option>
			  
			  </select><br>
		<!--  <input type="text" name="id" placeholder="doc id " class="form-control" required><br>-->
	<select name="spec"  class="form-control">
			  <option selected disabled>Speciality</option>
		<option>stroke</option>
		<option>diabetes</option>
		<option>Arthritis</option>
		<option>Lung_cancer</option>
		<option>Colon_cancer</option>
		<option>Breast_cancer</option>
		<option>heart_disease</option>
		<option>Bladder_cancer</option>
		<option>Cervical_cancer</option>
		<option>Prostate_cancer</option>
		<option>Migraine_headaches</option>
	
			  </select><br>
		  <select name="reg" class="form-control">
			  
			  	<option selected disabled>Region</option>
			
				<option>Harare</option>
				<option>Bulawayo</option>
				<option>Manicaland</option>
				<option>Mashonaland central</option>
				<option>Mashonaland East</option>
				<option>Mashonaland west</option>
				<option>Masvingo</option>
				<option>Matabeleand North</option>
				<option>Matabeleand South</option>
				<option>Mindlands</option>
			  </select><br>
			  
			  <input type="submit" name="doc" class="btn btn-dark btn-block" value="Add">
		 
		  </form>
	<?php
	include 'connection.php';
	$return_array=mysqli_query($db,"SELECT * FROM graph");
		     while($fetch_array=mysqli_fetch_assoc($return_array)){
				
			 }
		     ?>
		  <?php 
		     $return_array=mysqli_query($db,"SELECT * FROM graph");
		     while($fetch_array=mysqli_fetch_assoc($return_array)){
				 
			 }
		     ?>
	</div> 
	  
	  
	  </div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-3.2.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/popper.min.js"></script> 
	<script src="js/bootstrap-4.0.0.js"></script>
  </body>
</html>