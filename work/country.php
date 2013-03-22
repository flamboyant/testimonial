

<?php
	function country()
	{
		include_once("config/connect.php");

$query = mysql_query("SELECT iso2,short_name FROM `country_t` ORDER BY  `country_t`.`short_name` ASC"); 
	
  $country = '<select id="sel_Country" name="sel_Country" aria-labelledby="Country-ariaLabel" class="sel_Country required" title="Country. This is a required field">';
  $country .='<option value="">Select Your Country</option>';
  while($row = mysql_fetch_array($query))
  {
   $country .='<option value="'.$row['iso2'].'">'.$row['short_name'].'</option>';
  }
  $country .='</select>'; 
  return $country;
 }
  echo country();
?>
