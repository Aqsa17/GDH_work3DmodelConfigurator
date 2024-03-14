<?php
session_start();
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 4 admin, bootstrap 4, css3 dashboard, bootstrap 4 dashboard, Ample lite admin bootstrap 4 dashboard, frontend, responsive bootstrap 4 admin template, Ample admin lite dashboard bootstrap 4 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Adminpanel</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <!-- jquery cdn!-->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Custom CSS -->
    <link href="plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
     <link href="css/style.css" rel="stylesheet">

</head>
<style type="text/css">
     .container-fluid{
        background-image:url("img/tbl.jpg");
  background-position:center;
  background-repeat:no-repeat;
  background-size:cover;
  height:600px;
   
}
</style>
<body>
	 <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="dashboard.html">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!-- Dark Logo icon -->
                            <img src="plugins/images/logo-icon.png" alt="homepage" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="plugins/images/logo-text.png" alt="homepage" />
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-none d-md-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white"
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ml-auto d-flex align-items-center">
                        <?php
if(isset($_SESSION['admin'])){
    $admin=$_SESSION['admin'];
    $username=$admin['username'];

}
?>
            <li><?php echo"<p style='color:white;font-size:1.3vw'>$username</p>"?>
            </li>
            <li><img src="img/admin.png" style="background-color:gray;margin-left:10%;border:2px solid white;border-radius:50%" width="50px" height="50px"></li>
            <li style="padding:5%;color:white"><a href="logout.php"><i class="fas fa-sign-out-alt" style="font-size:2.3vw;color:white;margin-left:5%"></i></a></li>

                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
            
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                       
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashboard.html"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        
                        <li class="sidebar-item main_table">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashboard.html"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Table</span>
                            </a>

                        </li>
                        <li class="sidebar-item sub_table">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="fetch_clr.php"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Color</span>
                            </a>

                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="fetch_texture.php"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Texture</span>
                            </a>

                        </li>
                    
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
<?php
function connect(){
	$con=mysqli_connect("localhost","root","","horse_db");
	if($con){
		return ($con);

	}
	else{
		return null;
	}
}
	$con=connect();
	if($con){
		$query="SELECT * FROM `texture`";
		$result=mysqli_query($con,$query);
		if($result){
			?>
			 <!--COLOR TABLE!-->
			 <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="container-fluid">
              
				 <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                         <a href="add_texture.php"><button class="btn btn-md btn-info" id="add">ADD</button></a>
                            <h2 align="center">TEXTURE TABLE</h2>
                            <table class="table table-light table-hover">
                                <tr>
                                    <th>ID</th>
                                    <th>THUMBNAIL</th>
                                    <th>TEXTURE1</th>
                                    <th>TEXTURE2</th>
                                    <th>ACTION</th>
                                </tr>

                                <?php 
                               	$sno=1;
			while($row=mysqli_fetch_assoc($result)){
				?>
                            
                      
                               <tr>

           
                               	<td><?php echo $sno++?></td>
                        <td><img width="50px" height="50px" style="background-color:#778899" src="texture/<?php echo $row['thumbnail'];?>"></td>
                        <td><img width="50px" height="50px" style="background-color:#778899" src="texture/<?php echo $row['text1'];?>"></td>
                        <td><img width="50px" height="50px" style="background-color:#778899" src="texture/<?php echo $row['text2'];?>"></td>

                         <?php echo "<td><a href='dlt_texture.php?id=".$row['id']."'><i class='fas fa-trash-alt' style='font-size:1.4vw'></i></a></td>"?>
                         <?php echo "<td><a href='edit_texture.php?id=".$row['id']."'><i class='fas fa-edit'  style='font-size:1.4vw'></i></a></td>"?>
                         <?php

									}
								?>
                            </tr>
                         
                            </table>
                        
                            </div>
                        </div>
                    </div>

                </div>
            </div>
                    <?php
				
		}
	}
	?>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
          </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script>

        $(document).ready(function(){
            //show texture div
    $('#show_texture').click(function(){
        $('#color_div').hide();
      $('#texture_div').show();

       });

 });
    </script>
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