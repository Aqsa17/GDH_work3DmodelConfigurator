<?php
include('function.php');
  $con=connect();
  if($con){
  	$ID=$_POST['C_ID'];
  	$query="SELECT * FROM `save` WHERE id=$ID";
  	$result=mysqli_query($con,$query);
  	if($result){		
while($row = mysqli_fetch_assoc($result)){
    $test[] = $row;


echo json_encode($test);
}

  		
  }

  }
?>