<?php
include('connection.php');
//ghh
$php7_clean_table=mysqli_query($db,"TRUNCATE TABLE graph");
function create_table($db,$table){ //check tables
                  $sql = "CREATE TABLE IF NOT EXISTS `MOHC`.`$table` (
                         `id` INT NOT NULL AUTO_INCREMENT ,
                          `string_value` VARCHAR( 100 ) NOT NULL ,
						  `value` VARCHAR( 100 ) NOT NULL ,

                         PRIMARY KEY (  `id` )) ";
	
	$php_create_table=mysqli_query($db,$sql);

}

//select all locations
$gr = mysqli_query($db,"SELECT DISTINCT(region) FROM attended ");
while($fetch_location = mysqli_fetch_array($gr))
{
	
echo $fetch_location['region']."--";	
//echo $count;
	//create table if does not exist
	
//select all locations
$gr1 = mysqli_query($db,"SELECT region FROM attended WHERE region='".$fetch_location['region']."' ");
$count_location = mysqli_num_rows($gr1);


     create_table($db,'graph');
	//insert 
	$fomat=mysqli_query($db,"INSERT INTO graph (id,string_value,value) VALUES (NULL,'".$fetch_location['region']."','$count_location') ");
	
}//end while
?>