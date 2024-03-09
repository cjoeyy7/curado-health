<?php
error_reporting(0);
include('connection.php');
$_SESSION['error']='false';
if(isset($_POST['btn1']))
{
	
$name = mysqli_real_escape_string($db,$_POST['nameJs']);
$surname = mysqli_real_escape_string($db,$_POST['surnameJs']);
$id = mysqli_real_escape_string($db,$_POST['idJs']);
$dob = mysqli_real_escape_string($db,$_POST['dobJs']);
$region = mysqli_real_escape_string($db,$_POST['regionJs']);
//$email = mysqli_real_escape_string($db,$_POST['email']);
$phone = mysqli_real_escape_string($db,$_POST['phoneJs']);
$password = md5( mysqli_real_escape_string($db,$_POST['passJs']));
$confirm = md5($_POST['pass1Js']);
	$sex = mysqli_real_escape_string($db,$_POST['sexJs']);

/*$verify = mysqli_query($db, "SELECT * FROM citizens WHERE name='$name' and surname='$surname' and national_id='$id' and dob='$dob'  ");
	$results = mysqli_num_rows($verify);
if($results>=1)
{
	*/
	if($password==$confirm)
	{
		//$toDb = mysqli_query($db,"INSERT INTO user (name,surname,sex,national_id,dob,region,email,password,role) VALUES ('$name','$surname','$sex','$id','$dob','$region','$email','$password','user')");
		
	$Jsphone = preg_match("/^[0][7]\d{8}$/",$phone);
	$Jsidentity = preg_match("/^\d{2}\-\d{7}[a-zA-Z{1}]\-\d{2}$/",$id);
		
		if($Jsphone)
		{
			if($Jsidentity)
			{
				
			
			
		$toDb = mysqli_query($db,"INSERT INTO `user`(`name`, `surname`, `sex`, `identity_number`, `dob`, `region`, `password`, `phone`, `role`) VALUES ('$name','$surname','$sex','$id','$dob','$region','$password','$phone','user')");
		
		if($toDb)
		{
				
			echo  "Account sucessfully created";
		}
		
		else
		{
			echo"User already exist";
			
			
			
		}

	
	
		 }	
			else{
				
				echo "please correct your identity number format as required";
			}
			
	}
	else
	{
		echo"please correct your phone number format as required";
	}
			
		
}
	else
	{
		echo "failed to create";
		
	}
	
}
/*	else
{
	echo "<script>
	
	alert('Hie $name we are sorry we couldnt findbin your central database please check your details and try again ');
	window:location='index.php';
	</script>";
}

	// find your details in our central database please check your details and try again 
	
}*/

elseif(isset($_POST['login']))
{
	
	
	$id = $_POST['idJs'];
	$password = md5($_POST['passJs']);
	
	
	if($id!='')
	{
		$takeDb = mysqli_query($db,"SELECT * FROM user WHERE identity_number='$id' and password='$password'");
		$rid = mysqli_num_rows($takeDb);
		$fetch = mysqli_fetch_assoc($takeDb);
		
		$_SESSION['name'] = $fetch['name'];
		$_SESSION['surname'] = $fetch['surname'];
		$_SESSION['doc_id']= $fetch['identity_number'];
		$_SESSION['id'] = $fetch['identity_number'];
		$_SESSION['role']= $fetch['role'];
		$_SESSION['region'] = $fetch['region'];
		$_SESSION['sex'] = $fetch['sex'];
		
		
		if($rid>=1)
		{
			
			echo "success";
			
		}
		
		else
			
		{
		
			echo "Wrong credentials Try gain!";
			
		}
		
	}
	
}

