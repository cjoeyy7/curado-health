<?php
error_reporting(0);
session_start();
include('unset.php');

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Results</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap-4.0.0.css" rel="stylesheet">
	
  </head>
  <body>
	  
	  <?php 
	  include('connection.php');
	  
	  $_GET['results'] ;
	  
	  $patient_id = $_GET['results'];
	  
	  $query = mysqli_query($db,"SELECT * FROM bookings WHERE identity_number='$patient_id'");
	  $row = mysqli_fetch_array($query);
	  ?>
	  
	  	
  	<!-- body code goes here -->
<body onLoad="$('#my-modal').modal('show');">
<div id="my-modal" class="modal fade" >
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header bg-info">
          <h4 class="modal-title "><div class="text-center" >Upload results and prescription here</div></h4>
          <a href="main.php" type="button" class="close" >&times;</a>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
			<form role="form" action="code.php" method="post">  
					<input type="text" name="pname" class="form-control" readonly value="<?php echo $row['patient_name'] ?>" placeholder="Patient name" required><br>
				<input type="text" name="psurname" class="form-control" readonly value="<?php echo $row['patient_lastname'] ?>" placeholder="Surname" required><br>
			<input type="text" class="form-control" name="patientid" readonly value="<?php echo $patient_id ; ?>" required placeholder="Patient Id "><br>
			<select class="form-control" name="results"  required>
				<option selected disabled>Results</option>
				<option>Positive</option>
				<option>Negative</option>
				
				</select><br>
			<input type="number" name="quantity" min="1" max="10" class="form-control" placeholder="Medicine quantity" ><br>
			<textarea class="form-control" name="prescription" placeholder="Prescription" ></textarea><br>
			<input type="text" name="description" class="form-control" placeholder="Line item description" ><br>	
			<input type="submit" name="submit" class="btn btn-danger btn-block" value="Submit">
			
		
			</form> 
        </div>
        
       
        
        
      </div>
    </div>
  </div>
	</body>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-3.2.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/popper.min.js"></script> 
	<script src="js/bootstrap-4.0.0.js"></script>
  </body>
</html>