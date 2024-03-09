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
    <title>Untitled Document</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap-4.0.0.css" rel="stylesheet">
	
  </head>
  <body>
  	<!-- body code goes here -->
	  <?php include('header.php');
	  include('connection.php');
	  ?>
<div class="container-fluid">
	  <br>
	<div class="row">
	  <div class="col-lg-6"><br>
		  <div class="card-header text-center bg-info" >Add Citizens to the central database</div><br>
		  <form role="form" method="post" action="code.php">
	<input type="text" name="name" placeholder="Name" class="form-control"><br>
		   <input type="text" name="surname" placeholder="Surname" class="form-control"><br>
		  <input type="text" name="id" placeholder="Id number" class="form-control"><br>
	<input type="date" name="dob" placeholder="Dob" class="form-control"><br>
		  <input type="submit" name="cit" value="Post" class="btn btn-dark btn-block">
		 
		  </form>
	
	
	</div>
		
		  
		
		
		  <div class="col-lg-6"><br>
		  <div class="card-header text-center bg-info" >Add Admin</div><br>
		  <form role="form" method="post" action="code.php">
			<input type="text" name="name" placeholder="Name" class="form-control"><br>
		   <input type="text" name="surname" placeholder="Surname" class="form-control"><br>
		  <input type="text" name="id" placeholder="Admin ID" class="form-control"><br>
			<input type="password" name="pass" placeholder="Password" class="form-control"><br>
		  <input type="submit" name="admin" value="Add" class="btn btn-dark btn-block">
		 
		  </form>
	
	
	</div>
	  </div>
	  
	  </div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-3.2.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/popper.min.js"></script> 
	<script src="js/bootstrap-4.0.0.js"></script>
  </body>
</html>