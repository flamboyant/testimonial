<?php
	if(isset($_POST['submit']))
	{
		include_once("../config/connect.php");
		
		$product = mysql_real_escape_string(trim($_POST['product']));
		$textarea_comment = mysql_real_escape_string(trim($_POST['textarea_comment']));
		$txt_FirstName = mysql_real_escape_string(trim($_POST['txt_FirstName']));
		$txt_LastName = mysql_real_escape_string(trim($_POST['txt_LastName']));
		$EmailID = mysql_real_escape_string(trim($_POST['EmailID']));
		$sel_Country = mysql_real_escape_string(trim($_POST['sel_Country']));
		$txt_StateProvinceRegion = mysql_real_escape_string(trim($_POST['txt_StateProvinceRegion']));
		$rate = isset($_POST['rating']) ? mysql_real_escape_string(trim($_POST['rating'])):'';
		$notify =isset($_POST['notify']) ? mysql_real_escape_string(trim($_POST['notify'])): 0;
		
		if($product > 0 && $textarea_comment!="" && $rate!="" && $EmailID!="")
		{
			
		  $sql = "INSERT INTO `testimonials`(`pr_id`, `tm_comment`, `tm_fname`, `tm_lname`, `tm_email`, `tm_country`, `tm_state`, `tm_rating`,tm_notify) VALUES ('".$product."','".$textarea_comment."','".$txt_FirstName."','".$txt_LastName."','".$EmailID."','".$sel_Country."','".$txt_StateProvinceRegion."','".$rate."','".$notify."')";
		
			mysql_query($sql);
			
			if(mysql_affected_rows() > 0)
			{
				include("thankyou.php");
			}
			else
				echo "An error occurred. Please try later";
				//return("index.php");
			
		}
		else
		{
			echo "<html><body><div style='margin:0px auto; border:1px solid #ccc;width:500px; padding:5px;'><em style='color:red'>Following fields are missing. Please enter mandatory fields</em><br/><br/>";
			echo ($product=="")?"Product Name required!<br/>":"";
			echo ($textarea_comment=="")?"Comment required!<br/>":"";
			echo ($rate=="")?"Rating required!<br/>":"";
			echo ($EmailID=="")?"Email ID required!<br/>":"";
			echo "</div></body></html>";
			///echo '<meta http-equiv="refresh" content="2;url=../index.php">';
			header('refresh:5;url=../index.php');
		}
	}
