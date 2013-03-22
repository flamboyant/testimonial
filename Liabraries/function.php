

<?php
//product

	function product()
	{
		include("config/connect.php");


	 $query = mysql_query("SELECT pr_id,pr_name FROM product ORDER BY  pr_id ASC") ;
	
  $products = '<select name="product" id="product_list" class="product_list required" title="products. This is a required field">';
  $products .='<option value="">Select Any Product</option>';
  while($row = mysql_fetch_array($query))
  {
   $products .='<option value="'.$row['pr_id'].'">'.$row['pr_name'].'</option>';
  }
  $products .='</select>'; 
  return $products;
 }





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
 

?>
