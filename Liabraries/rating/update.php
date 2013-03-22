<?php
// connect to database
include("./config/connect.php");
	


if(isset($_GET['do']) && $_GET['do']=='rate'){
 // do rate and get id
 rate($_GET['id']);
}else if(isset($_GET['do']) && $_GET['do']=='getrate'){
 // get rating and get id
 getRating($_GET['id']);
}
 
// get data from tabel
function fetchStar(){
 $sql = "select * from `vote`";
 $result=@mysql_query($sql);
 while($rs = @mysql_fetch_array($result,MYSQL_ASSOC)){
 $arr_data[] = $rs;
 }
 return $arr_data;
}
 
// function to retrieve
function getRating($id){
 $sql= "select * from vote`` where id='".$id."' ";
 $result=@mysql_query($sql);
 $rs=@mysql_fetch_array($result);
 // set width of star
 $rating = (@round($rs[value] / $rs[counter],1)) * 20;
 echo $rating;
}
 
// function to insert rating
function rate($id){
 $text = strip_tags($_GET['rating']);
 $update = "update `vote` set counter = counter + 1, value = value + ".$_GET['rating']."  where id='".$id."' ";
 
 $result = @mysql_query($update);
}
?>