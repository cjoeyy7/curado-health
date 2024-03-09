<?php
//$db = mysqli_connect("localhost","root","","MOHC") or die("db not connected");

session_start();
define('db_host','localhost');
define('db_username','root');
define('db_pass','');
define('db_name','MOHC');

$db =new MySQLi(db_host,db_username,db_pass,db_name);

if($db->connect_errno)
{
	die('connection can not be established');
}


?>