<?php

$con=mysqli_connect("localhost","root","","horse_db");
if(isset($_GET['id']));
$ID=$_GET['id'];
echo $ID;
	$query="DELETE FROM `texture` WHERE id=$ID";
	$result=mysqli_query($con,$query);
	if($result){
	 header('Location:get_texture.php');
	}
	else {
		echo "0";
	}

?>