<?php session_start() ;
error_reporting(0);
$table_name=$_GET['value'];

if($table_name!="")
{
	

$_SESSION['TABLE']=$table_name;
	
	
}


$table = $_SESSION['TABLE'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Diagnosis page</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap-4.0.0.css" rel="stylesheet">
	  <link href="css/algoithim.css" rel="stylesheet">
	
	  
	
  </head>
  <body  class="" style="background-image: url(img/diamonds.png)" >
	  
	  
	  <body onLoad="$('#my-modal').modal('show');" >
<div id="my-modal" class="modal fade" style="background-color: transparent; border-style: none; background-image: url(img/diamonds.png)">
    <div class="modal-dialog modal-lg" style="background-color: transparent; border-style: none; background-image: url(img/diamonds.png)">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header" style="background-color: transparent; border-style: none; background-image: url(img/diamonds.png)">
          <h4 class="modal-title" ><div class="text-center">Select Appropriate Response</h4>
          <a href="fetch_tables.php" type="button" class="close" >&times;</a>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body" style="background-color: transparent; border-style: none; background-image: url(img/diamonds.png)">
  	<!-- body code goes here -->

	  <div class="container-fluid">
		  
		
	
			
				  <div class="col-lg-8mx-auto">	
				
<?php

include('connection.php');
			  
				
				
				
					if(isset($_GET['page']))
{
	$page = $_GET['page'];
}
else
{
	$page=1;

}
	
	 
if($page==''|| $page==1)
{
	$page1=0;
}
else
	
	$page1= ($page*1)-1;
					  
					  
					  
					
$qry = mysqli_query($db,"SELECT * FROM $table  ORDER BY id ASC LIMIT $page1 ,1");
$next= $page+1;

while($fetch= mysqli_fetch_array($qry))
{
	$symptom = $fetch['symptom'] ;
echo "<div class='alert alert-info' > <strong> $symptom </strong><br></div>";
	 $_SESSION['id'] =$fetch['id'];
	
?>
					  					  

			
					  <form role="form" method="post" action="" >
		
						 
						<p align="center"> <label class="form-check-label"> <input type="radio" required name="no" value="1" class="form-control form-control-lg">
							YES </label>&nbsp;&nbsp;
						  <label class="form-check-label"> <input type="radio" required name="no" value="0" class="form-control form-control-lg">
							NO </label></p>
								 
						  <?php
	
	if($next >=0 &&$next<=100)
{
	echo "<p align='center'><input type='submit' name='btn' value='submit' class='btn btn-success form-group' ></p>";
	
	
	


}
}
					  
					 					  
			$dic = mysqli_real_escape_string($db,$_POST['no']);
					  if(isset($_POST['btn']))
					  {
				 
					  if($dic!='')
					  {
						  
						  $zita =  $_SESSION['id'];
						   $update = mysqli_query($db,"UPDATE $table  SET value='$dic' WHERE id='$zita'  ");
						  echo "<script>  
						  
						  location.replace('?page=$next')
						  
						  
						  </script>";
						  
						/*  if($update)
						  {
							  echo "success";
						  }
						  
						  
						  else
							  
							  echo "failed";*/
						  		
	
						  
						  
					  }
					  
					   }
					 
					  
					  
		?>
						  </form>
						  
						  <?php
				  

echo "<br>";

$sql = mysqli_query($db,"SELECT * FROM $table ");

	

$count = mysqli_num_rows($sql);

$page_number = $count/1;
$prev = $page-1;
$next= $page+1;
					  
			  
//$result = $page+0;





if($prev >=1 && $prev<=7)
{
	//echo '<p align="center"><a href="?page='.$prev.'"  class="btn btn-outline-danger form-group"  >Prev </a> &nbsp;&nbsp;&nbsp;';
}
	

					  													

if($page1>=1)
{
	for($r=1;$r<=$page1;$r++)
	{
		$active = $r== $page ? '<class="active"': '';
		 '<a href="?page='.$r.'" '.$active.'>'.$r.'</a> ';
	}
}


//come back here 
					  
					 if($symptom=="")
					 {
						 
						 ?>
					  
					  <form role="form" method="post" action="result.php">
						 
						 
						<p align="center"><input type='submit' name='result' value='Result' class='btn btn-outline-success'> </p>
						
						  
						  	
					  </form>
					  
					  
					  
					  
					  <?php
					 }
						 
						
				  
				

?>


				      </div>

				
		
		  
		  </div>
			
			
			
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