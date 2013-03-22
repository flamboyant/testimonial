
<?php
	//include_once("../testimonial-form/config/Config.php");
	
	
	 $host = "localhost";
	$user = "root";
	$dbpass = "";
	$dbfbapp = "fbapp";
	
	
	// Connecting to Mysql Database
	$con = mysql_connect($host,$user,$dbpass) or die("Couldn't connect to server!!");
	
	// Select the database
	mysql_select_db($dbfbapp, $con)or die("Database does not exist with dbfbapp!!");

	

 	
?>
