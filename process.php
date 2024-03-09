<?php
$db_con = mysqli_connect("localhost","root","","nyasha");
if(isset($_POST['login']))
{
	
$name = mysqli_real_escape_string($db_con,$_POST['name']);
$password = mysqli_real_escape_string($db_con,$_POST['pass']);


if($name!='')
{
	$command = mysqli_query($db_con,"INSERT INTO users (name,password) VALUES ('$name','$password')");
	
	if($command)
	{
		echo "posted ";
	}
	else
	{
		echo "failed ";
	}
	
}

}



?>