elseif(isset($_POST['recover']))
{
	$surname=$_POST['email'];
	$password =mysqli_real_escape_string($db,$_POST['pass']);
	$confirm = $_POST['conf'];
	if($password==$confirm)
	{
		
		$search = mysqli_query($db,"SELECT * FROM user WHERE email='$email'");
		$count= mysqli_num_rows($search);
		
		if($count>=1)
		{
			$rec = mysqli_query($db,"UPDATE user SET password='$password' WHERE email='$email'  ");
		
		if($rec)
		{
			echo "<script>
			alert('Password Succefully Reseted');
			window:location='index.php';
			</script>
			";
		}
			
		}
		else
		{
			echo "<script> 
			alert('Incorrect email','error');
			window:location='index.php';
			</script>
			";
		}
	
	}
	else
	{
		echo "<script>
		alert('Passwords do not match');
		window:location='index.php';
		</script>";
	}
	
	
}

elseif(isset($_POST['cit']))
{
	$name = mysqli_real_escape_string($db,$_POST['name']);
	$surname = mysqli_real_escape_string($db,$_POST['surname']);
	$dob = mysqli_real_escape_string($db,$_POST['dob']);
	$id = mysqli_real_escape_string($db,$_POST['id']);
	
	
	if($id!='')
	{
		$isa = mysqli_query($db,"INSERT INTO citizens (name,surname,dob,national_id) VALUES ('$name','$surname','$dob','$id')");
		
		if($isa )
		{
			echo "<script>
			alert('Succefully posted');
			window:location='citizen.php';
			
			</script>";
		}
		else 
		{
			echo "<script>
			alert('Id number ".$id." already exist ');
			window:location='citizen.php';
			
			</script>";
		}
	}
}
elseif(isset($_POST['doc']))
{
	$name = mysqli_real_escape_string($db,$_POST['nameJs']);
	$surname = mysqli_real_escape_string($db,$_POST['surnameJs']);
	//$doc_id = mysqli_real_escape_string($db,$_POST['id']);
	$speciality = mysqli_real_escape_string($db,$_POST['specJs']);
	$region = mysqli_real_escape_string($db,$_POST['regionJs']);
	$phone = mysqli_real_escape_string($db,$_POST['phoneJs']);
	$sex = mysqli_real_escape_string($db,$_POST['sexJs']);
	$increment = mysqli_query($db,"SELECT max(id) FROM user");
		   $auto = mysqli_fetch_array($increment);
		   
		   $add = $auto[0]+1;
		   
		   $new = "DOC00".$add;
		   
		   $Jsphone = preg_match("/^[0][7]\d{8}$/",$phone);
	if($Jsphone)
	{
		
	
	
	$doc = mysqli_query($db,"INSERT INTO `doctor`(`name`, `surname`, `sex`, `doc_id`, `speciality`, `region`) VALUES ('$name','$surname','$sex','$new','$speciality','$region')");
	


	$doc1 = mysqli_query($db," INSERT INTO `user` (`name`,`surname`,`sex`,`identity_number`,`dob`,`region`,`password`,`phone`,`role`) VALUES ('$name','$surname','$sex','$new','-','$region', '".md5('0000')."','$phone','doctor' )");
	
	//$doc1 = mysqli_query($db,"INSERT INTO user (name, surname, sex, ) ")
	if($doc1)
	{
		echo "Doctor successfully created";
	}
	else
	{
		echo "Failed to create doctor";
	}
		}
	else
	{
		echo "please correct your phone number format as required";
	}
}
elseif(isset($_POST['buku']))
{
	
	
	
	$name = mysqli_real_escape_string($db,$_POST['patientJs']);
	$surname = mysqli_real_escape_string($db,$_POST['surnameJs']);
	$doc = mysqli_real_escape_string($db,$_POST['doc_idJs']);
	$date = mysqli_real_escape_string($db,$_POST['dateJs']);
	$time = mysqli_real_escape_string($db,$_POST['timeJs']);
	$diseases = mysqli_real_escape_string($db,$_POST['diseasesJs']);
	$percentage = mysqli_real_escape_string($db,$_POST['percentageJs']);
	$region =  mysqli_real_escape_string($db,$_POST['regionJs']);
	$age = mysqli_real_escape_string($db,$_POST['ageJs']);
	$sex = mysqli_real_escape_string($db,$_POST['sexJs']);
	$identity = mysqli_real_escape_string($db,$_POST['identityJs']);
	$validate = mysqli_query($db,"SELECT date FROM bookings WHERE doc_id='$doc' and date='$date' ");
	$ginimbi = mysqli_query($db,"SELECT time FROM bookings WHERE doc_id='$doc' and date='$date' and time='$time'");
	$tsvaga = mysqli_query($db,"SELECT * FROM bookings WHERE identity_number='$identity'");
	$nodouble = mysqli_num_rows($tsvaga);
	$verenga = mysqli_num_rows($ginimbi);
	$onellah = mysqli_num_rows($validate);
	
	
	   $increment = mysqli_query($db,"SELECT max(id) FROM bookings");
		   $auto = mysqli_fetch_array($increment);
		   
		   $add = $auto[0]+1;
		   
		   $new = "BID".$add;
	
	if($onellah>3)
	{
	
		echo "fully booked";
	}
	
	
	else
	{
		
	
	
	if($doc!="" )
	{
			if($verenga==0)
		{
				if($nodouble==0)
				{
					
			
				
				$ohhh = mysqli_query($db,"INSERT INTO bookings (doc_id,patient_name,patient_lastname,date,time,diseases,stage,identity_number,booking_id,region,age,sex) VALUES ('$doc','$name','$surname','$date','$time','$diseases','$percentage','$identity','$new','$region','$age','$sex')");
		
		if($ohhh)
		{
			echo "booking success";
		}
		else
		{
				echo "<script>
			alert('Booking Failed');
			window:location='bookings.php';
			
			</script>";
		}
						}
				else
				{
					echo "you are already booked";
				}
		
		}
		else
		{
				echo "time slot arealdy booked";
		}
			
		
		
	}
		}
}


	    
	   elseif(isset($_POST['admin']))
	   {
		   $name1 = mysqli_real_escape_string($db,$_POST['nameJs']);
		   $surname = mysqli_real_escape_string($db,$_POST['surnameJs']);
		   /*$id = mysqli_real_escape_string($db,$_POST['id']);*/
		   $password = md5( mysqli_real_escape_string($db,$_POST['passJs']));
		   
		   $increment = mysqli_query($db,"SELECT max(id) FROM user");
		   $auto = mysqli_fetch_array($increment);
		   
		   $add = $auto[0]+1;
		   
		   $new = "AD00".$add;
		   
		   
		   if($name=!"")
	{
		$goda = mysqli_query($db,"INSERT INTO user (name,surname,sex,identity_number,dob,region,password,role,phone) VALUES ('$name1','$surname','-','$new','-','-','$password','admin','-')");
		
		if($goda)
		{
			echo "Admin succefully created ";
			
		}
		
		else
		{
			echo "Admin already in the system";
		
			
			
		}
	}
	   }

