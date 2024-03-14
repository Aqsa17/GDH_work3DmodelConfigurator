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
  *{
    font-family:TIMES NEW ROMAN;
    color:white;
  }
  .container-fluid{
        background-image:url("img/add_bg.jpg");
  background-position:center;
  background-repeat:no-repeat;
  background-size:cover;
  height:800px;
   
}
	.form-control{
    width:30%;
	}
	img{
		margin-bottom:3%;
		margin-top:2%;
	}
  #cancel{
    float:left;
    margin-left:30%;
     padding:2%;
 width:18%;
  }
   #edit{
    float:left;
    margin-left:5%;
     padding:2%;
 width:18%;
  }

	.edit_box{
		margin-top:2%;
    margin-bottom:5%;
		box-shadow:7px 7px gray;
		width:45%;
		height:auto;
		border:2px solid black;
		border-radius:10%;
	}
</style>
<body>

<?php
        function search($id){
        $con=mysqli_connect("localhost","root","","horse_db");
        if($con){
            $query="select  * from texture where  id=$id";
            $result=mysqli_query($con,$query);
            if($result){
                $record=null;
            while($row=mysqli_fetch_assoc($result)){
                $record=$row;
               
            }
         return ($record);
     }
            else{
                return null;
            }


        }
}

if(isset($_GET['id'])){
	$id=$_GET['id'];
	$record=search($id);

 ?>

  
 <div class="container-fluid">
               <center>
                 <div class="row">
                    <div class="col-md-12">
					<div class="edit_box">
          <h3>EDIT TEXTURE</h3>                      
                            <form   action="edit_texture.php" method="post" enctype="multipart/form-data">
                       <div class="row">  
                       <div class="form-group col-md-12">
                      <input type="hidden" name="id" value="<?php echo $record['id'];?>">
                     <img width="100px" height="100px" src="texture/<?php echo $record['thumbnail'];?>">    
                      <input class="form-control"  type="file" name="im_edt1" id="im_edt1">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12"> 
                      <img width="100px" height="100px" style="background-color:gray" src="texture/<?php echo $record['text1'];?>">   
                      <input class="form-control"  style="width:30%"type="file" name="im_edt2" id="im_edt2">
                            </div>
                           </div>
                            <div class="row"> 
                            <div class="form-group col-md-12">
                       <img width="100px" height="100px" style="background-color:gray"src="texture/<?php echo $record['text2'];?>">    
                      <input class="form-control"  type="file" name="im_edt3" id="im_edt3">
                  </div>
              </div> 
              <div class="row"> 
                  <div class="form-group col-md-12">
               <button class="btn btn-md btn-danger" id="cancel" name="cancel">CANCEL</button>  
		         <button class="btn btn-md btn-success" id="edit" name="edit">EDIT</button>
                            </div>
                        </div>
                            </form>
                        </div>
                    </div>
                </div>
            </center>
        </div>
        <?php
    }

$con=mysqli_connect("localhost","root","","horse_db");
 		 if(isset($_POST['edit'])){
 		 $id=$_POST['id'];
 		 $file_nam1=$_FILES['im_edt1']['name'];
 		 $file1=$_FILES['im_edt1']['tmp_name'];

      	 $file_nam2=$_FILES['im_edt2']['name'];
 		 $file2=$_FILES['im_edt2']['tmp_name'];

 		  $file_nam3=$_FILES['im_edt3']['name'];
 		 $file3=$_FILES['im_edt3']['tmp_name'];
 		 move_uploaded_file($file1,"texture/".$file_nam1);
 		 move_uploaded_file($file2,"texture/".$file_nam2);
 		 move_uploaded_file($file3,"texture/".$file_nam3);

         $query="UPDATE `texture` SET `thumbnail`='$file_nam1',`text1`='$file_nam2',`text2`='$file_nam3' WHERE id=$id";
         $result=mysqli_query($con,$query);
         if($result){
         	header('Location:get_texture.php');
         }
 	
 else{
 	echo "data  update failed";
 }}
     if(isset($_POST['cancel'])){
header('Location:dashboard.php');
}
      	
      
        ?>