<?php
function connect(){
	$con=mysqli_connect('localhost','root','','horse_db');
if($con){
	return ($con);

}
else{
	return (null);
}

}
function save($id,$shrt_val,$shrtmrk_val,$slv_val,$short_val){
	$con=connect();
	if($con){
		$query="INSERT INTO `save`(`id`, `shirt_clr`, `shrt_mrkclr`, `slv_clr`, `short_clr`) VALUES ($id,'$shrt_val','$shrtmrk_val','$slv_val','$short_val')";
		$result=mysqli_query($con,$query);
		if($result){
			 $last_id = $con->insert_id;
	 echo json_encode(array('statusCode'=>200  , 'id'=>$last_id));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	}
}


?>