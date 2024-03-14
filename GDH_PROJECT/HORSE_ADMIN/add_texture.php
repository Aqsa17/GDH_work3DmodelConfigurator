<!DOCTYPE html>
<html>
<head>
	<title>add texture</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- jquery file!-->

</head>
<style type="text/css">
     .container-fluid{
        background-image:url("texture/add_bg.jpg");
  background-position:center;
  background-repeat:no-repeat;
  background-size:cover;
  height:700px;
   
}
  *{
    font-family:TIMES NEW ROMAN;
    color:white;
  }
  #img1{
    margin-left:20%;
  }
  #img2{
    margin-left:20%;
  }
  #img3{
    margin-left:20%;
  }
  #cancel{
    float:left;
    margin-left: 20%;
  }
   #save{
    float:left;
    margin-left:3%;
  }
  .add_box{
    margin-top:4%;
    box-shadow:7px 7px gray;
    width:40%;
    border:2px solid gray;
    text-align: center;
    height:auto;
    background-color:transparent;
    border-radius:3%;
  }
</style>

<body>

		
             <div class="container-fluid">
               <center>
                 <div class="row">
                    <div class="col-md-12">
                      
                            <form   action="add_texture.php" method="post" enctype="multipart/form-data">
                      <div class="add_box">
                       <div class="row">  
                       <div class="form-group col-md-6">
                       <h3>ADD TEXTURE</h3>    
                      THUMBNAIL<input class="form-control"  type="file" name="img1" id="img1">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">    
                      TEXTURE1<input class="form-control"   type="file" name="img2" id="img2">
                            </div>
                           </div>
                            <div class="row"> 
                            <div class="form-group col-md-6">    
                      TEXTURE2<input class="form-control"  type="file" name="img3" id="img3">
                  </div>
              </div> 
              <div class="row"> 
                  <div class="form-group col-md-12">
                     <button class="btn btn-md btn-danger" id="cancel" name="cancel">CANCEL</button> 
		         <button class="btn btn-md btn-success" id="save" name="save">SAVE</button>
          
                            </div>
                        </div>
                            </form>
                          </div>
                    </div>
                </div>
            </center>
<?php
$con=mysqli_connect("localhost","root","","horse_db");
if(isset($_POST['save'])){

	$file_name1=$_FILES['img1']['name'];
	$file1=$_FILES['img1']['tmp_name'];
	$file_name2=$_FILES['img2']['name'];
	$file2=$_FILES['img2']['tmp_name'];
	$file_name3=$_FILES['img3']['name'];
	$file3=$_FILES['img3']['tmp_name'];
move_uploaded_file($file1,"texture/".$file_name1);
move_uploaded_file($file2,"texture/".$file_name2);
move_uploaded_file($file3,"texture/".$file_name3);
$query="INSERT INTO `texture`(`id`, `thumbnail`,`text1`,`text2`) VALUES ('$id','$file_name1','$file_name2','$file_name3')";
$result=mysqli_query($con,$query);
if($result){
	header('Location:get_texture.php');

}
else{
	echo "file not saved";
}
}

if(isset($_POST['cancel'])){
header('Location:dashboard.php');
}

?>

    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
   
    <!-- Bootstrap tether Core JavaScript -->
    <script src="plugins/bower_components/popper.js/dist/umd/popper.min.js"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <script src="plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="plugins/bower_components/chartist/dist/chartist.min.js"></script>
    <script src="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="js/pages/dashboards/dashboard1.js"></script>
 </body>
 </html>