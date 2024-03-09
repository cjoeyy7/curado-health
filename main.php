<?php 
error_reporting(0);
include('connection.php');
include('unset.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Main page</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap-4.0.0.css" rel="stylesheet">
	  <link rel="stylesheet" href="css/style4.css">
	  <link rel="stylesheet" href="css/bootstrap.min.css">
	   <link rel="stylesheet" href="css/font-awesome.min.css">
	   <link rel="stylesheet" href="css/font-awesome.css">
	  <link rel="stylesheet" href="css/backtotop.css">
	  <link type="text/css" href="css/style.css" rel="stylesheet">
	  <link href="css/css.css" rel="stylesheet">
	 
	   <link href="css/sweetalert2.css" rel="stylesheet">
	   <style>
	   .portfolio-item {
    margin-bottom: 25px;
}
</style>
  </head>
	
  <body style="background-image:url(img/diamonds.png)">
	  <script defer src="js/fontawesome.js" ></script>
    <script defer src="js/solid.js"></script>
	  <script src="js/sweetalert2.js"> </script>
	    <script src="js/jquery-3.2.1.min.js"></script>
		   <script src="graphs/js/chart.js"></script>
	    <script src="graphs/js/jquery.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/popper.min.js"></script> 
	<script src="js/bootstrap-4.0.0.js"></script>
	  
	  
  	<!-- body code goes here -->
 <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar" style="background-color: transparent !important; color: black;">
			<?php
			$fetch = mysqli_query($db,"SELECT * FROM user");
			$sql = mysqli_fetch_array($fetch);
			?>
			
            <div class="sidebar-header " style="background-color: white !important;">
                <!-- <h5 class="lead">You are logged in as</h5> -->
				<h6 class=" text-warning brand-small text-center lead"><?php echo $_SESSION['name']; ?>&nbsp;<?php echo $_SESSION['surname'];?>&nbsp; <code class="d-none d-sm-block "><?php echo $_SESSION['role'];?></code>  </h6>
              
			</div>
			 
			
            <ul class="no-underline components">
                <li class="">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" c>
                        <i class="fa fa-home"></i>
                        Home
                    </a>
                  
                </li>
				<?php
				if($_SESSION['role']=='user')
				{
					?>
				
	
				 <li>
					   
                    <a href="fetch_tables.php" >
                        <i class="fas fa-ambulance"></i>
                        Diagnosis
                    </a>
                </li>
				
					 <li>
					   
                   <a href="#"  data-toggle="modal" data-target="#myModal">
                       <i class="fas fa-arrow-right"></i>
					   Bookings
                        </a>
                  
                </li>
				
					 <li>
					   
                   <a href="#"  data-toggle="modal" data-target="#myModaresults">
                       <i class="fas fa-balance-scale"></i>
					   Results & Prescription 
                        </a>
                  
                </li>
				
				<?php
					
					}
				?>
				<?php 
				if($_SESSION['role']=='doctor' )
				{
					?>
				
				   <li>
					   
                    <a class="btn" data-toggle="modal" data-target="#myModal" >
                        <i class="fas fa-calendar"></i>
                        Calender
						</a>
                </li>
				
				  <li>
					   
                    <a href="graphs/reports.php" >
                        <i class="fas fa-file"></i>
                        	Reports
                    </a>
                </li>
			
				 
				<?php
					
					
					}
				?>
					   
				
									<?php if($_SESSION['role']=='admin')
{
	

				?>
                <li>
                   
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-copy"></i>
                        Accounts
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href=""  data-toggle="modal" data-target="#myModaladmin">Add admin</a>
                        </li>
                        <li>
                            <a href=""  data-toggle="modal" data-target="#myModaldoc">Add doctor</a>
                        </li>
                        
                    </ul>
                </li><br>
				<form role="form" method="post" action="overal.php">
				<input type="submit" name="report" value="Print overal report" class="btn btn-info btn-block" >
			</form>
              
				
				<?php
	
	
}
				?>
            </ul>

            
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse "  id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="main.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="fetch_tables.php">Diagnosis</a>
                            </li>
                          
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
			
			
			

			<?php 
			if($_SESSION['role']=="doctor")
				
			{
					$merlz = mysqli_query($db,"SELECT * FROM bookings WHERE doc_id= '".$_SESSION['doc_id']."' ");
					$default = mysqli_query($db,"SELECT password FROM user WHERE identity_number='".$_SESSION['doc_id']."'");
					
				$trying = mysqli_fetch_array($default);
				
				if($trying['password']== md5('0000'))
				{
					
				?>
			
		<body onLoad="$('#my-modal').modal('show');">
    <div id="my-modal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
					 <h4 class="modal-title">Change your password</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               
                </div>
                <div class="modal-body">
					<form role="form" method="post" action="#">
                    <input type="text" id="docid" class="form-control" value="<?php echo $_SESSION['doc_id'];  ?>"  placeholder="Doc id" readonly><br>
					<input type="password" id="password" class="form-control" placeholder="Password" required><br>
					<input type="password" id="confirm" class="form-control" placeholder="Confirm Password" required><br>
					<input type="button" id="change" class="btn btn-dark btn-block" value="Change" ><br>
					
						</form>
					
					
		
                </div>
            </div>
			
			
        </div> 
		
    </div>
					<script type="text/javascript">
					$(document).ready(function(){
						
						   $("#change").on('click',function()
									{
						   var docid = $("#docid"). val();
						   var password = $("#password"). val();
						   var confirm = $("#confirm"). val();
						
						   
						   
						   
						if(docid == "" || password== "" || confirm== "" )
							{
								Swal.fire({
									
									type:'error',
									title: 'Error massage',
									text: 'Fill in all fileds'
									
									
								})
							}
						   
						   else
							   {
								   $.ajax(
								   {
									   url: 'code.php',
									   method: 'POST',
									   data:{
										  change:1 ,
										   docidJs:docid,
										   passwordJs: password,
										   confirmJs: confirm,
										  
										   
										   
									   },
									   
									   success: function(data)
									   {
									   if(data=="success")
										   {
											   Swal.fire(
											   {
												   type:'success',
												   title: 'Message',
												   text: data,
												
											   })
											   
											  
											   
										   }
										   if(data=='failed')
											   {
												  Swal.fire(
											   {
												   type:'error',
												   text: data,
												   title: 'Match your logins',
												   
												   
												   
											   }) 
											   }
										   
										 
										   
								   }
									   
									   
								   }
								   )
							   }
					   
					   
					   })
						
						
						
						
					});
					
					</script>
</body>
			<?php
				}
				else{
					
			
				?>
			<!----=====doc pages=====--->
	
		
			<div class="row">
						
						
			 <table class="table table-hover table-bordered">
    <thead>
      <tr>
        <th>Patient Name</th>
        <th>Surname</th>
		  <th>Diagnosis results</th>
        <th>Apointment Date</th>
		  <th>Time</th>
		  <th>Status</th>
		  <th>Upload results</th>
		  <th>Attend</th>
		  <th>Remove</th>
		 
      </tr>
    </thead>
    <tbody>
		<?php 
		
		while($data = mysqli_fetch_array($merlz))
		{
		
		?>
      <tr>
        <td><?php echo $data['patient_name'] ?></td>
        <td><?php echo $data['patient_lastname'] ?></td>
		<td><?php echo $data['stage'] . "% - " . ucwords(str_replace("_", " ", $data['diseases'])) ?></td>
        <td><?php echo $data['date'] ?></td>
		  <td><?php echo $data['time'] ?></td>
		  <?php 
			$dbdate = $data['date'] ;
			$currentdate = date("Y-m-d");
			if($currentdate<=$dbdate)
			{
				?>
		  <td><div class="text-success">Active</div></td>
		  <?php
			}
			else
			{
				?>
		    <td><div class="text-danger">Expired</div></td>
		  <?php
			}
		  ?>
		 
		  <?php
		  
		  ?>
		  <td><a href="doc_results.php?results=<?php echo $data['identity_number'];?>" class="btn btn-info">Upload</a></td>
		  
		  <td><a   href="code.php?attend=<?php echo $data['id'];?>" class="btn btn-success">Attended</a></td>
		  <td><a href="code.php?delete=<?php echo $data['id'];?>" class="btn btn-danger">Delete</a></td>
		
      </tr>
     <?php
				}
			?>
    </tbody>
  </table>
				
				
				
		<?php
					include('functions_doc.php');
					include('dbConfig.php');
					?>
				
<!-- Calender  Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header bg-info">
          <h4 class="modal-title text-center ">Your appointments</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="col-lgg ">
        
       
          
          <div id="calendar_div">
	<?php echo getCalender(); ?>
</div>

          
            
      </div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
  <!----- end of calender modal--->
		 				
		
			</div>
			
			
			
	<!----	====== end of doc pages ======	--->
			<?php
					}
			}
			elseif($_SESSION['role']=="user"){
				
			
			?>
				<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
			
				  
	   <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title text-center">Your bookings</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <table class="table table-bordered  table-hover">
    <thead>
      <tr>
        <th>Doctor</th>
        <th>Date</th>
        <th>Time</th>
		  <th>Status</th>
		  <th>Action</th>
      </tr>
    </thead>
    <tbody>
		<?php
		
		$iphoneX = mysqli_query($db,"SELECT * FROM bookings WHERE identity_number='".$_SESSION['doc_id']."' ");		
		
		while($ipad = mysqli_fetch_array($iphoneX))	
		{
			// Get doctor's name and surname
			$doctor_query = mysqli_query($db, "SELECT * FROM doctor WHERE doc_id='" . $ipad['doc_id'] . "'");
			$doctor = mysqli_fetch_array($doctor_query);
	
		?>
      <tr>
	  	<td><?php echo $doctor['name'] . ' ' . $doctor['surname'] . ' - ' .  ucwords(str_replace("_", " ", $doctor['speciality'])); ?></td>
        <td><?php echo $ipad['date'] ?></td>
        <td><?php echo $ipad['time'] ?></td>
		  
		  <?php
			$dateq = $ipad['date'];
			$currentdate1 = date("Y-m-d");
			if($currentdate1<=$dateq)
			{
			
			?>
		  
		  <td><div class="text-success">Active</div></td>
			<?php
				
			}
				else
				{
					?>
		  <td><div class="text-danger">Expired</div></td>
						<?php
				}
				
				?>
						
		  <td><a href="code.php?cancel=<?php echo $ipad['booking_id']  ; ?>" type="button" class="btn btn-danger" >Cancel</a></td>
		  
      </tr>
		<?php
			
				}
				?>
     
    </tbody>
  </table>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
			
			
			<!----------------- results modal----------------------->
			
			  <div class="modal fade" id="myModaresults">
    <div class="modal-dialog ">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header bg-info">
          <h4 class="modal-title text-center ">Results and Prescription </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
  		
			  <table class="table table-bordered">
    <thead>
      <tr>
      <!--  <th>Results</th>--->
       <!-- <th>Prescription</th>--->
		 <!--  <th>Quantity</th>--->
       <!--- <th>Description</th>--->
		 <th>Date</th>
		  <th>Print results</th>
		  
		 <th>Print Prescription</th>
      </tr>
    </thead>
    <tbody>
		<?php 
				$id = $_SESSION['doc_id'];
				
				
				$variable = mysqli_query($db,"SELECT * FROM patient_results WHERE 	identity_number='$id' ");
				while($php = mysqli_fetch_array($variable))
				{
					
				
				?>
      <tr>
      <!--  <td><?php //echo $php['results'] ;?></td>-->
     <!--     <td><?php //echo $php['presriptions']; ?></td> --->
		<!--  <td><?php // echo $php['quantity']; ?></td> --->
		   <!-- <td><?php //echo $php['how_to_use']; ?></td> -->
		  <td><strong><?php
					$date = $php['date'] ;
					$dt = new DateTime($date);

					echo $dt->format('Y-m-d');
					?></strong></td>
		  <td>
			  <a href="results_print.php?results=<?php echo $php['results_id'] ?>"  class="btn btn-danger btn-sm" target="_blank" >
			  <i class="fa fa-print " aria-hidden="true"></i>
			  </a>
		  </td>
		  <td>
		  <a href="prescription.php?prescr=<?php echo $php['results_id'] ?>"  class="btn btn-primary btn-sm" target="_blank" >
			  <i class="fa fa-print " aria-hidden="true"></i>
			  </a>
		  </td>
      </tr>
		
		<?php
					}
				?>
    
    </tbody>
  </table>

        </div>
        
        <!-- Modal footer -->
       
        
      </div>
    </div>
  </div>
  
			<!------------------end of results modal---------------->
			
			<div class="container" style="max-width:800px">
    <div id="carouselContent" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active text-center p-4">
			<p>
				Lifestyle diseases are ailments that are primarily based on the
				day to day habits of people. Habits that detract people from activity
					and push them towards a sedentary routine can cause a number of
				health issues that can lead to chronic non-communicable diseases
					that can have near life-threatening consequences. </p>
            </div>
            <div class="carousel-item text-center p-4">
                
                <p>Behavioural risk factors
such as excessive use of alcohol, bad food habits, eating and
smoking tobacco, physical inactivity, wrong body posture and
disturbed biological clock increase the likelihood of NCDs. The
modern occupational setting (desk jobs) and the stress related to
work is also being seen as a potent risk factor for NCDs.</p>
            </div>
			<div class="carousel-item text-center p-4">
			According to the WHO, more than 7 million people die each
year due to the use of tobacco and the fatality rate is projected to
increase markedly in the years to come. Excessive use of sodium
in the diet causes 4.1 million deaths per year while alcohol intake
leads to around 1.65 million deaths due to NCDs. A simple lack
of physical activity has been claiming 1.6 million lives annually.	
			</div>
			<div class="carousel-item text-center p-4">
			Risk factors that cannot be
			controlled or modified by the application of an intervention can
			be called non-modifiable risk factors and include age, race, gender and genetics.
			</div>
			
        </div>
        <a class="carousel-control-prev" href="#carouselContent" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselContent" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
           
			


			<!-- Projects Row -->
			<div class="row" >
				<div class="col-4 portfolio-item" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					<a href="#">
						<img class="img-fluid" src="img/project dash7.png" alt="" style="max-height: 600">
					</a>
					
				</div>
				<div class="col-4 portfolio-item" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					<a href="#">
						<img class="img-fluid" src="img/project dash2.png" alt="" style="max-height: 600px">
					</a>
					
				</div>
				<div class="col-4 portfolio-item" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					<a href="#">
						<img class="img-fluid" src="img/project dash3.png" alt="" style="max-height: 600px">
					</a>
					
				</div>
				<div class="col-4 portfolio-item" style="visibility: visible; -webkit-animation-delay: 0.4s;" >
					<a href="#">
						<img class="img-fluid" src="img/project dash4.png" alt="" style="max-height: 600px">
					</a>
					
				</div>
				<div class="col-4 portfolio-item" >
					<a href="#">
						<img class="img-fluid" src="img/project dash5.png" alt="" style="max-height: 600px">
					</a>
					
				</div>
				<div class="col-4 portfolio-item" >
					<a href="#">
						<img class="img-fluid" src="img/project dash6.png" alt="" style="max-height: 600px">
					</a>
					
				</div>
        </div>
        <!-- /.row -->

       
        
<!-- 
            <div class="line"></div>
            <h2>Causes</h2>
            <p class="text-center">
				<h5></h5>
The causes of NCDs can be divided into three broad categories:
modifiable behavioural risk factors, non-modifiable risk factors
and metabolic risk factors.<br><br>

			<div class="row d-none d-sm-block">
			<div class="card col-md-4">
<h5><b>Modifiable behavioural risk factors</b></h5>Behavioural risk factors
such as excessive use of alcohol, bad food habits, eating and
smoking tobacco, physical inactivity, wrong body posture and
disturbed biological clock increase the likelihood of NCDs. The
modern occupational setting (desk jobs) and the stress related to
work is also being seen as a potent risk factor for NCDs.
<br>
According to the WHO, more than 7 million people die each
year due to the use of tobacco and the fatality rate is projected to
increase markedly in the years to come. Excessive use of sodium
in the diet causes 4.1 million deaths per year while alcohol intake
leads to around 1.65 million deaths due to NCDs. A simple lack
of physical activity has been claiming 1.6 million lives annually.
			<br><br>
			</div>
				
					<div class=" card col-md-4 ">
					<h5><b>Non-modifiable risk factors</b></h5>
			
			Risk factors that cannot be
			controlled or modified by the application of an intervention can
			be called non-modifiable risk factors and include:
			<br>
			a. Age
						<br>
			b. Race
						<br>
			c. Gender
						<br>
			d. Genetics
						<br><br>
					</div>
					<div class="card col-md-4">
						
<h5><b>Metabolic risk factors</b></h5>
			Metabolic risk factors lead to four major
changes in the metabolic systems that increase the possibility of
NCDs:
			<br>
i. Increased blood pressure
			<br>
ii. Obesity
			<br>
iii. Increased blood glucose levels or hyperglycemia
			<br>
iv. Increased levels of fat in the blood or hyperlipidemia
			<br>
Increased blood pressure is the leading metabolic risk factor
globally with 19% of the global deaths attributed to it, followed
by obesity and hyperglycermia.</p>
					</div>
				
			</div>


            <div class="line"></div>

            <h2>Major Lifestyle Dieases </h2>
            <p>
				<H5></H5>
	A. Heart disease<br>
B. Stroke
				<br>
C. Diabetes
				<br>
D. Cancer
				<br>
				
	 </p> -->
	  

  <!--- admin page --->
	  
<?php
				}
			elseif($_SESSION['role']=='admin')
			{
				
				$admin = mysqli_query($db,"SELECT * FROM user");
				
				
				?>
	  
	  <div class="card-header bg-info text-center">Sysem users</div>  <br>
	  
	    <table class="table  table-hover">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Identity Number</th>
		 <th>Phone</th>
		  <th>Region</th>
		  <th>Role</th>
		  <th>Action</th>
      </tr>
    </thead>
    <tbody>
		<?php while($row = mysqli_fetch_array($admin) )
					{
						
					 ?>  
      <tr>
        <td><?php echo $row['name'] ;?></td>
        <td><?php echo $row['surname'] ;?></td>
        <td><?php echo $row['identity_number'] ;?></td>
		  <td><?php echo $row['phone'] ;?></td>
		  <td><?php echo $row['region'] ;?></td>
		  <td><?php echo $row['role'] ;?></td>
		  <td><button id="<?php echo $row['identity_number']?>"  class="btn btn-danger bt"><i class="fa fa-trash"></i></button></td>
      </tr>
		
		<?php
					
					}
				?>
      
    </tbody>
  </table>
	  <script type="text/javascript">
	  $(document).ready(function()
					   
					   
					   
					   
					   {
		  
		  $('.bt').click(function(){
			  
			  var th = $(this);
			  var id = $(this).attr("id");
			  
			  
		  Swal.fire({
			  title: 'Are you sure?',
			  text: "You won't be able to revert this!",
			  type: 'warning',
			  showCancelButton: true,
			  confirmButtonColor: '#3085d6',
			  cancelButtonColor: '#d33',
			  confirmButtonText: 'Yes, delete it!'
			}).then((result ) => {
			  
			  
			    $.ajax({
				  url:'code.php',
				  method: 'POST',
				  data: {
					  idJs:id 
					  
					  
				  },
				  succes:function(data)
				  {
					 th.parents('tr').hide();
					  
				  }
				  
				  
			  })
			  
			  if(result.value)
				  {
					  
				
				Swal.fire(
				  'Deleted!',
				  'Your file has been deleted.',
				  'success'
				)
					    }
			 
			  
			})
			  
			  
			  
			  
			
		
			  
		  });
		  
		  
	  });
	  
	  
	  
	  </script>
	  
	  <!------- new admin =================--->
	  
	

  <!-- Modal -->
  <div class="modal fade" id="myModaladmin" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
         
          <h4 class="modal-title">Add admin</h4>
        </div>
        <div class="modal-body">
          <form role="form" method="post" action="">
			  	 <script type="text/javascript">
		  function onward(d){
			  
			  var zita = document.getElementById(d);
			  var regex = /[^a-z ]/gi;
			  zita.value = zita.value.replace(regex,"");
			  
		  }
				 

		  </script>
			<input type="text" id="name1" placeholder="Name" onKeyUp="onward('name1')" onKeyDown="onward('name1')"  class="form-control" required><br>
			  
			  
			   	 <script type="text/javascript">
		  function hack(d){
			  
			  var surname = document.getElementById(d);
			  var regex = /[^a-z ]/gi;
			  surname.value = surname.value.replace(regex,"");
			  
		  }
				 

		  </script>
			  
		   <input type="text" id="surname1" placeholder="Surname" onKeyUp="hack('surname1')" onKeyDown="hack('surname1')" class="form-control" required><br>
			<input type="password" id="pass" placeholder="Password" class="form-control" required><br>
		  <input type="button" id="admin" value="Add" class="btn btn-dark btn-block">
		 
		  </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
	  
	  
	 
	  
  </div>
	  
	  <script type="text/javascript">
	  
				   $(document).ready(function()
									{
					   $("#admin").on('click',function()
									{
						   var name = $("#name1"). val();
						   var surname = $("#surname1"). val();
						   var pass = $("#pass"). val();
					
							   
						   
						if(name == "" || surname== "" || pass== "" )
							{
								Swal.fire({
									
									type:'error',
									title: 'Error massage',
									text: 'Fill in all fileds',
								
									
									
								})
								
							
							
							}
						

						   
						   else
							   {
								   $.ajax(
								   {
									   url: 'code.php',
									   method: 'POST',
									   data:{
										  admin:1 ,
										   nameJs:name,
										   surnameJs: surname,
										   passJs: pass,
										  
									   },
									   
									   success: function(data)
									   {
									   if(data=="Admin succefully created ")
										   {
											   Swal.fire(
											   {
												   type:'success',
												   tittle: 'Message',
												   text: data,
											   })
										   }
										   
										   if(data=="Admin already in the system")
											   {
												 swal.fire(
												 {
													 type: 'error',
													 title: 'Error!',
													 text: data,
												 }
												 
												 )
											   }
										   
										 
								   }
									   
									   
								   }
								   )
							   }
					   
					   
					   })
					   
				   });
				   
				   

	  
	  
	  </script>
	  
	  
	  	<!---- new doc =====================----->
		

  <!-- Modal -->
  <div class="modal fade" id="myModaldoc" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add doctor</h4>
        </div>
        <div class="modal-body">
        	  <form role="form" method="post" action="">
				
				   	 <script type="text/javascript">
		  function onward(d){
			  
			  var zita = document.getElementById(d);
			  var regex = /[^a-z ]/gi;
			  zita.value = zita.value.replace(regex,"");
			  
		  }
				 

		  </script>
				  
	<input type="text" id="name" placeholder="Name" class="form-control" onKeyUp="onward('name')" onKeyDown="onward('name')" required><br>
				  
				  
				     	 <script type="text/javascript">
		  function onward(d){
			  
			  var zita = document.getElementById(d);
			  var regex = /[^a-z ]/gi;
			  zita.value = zita.value.replace(regex,"");
			  
		  }
				 

		  </script>
		   <input type="text" id="surname" placeholder="Surname" class="form-control" onKeyUp="onward('surname')" onKeyDown="onward('surname')" required><br>
				  
				  
				  
			  <input type="text" id="phone" placeholder="Phone number" maxlength="10" placeholder="0770000000" class="form-control" required><br>
			  <select id="sex" class="form-control">
			  <option selected disabled>Sex</option>
				  <option>Male</option>
				  <option>Female</option>
			  
			  </select><br>
		<!--  <input type="text" name="id" placeholder="doc id " class="form-control" required><br>-->
	<select id="spec"  class="form-control">
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
		  <select id="region" class="form-control">
			  
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
			  
			  <input type="button" id="doc" class="btn btn-dark btn-block" value="Add">
		 
		  </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>	
			
	  
		 	   <script type="text/javascript" >
	
				   $(document).ready(function()
									{
					   $("#doc").on('click',function()
									{
						   var name = $("#name"). val();
						   var surname = $("#surname"). val();
						   var phone = $("#phone"). val();
						   var sex = $("#sex"). val();
						   var spec = $("#spec"). val();
						    var region = $("#region"). val();
						   
						   
						   
						   
						if(name == "" || surname== "" || phone== "" || sex== "" || spec== "" || region== "" )
							{
								Swal.fire({
									
									type:'error',
									title: 'Error massage',
									text: 'Fill in all fileds',
								
									
									
								})
								
							
							
							}
						

						   
						   else
							   {
								   $.ajax(
								   {
									   url: 'code.php',
									   method: 'POST',
									   data:{
										  doc:1 ,
										   nameJs:name,
										   surnameJs: surname,
										   phoneJs: phone,
										   sexJs: sex,
										   regionJs : region,
										   specJs: spec,
										
										   
										   
									   },
									   
									   success: function(data)
									   {
									   if(data=="Doctor successfully created")
										   {
											   Swal.fire(
											   {
												   type:'success',
												   tittle: 'Message',
												   text: data,
											   })
										   }
										   
										   if(data=="Failed to create doctor")
											   {
												 swal.fire(
												 {
													 type: 'error',
													 title: 'Error!',
													 text: data,
												 }
												 
												 )
											   }
										   
										 
										   if(data=="please correct your phone number format as required")
											   {
												    Swal.fire({
													 type: 'warning',
													 title: 'Warning!',
													 text: data,
													 
													 
												 }) 
											   }
										
										   
								   }
									   
									   
								   }
								   )
							   }
					   
					   
					   })
					   
				   });
				   
				   
	  </script>
	  
	  <!------ REPORTS ======--------------->
	 <!-- <div id="wrapper">

    

      <div id="content-wrapper">

        <div class="container-fluid">

      
         

         
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-chart-area"></i>
              Bar graph</div>
            <div class="card-body">
              <div class="container" style="padding-top:5px">
        <canvas id="myChart" style="position: relative; height:15vh; width:40vw"></canvas>
      </div>
   
      <div class="container colmd-6" style="padding-top:10px">
        <canvas id="myChart" style="position: relative; height:10vh; width:5vw"></canvas>
      </div>
    
					
				
            </div>
            <div class="card-footer small text-muted">Report based on Region</div>
          </div>

          <div class="row">
            <div class="col-lg-8">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-bar"></i>
                  Line Chart </div>
                <div class="card-body">
                 <div class="container colmd-6" style="padding-top:10px">
        <canvas id="myChart1" style="position: relative; height:3vh; width:5vw"></canvas>
      </div>
    
				
				
					
					
					
                </div>
                <div class="card-footer small text-muted">Report based on Age</div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-pie"></i>
                  Pie Chart </div>
                <div class="card-body">
              
					          <div class="container colmd-6" style="padding-top:10px">
        <canvas id="myChart2" width="100%" height="77" ></canvas>
      </div>
    
				
                </div>
                <div class="card-footer small text-muted">Report based on Sex</div>
              </div>
            </div>
          </div>
	

       
        </div>
   

        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © MoHCC Medical diagnisis surport system for lifestyle deseases 2023</span>
            </div>
          </div>
        </footer>

      </div>
    

    </div>-->
	  
	  <!-----====END =====------------------>
	  <?php
				
				
			}
				
				?>
           <!----admin end page---->
	  
	  
	  
	  
        </div>

	
    </div>


	  

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
		
		

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

    </script>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	
  </body>
</html>