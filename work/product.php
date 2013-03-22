

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

  echo product();


?>
