<?php
session_start();
if(!isset($_SESSION['name'])){
	//return home
	header("location:../index.php");
	die ("No session reload your page");

}
else{
	
	}

//================REGION GRAPH===========================================================================================
$cn = mysqli_connect("localhost","root","","MOHC");
 //Clean table to avoid duplicates
 $trun=$cn->query("TRUNCATE TABLE  `graph`");
 //Prepare graph
 $select_values=mysqli_query($cn,"SELECT DISTINCT(region) FROM attended ");
 while($row=mysqli_fetch_array($select_values)){
  //Select and Count
 $condition=$row['region'];
	// $condition = $row['sex'];
	 
  $select1=mysqli_query($cn,"SELECT region FROM attended WHERE region='$condition' AND doc_id='".$_SESSION['doc_id']."' ");
  //Count
  $number=mysqli_num_rows($select1);
 
//INSERT INTO TABLE
$feed=$cn->query("INSERT INTO `MOHC`.`graph` (`id`, `string_value`, `value`,`doc_id`) VALUES (NULL, '$condition', '$number','".$_SESSION['doc_id']."')");

 }

//===========================================END REGION GRAPH =============================================
//===========================================   SEX GRAPH        =============================================



$con = mysqli_connect("localhost","root","","MOHC");
 //Clean table to avoid duplicates
 $trun=$con->query("TRUNCATE TABLE  `graph_sex`");
 //Prepare graph
 $values=mysqli_query($cn,"SELECT DISTINCT(sex) FROM attended ");
 while($fetch=mysqli_fetch_array($values)){
  //Select and Count
 $sex=$fetch['sex'];
	 
	// $condition = $row['sex'];
	 
  $final=mysqli_query($con,"SELECT sex FROM attended WHERE sex='$sex' AND doc_id='".$_SESSION['doc_id']."' ");
  //Count
  $maziso =mysqli_num_rows($final);
	// echo $maziso;
 
//INSERT INTO TABLE
$isa=$con->query("INSERT INTO `MOHC`.`graph_sex` (`id`, `string_value`, `value`,`doc_id`) VALUES (NULL, '$sex', '$maziso','".$_SESSION['doc_id']."')");

 }


//===========================================END SEX GRAPH =============================================
//================AGE GRAPH===========================================================================================

 //Clean table to avoid duplicates
 $trun=$con->query("TRUNCATE TABLE  `graph_age`");
 //Prepare graph
 $select_values=mysqli_query($cn,"SELECT DISTINCT(age) FROM attended ");
 while($row=mysqli_fetch_array($select_values)){
  //Select and Count
 $condition=$row['age'];
	// $condition = $row['sex'];
	 
  $select1=mysqli_query($con,"SELECT age FROM attended WHERE age='$condition' AND doc_id='".$_SESSION['doc_id']."' ");
  //Count
  $number=mysqli_num_rows($select1);
 
//INSERT INTO TABLE
$feed=$cn->query("INSERT INTO `MOHC`.`graph_age` (`id`, `string_value`, `value`,`doc_id`) VALUES (NULL, '$condition', '$number','".$_SESSION['doc_id']."')");

 }

//===========================================END AGE GRAPH =============================================