elseif(isset($_POST['change']))
{
	$docid = mysqli_real_escape_string($db,$_POST['docidJs']);
	$pass = md5(mysqli_real_escape_string ($db,$_POST['passwordJs']));
	$conf = md5( $_POST['confirmJs']);
	
	if($pass==$conf)
	{
		$update = mysqli_query($db,"UPDATE user SET password='$pass' WHERE identity_number='$docid' ");
		
		if($update)
		{
			echo "success";
		}
	}
	else
	{
		echo "failed";
	}
}
elseif(isset($_GET['attend']))
{
	
	
	$taking = mysqli_query($db,"SELECT * FROM bookings WHERE id='".$_GET['attend']."'");
	
	$tora= mysqli_fetch_array($taking);
	$name = $tora['patient_name'];
	$surname = $tora['patient_lastname'];
	$identity_number = $tora['identity_number'];
	$doc = $tora['doc_id'];
	$diseases = $tora['diseases'];
	$age = $tora['age'];
	$region  = $tora['region'];
	$sex = $tora['sex'];
	
	$smoker = mysqli_query($db,"SELECT * FROM patient_results WHERE identity_number='$identity_number' ");
	$chain = mysqli_num_rows($smoker);
	if($chain<=0)
	{
		echo "<script>
		alert('Upload results first to attend patient '); 
		window:location='main.php'; 
		
		 
		</script>";
	}
	else
	{
		
	
	$attendedtake = mysqli_query($db,"INSERT INTO attended (patient_name,patient_lastname,identity_number,diseases,doc_id,age,region,sex) VALUES ('$name','$surname','$identity_number','$diseases','$doc','$age','$region','$sex') ");

	$attended = mysqli_query($db,"DELETE FROM bookings WHERE id='".$_GET['attend']."'");
	
	if($attended)
	{
		echo "<script>
		alert('Patient attended');
		window:location='main.php';
		</script>";	
	}
		}
	
}
elseif(isset($_GET['delete']))
{
	$ndapererwa = mysqli_query($db,"DELETE FROM bookings WHERE id='".$_GET['delete']."' ");
	if($ndapererwa)
	{
		echo "<script>
		
		alert('Appontment deleted');
		window:location='main.php';
		
		</script>";
	}
}
elseif(isset($_GET['cancel']))
{
	$sun = $_GET['cancel'];
	$patient = mysqli_query($db,"DELETE FROM bookings WHERE  booking_id='$sun' ");
	if($patient)
	{
		echo "<script>
		
		alert('Appontment canceled');
		window:location='main.php';
		
		</script>";
	}
}
elseif(isset($_POST['submit']))
{
	$name= $_SESSION['name'];
	$surname = $_SESSION['surname'];
	$d_id=$_SESSION['doc_id'];
		
	$pname = mysqli_real_escape_string($db, $_POST['pname']);
	$psurname = mysqli_real_escape_string($db, $_POST['psurname']);
	$patientid = mysqli_real_escape_string($db, $_POST['patientid']);
		$results = mysqli_real_escape_string($db, $_POST['results']);
		$quantity = mysqli_real_escape_string($db, $_POST['quantity']);
		$prescription = mysqli_real_escape_string($db, $_POST['prescription']);
		$description = mysqli_real_escape_string($db, $_POST['description']);
	  $increment = mysqli_query($db,"SELECT max(id) FROM patient_results");
	  $date = date("Y-m-d");
		   $auto = mysqli_fetch_array($increment);
		   
		   $add = $auto[0]+1;
		   
		   $new = "FILE".$add;
	
	if($patientid !="")
	{
		//$rizo = mysqli_query($db,"INSERT INTO patient_results (patient_name,patient_lastname,identity_number,results,how_to_use,doc_name,doc_surname,doc_id) VALUES ('$pname','$psurname','$patientid','$results','$prescription','$description','$name','$surname','$d_id')");
		
		$rizo = mysqli_query($db,"INSERT INTO `patient_results`(`patient_name`, `patient_lastname`, `identity_number`, `results`, `presriptions`,`quantity`, `how_to_use`, `doc_name`, `doc_surname`, `doc_id`,`results_id`,`date`) VALUES ('$pname','$psurname','$patientid','$results','$prescription','$quantity','$description','$name','$surname','$d_id','$new','$date')");
		
		
		if($rizo)
		{
			echo "<script>
			alert('Results successfully submited');
			window:location='main.php';
			</script>";
		}
	}
}
elseif(isset($_POST['idJs']))
{
	$idJs = mysqli_real_escape_string($db,$_POST['idJs']);
	
	$deleteJs = mysqli_query($db," DELETE FROM user WHERE identity_number='$idJs'");
}
	
?>