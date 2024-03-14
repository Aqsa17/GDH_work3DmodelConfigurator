<?php
include('function.php');
$id=0;
$shrt_val=$_POST['Shrt_clr'];
$shrtmrk_val=$_POST['Shrtmrk'];
$slv_val=$_POST['Slv_clr'];
$short_val=$_POST['Short_clr'];

save($id++,$shrt_val,$shrtmrk_val,$slv_val,$short_val);



?>