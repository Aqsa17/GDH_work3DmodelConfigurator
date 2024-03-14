<?php

$con=mysqli_connect("localhost","root","","horse_db");
if(isset($_GET['id']));
$ID=$_GET['id'];
echo $ID;
	$query="DELETE FROM `save` WHERE id=$ID";
	$result=mysqli_query($con,$query);
	if($result){
	 header('Location:fetch_clr.php');
	}
	else {
		echo "0";
	}

?>