?>
<!DOCTYPE html>
<html lang="en"><head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Reports</title>
 	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  	<link href="css/sb-admin.css" rel="stylesheet">
	
	<!--<link href="css/bootstrap.min.css" rel="stylesheet">--->
	<!--<link href="css/style.css" rel="stylesheet">--->


  </head>

  <body id="page-top ">

	<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
	<script src="js/sb-admin.min.js"></script>
	  <script src="js/bootstrap.min.js"></script>
	  <script src="js/chart.js"></script>
	  <script src="js/jquery.js"></script>
	  
	  
	<?php 
	  
	  //include('../connection.php');
	  $db=mysqli_connect("localhost","root","","MOHC") OR die("HHHHHHHH");
	  
	  ?>

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
	<a href="" class="navbar-brand">Curado</a>
     
	
      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

    	
		
			  <ul class="navbar-nav ml-auto">
	   <li class="nav-item">
        <a class="nav-link" href="#"><h6 class="text-white">You are logged in as <?php echo $_SESSION['name']; ?>&nbsp;<?php echo $_SESSION['surname'];?></h6></a>
      </li>
	  
	  </ul>
		
		

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav  " style="color: #7386D5">
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
     
        <li class="nav-item active">
          <a class="nav-link" href="../main.php">
            <i class="fas fa-fw fa-home"></i>
            <span>Home</span></a>
        </li>
		  
        <li class="nav-item">
          <a class="nav-link" href="../logout.php">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Charts</li>
			  <li class=" ml-auto">
			  <form method="post" action="region.php">
				  
  				<input type="submit" class="btn btn-danger " name="btn" value="Printable reports" target="_blank">
			  </form>
			  </li>
          </ol>

          <!-- Area Chart Example-->
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
    
				<script type="text/javascript">
   
		var ctx = document.getElementById("myChart").getContext('2d');
      var myChart = new Chart(ctx, {
	 
	  type: 'bar',
	   
	  
	 
      
	   // labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"], //type: 'bar',
	  
        data: {
            labels: [<?php        
$sqlx1 = mysqli_query($cn,"select * from  graph WHERE doc_id='".$_SESSION['doc_id']."' ");//This is x-axis blessings
while($row1 = mysqli_fetch_array($sqlx1))
{
$mynum1=$row1['string_value'];
echo "'".$mynum1."',";
}
?>],
            datasets: [{
                label: '# ',
                data: [	<?php        
$sqlx2 = mysqli_query($cn,"select * from  graph ");//This is x-axis blessings
while($row2 = mysqli_fetch_array($sqlx2))
{
$mynum2=$row2['value'];
echo "'".$mynum2."',";
}
?>],//javascript change here
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            },
            title: {
              display:true,
             /* text: 'REPORTS',*/
              bold:true
            }
        }
      });
		
    </script>
				
				
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
    
				<script type="text/javascript">
   
		var ctx = document.getElementById("myChart1").getContext('2d');
      var myChart = new Chart(ctx, {
	 
	  type: 'line',
	   
	  
	 
      
	   // labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"], //type: 'bar',
	  
        data: {
            labels: [<?php        
$sqlx = mysqli_query($con,"select * from  graph_age WHERE doc_id='".$_SESSION['doc_id']."' ");//This is x-axis blessings
while($rw = mysqli_fetch_array($sqlx))
{
$my=$rw['string_value'];
echo "'".$my."',";
}
?>],
            datasets: [{
                label: '# ',
                data: [	<?php        
$sql = mysqli_query($cn,"select * from  graph_age ");//This is x-axis blessings
while($rw2 = mysqli_fetch_array($sql))
{
$mynum2=$rw2['value'];
echo "'".$mynum2."',";
}
?>],//javascript change here
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            },
            title: {
              display:true,
              /*text: 'REPORTS',*/
              bold:true
            }
        }
      });
		
    </script>
				
					
					
					
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
                <!--  <canvas id="myPieChart" width="100%" height="100"></canvas>-->
					          <div class="container colmd-6" style="padding-top:10px">
        <canvas id="myChart2" width="100%" height="77" ></canvas>
      </div>
    
				<script type="text/javascript">
   
		var ctx = document.getElementById("myChart2").getContext('2d');
      var myChart = new Chart(ctx, {
	 
	  type: 'pie',
	   
	  
	 
      
	   // labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"], //type: 'bar',
	  
        data: {
            labels: [<?php        
$sqlx = mysqli_query($con,"select * from  graph_sex WHERE doc_id='".$_SESSION['doc_id']."' ");//This is x-axis blessings
while($rw = mysqli_fetch_array($sqlx))
{
$my=$rw['string_value'];
echo "'".$my."',";
}
?>],
            datasets: [{
                label: '# ',
                data: [	<?php        
$sql = mysqli_query($cn,"select * from  graph_sex ");//This is x-axis blessings
while($rw2 = mysqli_fetch_array($sql))
{
$mynum2=$rw2['value'];
echo "'".$mynum2."',";
}
?>],//javascript change here
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            },
            title: {
              display:true,
             
              bold:true
            }
        }
      });
		
    </script>
                </div>
                <div class="card-footer small text-muted">Report based on Sex</div>
              </div>
            </div>
          </div>
	

       
        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Curado Medical diagnosis surport system for lifestyle deseases 2023</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>



  </body>

</html>
