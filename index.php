<!DOCTYPE html>
<?php session_start();
?>
<html lang="en">
  <head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap-4.0.0.css" rel="stylesheet">
	  <link href="css/global.css" rel="stylesheet">
	  <link href="css/sweetalert2.css" rel="stylesheet">

  </head>
  <body >
	  	<script src="js/jquery-3.2.1.min.js"></script>
	  	<script src="js/popper.min.js"></script> 
	<script src="js/bootstrap-4.0.0.js"></script>
	<script src="js/sweetalert2.js"> </script>
  	<!-- body code goes here -->
	  
	<div class="container-fluid bg" id="bg">
		<br>

		<!---	<i><h1 class="text-center text-white">LIFESTYLE DISEASES DIAGNOSES SYSTEM</h1> </i> -->
	
		<div class="col-md-5  mx-auto" style="border-style: none">
	

		<form role="form" method="post" action="#" class="form-container">
			
		<h1 class="text-center text-white">
			<img src="img/medlogo.png" height="80px" width="120px">
			<p><h3  class="text-dark text-center"><strong>SIGN IN</strong></h3></p>
			</h1><br>
		  <script type="text/javascript">
		  function clean(e){
			  
			  var id_num = document.getElementById(e);
			  var regex = /[^- a-z0-9]/gi;
			  id_num.value = id_num.value.replace(regex,"");
			  
		  }
		  
		  </script>
			<input type="text" id="id" placeholder="ID number Eg 63-14010149K-48" onKeyDown=" clean('id')" onKeyUp="clean('id')"  class="form-control "><br>
			<input type="password" id="pass" placeholder="Password"  class="form-control"><br><br>
			<input type="button" id="login"  class="btn btn-primary btn-block" value="Log In"  ><br>
			
				
							<p align="center">
								
	
								
<p align="center"><a type="button" class="text-danger" data-toggle="modal" data-target="#myModal1">
   <i class="text-nowrap"> New user? create account here</i>
  </a></p>

								
								
						
				</p>
 			</form>
		
