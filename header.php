<?php 
error_reporting(0);

include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Curado</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap-4.0.0.css" rel="stylesheet">
	    
	   <link rel="stylesheet" href="css/font-awesome.css">
  </head>
  <body>
	  	  <script defer src="js/fontawesome.js" ></script>
	<script src="js/popper.min.js"></script> 
	<script src="js/bootstrap-4.0.0.js"></script>
  	<!-- body code goes here -->
<div class="container-fluid">
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
	
  <div class="navbar-brand" href="#">Curado</div>
	
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " id="collapsibleNavbar">
    <ul class="navbar-nav ">
      <li class="nav-item">
        <a class="nav-link" href="main.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="fetch_tables.php">Diagnoses</a>
      </li>
		<li class="nav-item">
        <a class="nav-link" href="logout.php">Logout </a>
      </li> 
		
			     
    </ul>
	  <ul class="navbar-nav ml-auto">
	   <li class="nav-item">
        <a class="nav-link" href="#"><h6 class="text-white">Welcome <code><?php echo $_SESSION['name']; ?>&nbsp;<?php echo $_SESSION['surname'];?></code></h6></a>
      </li>
	  
	  </ul>
	  
	
  </div> 
	

</nav>
	
	
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	
  </body>
</html>