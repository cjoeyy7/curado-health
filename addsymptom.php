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
	  <?php include('header.php');
	  ?><br>
  	<!-- body code goes here -->
<div class="container">
	<form role="form" action="code.php" method="post">
	
	  <div class="form-group">
	
	  <div class="col-lg-5">
	
	<input type="text" name="sym" placeholder="Symptom Name" required class="form-control"><br>
		<input type="number" name="value" placeholder="Weight " required class="form-control"><br>
		  <input type="submit" name="btnp" value="Add " class="btn btn-outline-dark btn-block">
	</div>
	</div>
		</form>
  	  </div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-3.2.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/popper.min.js"></script> 
	<script src="js/bootstrap-4.0.0.js"></script>
  </body>
</html>