<!---- Login page end ==== --->
  
        

        
    
    </div>
  </div>
		 
		 
		 
		 
			<!-----RECOVERY ------>
			<form role="form" method="post" action="code.php">
			
		

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"><p class="text-center">Account Recovery</p></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
			<input type="email" name="email" class="form-control" placeholder="Enter your Email"><br>
			<input type="password" name="pass" class="form-control" placeholder="New Password"><br>
			<input type="password" name="conf" class="form-control" placeholder="Conferm Password"><br>
		<p align="center">	<input type="submit" class="btn btn-outline-info" value="Recover" name="recover"></p>
			
        </div>
        
        <!-- Modal footer -->
       
        
      </div>
    </div>
  </div>
  </form>
			<!--------- END RECOVERY ----->
			
			<!------ NEW USER --------->
			<form role="form" method="post" action="#" name="form" >
			
			  <div class="modal" id="myModal1">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header bg-info">
          <h4 class="modal-title"> <p align="center">New Account</p></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body bg-light" >
		 
			 <script type="text/javascript">
		  function onward(d){
			  
			  var zita = document.getElementById(d);
			  var regex = /[^a-z ]/gi;
			  zita.value = zita.value.replace(regex,"");
			  
		  }
				 

		  </script>
			
			 <input type="text" class="form-control" id="name1" onKeyUp="onward('name1')" onKeyDown="onward('name1')" required placeholder="Name "><br>
			
			<script>
			 function lastname(f){
			  
			  var surname = document.getElementById(f);
			  var regex = /[^a-z ]/gi;
			  surname.value = surname.value.replace(regex,"");
			  
				 
		  }
				/*function dials(o)
				{
					var phone = document.getElementById(o);
					var regex = /^[0][7]\d{9}$/gi; 
					phone.value = phone.value.replace(regex,"")
				}*/
			</script>
		  <input type="text" class="form-control" id="surname" onKeyPress="lastname('surname')" onKeyDown="lastname('surname')" required placeholder="Surname"><br>
			<input type="tel" class="form-control" id="phone" maxlength="10"  placeholder="0770000000"><br>
			<!--<input type="" hidden="" onKeyDown="dials('phone')" onKeyUp="dials('phone')">-->
			<select id="sex" class="form-control" >
			<option selected disabled>Sex</option>
			<option>Male</option>
				<option>Female</option>
			</select><br>
			<!--id length validation-->
 			
			<!-- en id length validation-->
			
			 <script type="text/javascript">
		  function clean(e){
			  
			  var identity = document.getElementById(e);
			  var regex = /[^a-z0-9-]/gi;
			  identity.value = identity.value.replace(regex,"");
		 
			  
		  }
			 
		  
		  </script>
			<input type="text" class="form-control" id="identity"   onKeyDown="clean('identity')" onKeyUp="clean('identity')"  placeholder="National ID Number Eg 63-14010149K-48 " ><br>
			<?php
			$min = date("1950-01-01");
		
			$max = date("2003-10-24");
			?>
			<input type="date" class="form-control" id="dob" max="<?php echo $max?>" min="<?php echo $min?>" required><br>
			<select class="form-control" id="region" required >
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
			<!----  <input type="email" class="form-control" name="email" required placeholder="Email"><br>-->
		  <input type="password" class="form-control" id="password" required placeholder="Password "><br>
		  <input type="password" class="form-control" id="pass1" required placeholder="Confirm Password "><br>
		
			<p align="center">  <input type="button" class="btn btn-outline-success " id="btn1" value="Register" ></p>
			
        </div>
        
		 	   <script type="text/javascript" >
	
				   $(document).ready(function()
									{
					   $("#btn1").on('click',function()
									{
						   var name = $("#name1"). val();
						   var surname = $("#surname"). val();
						   var phone = $("#phone"). val();
						   var sex = $("#sex"). val();
						   var id = $("#identity"). val();
						   var dob = $("#dob"). val();
						    var region = $("#region"). val();
						   var pass = $("#password"). val ();
						   var pass1 = $("#pass1"). val();
						   
						   
						   
						if(name == "" || surname== "" || phone== "" || sex== "" || id== "" || dob== "" || region== "" || pass== "" || pass1== "")
							{
								Swal.fire({
									
									type:'error',
									title: 'Error massage',
									text: 'Fill in all fileds',
								})
							}
						
							if(pass1 !== pass)
												{
													Swal.fire({
														type: 'warning',
													 title: 'Warning!',
													 text: 'Passwords do not match!',
													})
												}
						   
						   else
							   {
								   $.ajax(
								   {
									   url: 'code.php',
									   method: 'POST',
									   data:{
										  btn1:1 ,
										   nameJs:name,
										   surnameJs: surname,
										   phoneJs: phone,
										   sexJs: sex,
										   idJs: id,
										   dobJs: dob,
										   regionJs : region,
										   passJs: pass,
										   pass1Js: pass1,
										   
										   
									   },
									  
									   
									   success: function(data)
									   {
									   if(data=="Account sucessfully created")
										   {
											   Swal.fire(
											   {
												   type:'success',
												   tittle: 'Message',
												   text: data,
											   })

											   window.location('main.php', _self);
										   }
										   
										   if(data=="User already exist")
											   {
												 swal.fire(
												 {
													 type: 'error',
													 title: 'Error!',
													 text: data,
												 }
												 
												 )
											   }
										   
										   if(data=="failed to create")
											   {
												 Swal.fire({
													 type: 'error',
													 title: 'Error!',
													 text: data,
													 
													 
												 })  
											   }
										   if(data=="please correct your phone number format as required")
											   {
												    Swal.fire({
													 type: 'warning',
													 title: 'Warning!',
													 text: data,
													 
													 
												 }) 
											   }
										   if(data=="please correct your identity number format as required")
											   {
												       Swal.fire({
													 type: 'warning',
													 title: 'Warning!',
													 text: data,
													 
													 
												 }) 
											   }
											   if(data=="success")
									{
										window:location="main.php";
									}
										   
										   
								   }
									   
									   
								   }
								   )
							   }
					   
					   
					   })
					   
				   });
				   
				   
	  </script>
        <!-- Modal footer -->
       
      </div>
    </div>
  </div>			
			</form>
			<!--END OF REG MODAL--->
			
    </div>
		
			</div>
	

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 




	<script type="text/javascript">
		
		$(document).ready(function()
					
						  {
			$("#login").on('click',function()
						  
						  {
				
							var id = $("#id"). val();
							var password = $("#pass"). val();
							
						if(id=="" || password=="")
							{
								
								Swal.fire({
									
									type:'error',
									title: 'Error massage',
									text: 'Fill in all fields'
									
									
								})
								
							}
				
				
						else
						{
							$.ajax({
								
								url: 'code.php',
								method: 'POST',
								data:{
									login:1,
									idJs: id,
									passJs : password,
								
								},
								
								success: function(data){
									
								if(data=="success")
									{
										window:location="main.php";
									}
									else
										{
												Swal.fire({
										
										type: 'error',
										title: 'Error!',
										text: data,
										
									})
										}
									
								},
								dataType: 'text'
							
							})
						}
				
			
				
						}
						  
						  
						  )
			
			
		});

</script>
	  
	
		
		</div>
	
  </body>
</html>