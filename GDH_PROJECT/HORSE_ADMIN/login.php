<?php
session_start();
$con=mysqli_connect('localhost','root','','horse_db',3306);
if(isset($_POST['login'])){
	$username=$_POST['username'];
	$pwd=$_POST['pwd'];
 $query="SELECT * FROM `admin`";
 $result=mysqli_query($con,$query);
 if($result){
 	while($row=mysqli_fetch_assoc($result)){
 		if($row['username']==$username && $row['password']==$pwd){
 			$_SESSION['admin']=$row;
 			header('Location:dashboard.php');
 		}
 }	}
 	else{
 		header('Location:index.php');
 	 }
}
?>
