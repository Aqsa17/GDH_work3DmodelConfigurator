<!DOCTYPE html>
<html>
<head>
	<title>cofigurator</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!--ajax library!-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<!-- clara link!-->
<script src="https://clara.io/js/claraplayer.min.js"></script>
<!-- jquery file!-->
<script  src="js/myscript.js"></script>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body>

<div class="container-fluid">


	<div class="row p-0 m-0 h-100 w-100">
		<div class="col-12 col-sm-12 col-md-12 col-xs-12 col-lg-12 p-0 m-0 w-100">
		<nav class="navbar navbar-inverse" id="menu">
			<a href="#"><button  class="btn btn-md" id="btn_des">Design Your favourite!</button></a>
			<a href="#" ><button class="btn btn-md" id="btn_login">LOGIN/REGISTER</button></a>
		</div>
</div>
</nav>
<div class="row p-0 m-0 h-100 w-100">
	<div class="col-12 col-sm-12 col-md-12 col-xs-12 col-lg-12 p-0 m-0 w-100">
		<button class="btn btn-md" id="save">SAVE</button>
		<button class="btn btn-md" id="restart">RESTART</button>
		<!--show data box!-->
		<div id="show_data">
	
</div>
	
</div>
</div>
<div class="row p-0 m-0 h-100 w-100">
	<div class="col-6 col-sm-6 col-md-6 col-xs-6 col-lg-6 p-0 m-0 w-100" id="canva_box">
		<center>
			<div class="img-fluid p-0 m-0" id="clara-embed" style="width:100%;height:500px; background-color:transparent"></div>

			
	<p id="total">TOTAL:</p>
		<p id="price">$ 100.00</p>
		 <button class="btn btn-md" id="cart_btn">ADD CART</button>
		 <button class="btn btn-md" id="save_btn">Savechanges</button>
		</center>


	</div><br>
	<div class="col-6 col-sm-6 col-md-6 col-xs-6 col-lg-6 p-0 m-0 w-100" id="nav_box">
 <nav class="navbar navbar-inverse">
  <ul class="nav navbar-nav main-tabs">
    <li class="list"><button type="btn btn-md" id="body_btn2">PATTERNSTYLE</button></li>
    <li class="list"><button type="btn btn-md" style="display:none">SHIRTSTYLE</button></li>
 <li class="list"><button type="btn btn-md" id="body_btn1">SHIRTSTYLE</button></li>
  </ul>
</nav>
<div id="color_box">
	<h5 class="heading">⚫&nbsp;&nbsp;&nbsp; PRIMARY COLORS</h5>
	<div class="row p-0 m-0 h-100 w-100 btn_element">
		<div class="col-12 col-sm-12 col-md-12 col-xs-12 col-lg-12 p-0 m-0 w-100" >
			<div class="button_clr"><button class="btn btn-md clr_btns" style="background-color:white;border:2px solid gray;text-align:center" data-color="#FFFFFF" value="#FFFFFF"></button>
				<span class="clr_name">White</span>

			</div>
			<div class="button_clr">
			<button class="btn btn-md clr_btns" style="background-color:#E1C699" data-color="#E1C699"></button>
			<span class="clr_name">BEIGE</span>

			</div>

			<div class="button_clr">
			<button class="btn btn-md clr_btns" data-color="#000000"
			style="background-color:black"></button>
			<span class="clr_name">BLACK</span>

			</div>
			<div class="button_clr">
			<button class="btn btn-md clr_btns" data-color="#A52A2A" style="background-color:brown"></button>
			<span class="clr_name">BROWN</span>

			</div>

			<div class="button_clr">
			<button class="btn btn-md clr_btns" data-color="#00022e"style="background-color:#00022e"></button>
			<span class="clr_name">BLUE</span>


			</div>
			<div class="button_clr">
			<button class="btn btn-md clr_btns" data-color="#013220" style="background-color:#013220"></button>
			<span class="clr_name">GREEN</span>

			</div>
			<div class="button_clr">
			<button class="btn btn-md clr_btns" data-color="#228B22" style="background-color:#228B22"></button>
			<center>
				<span class="clr_name">EMRED GREEN</span>
			</center>

			</div>

				<div class="button_clr">
			<button class="btn btn-md clr_btns" data-color="#002366" style="background-color:#002366"></button>
			<center>
				<span class="clr_name">ROYAL BLUE</span>
			</center>

			</div>

			<div class="button_clr">
<button class="btn btn-md clr_btns" style="font-size:1vw;
	background-color:transparent;margin-top:1%;border:2px solid gray" id="showmore_clr">8+</button>
		</div>

		</div>
	</div>
<br>	



	<div class="row p-0 m-0 h-100 w-100 btn_element" id="more_colorbox">
		<div class="col-12 col-sm-12 col-md-12 col-xs-12 col-lg-12 p-0 m-0 w-100">
			
			
			<div class="button_clr"><button class="btn btn-md clr_btns" data-color="#800080" style="background-color:#800080"></button>
				<span class="clr_name">PURPLE</span>

			</div>
			<div class="button_clr"><button class="btn btn-md clr_btns" data-color="#008080" style="background-color:#008080"></button>
				<span class="clr_name">TEAL</span>

			</div>
			<div class="button_clr"><button class="btn btn-md clr_btns" data-color="#FF0000" style="background-color:#FF0000"></button>
				<span class="clr_name">RED</span>

			</div>

			<div class="button_clr"><button class="btn btn-md clr_btns" data-color="#f7a655" style="background-color:#f7a655;"></button>
				<span class="clr_name">SKIN</span>

			</div>

			<div class="button_clr"><button class="btn btn-md clr_btns" data-color="#313131" style="background-color:#313131"></button>
				<span class="clr_name">GREY</span>

			</div>
			<div class="button_clr"><button class="btn btn-md clr_btns" data-color="#073b4c" style="background-color:#073b4c"></button>
				<center> <span class="clr_name">SEAGREEN</span>
				</center>
			</div>

			<div class="button_clr"><button class="btn btn-md clr_btns" data-color="#540804" style="background-color:#540804"></button>
				<span class="clr_name">MAROON</span>

			</div>
			<div class="button_clr"><button class="btn btn-md clr_btns"data-color="#cd7f32" style="background-color:#cd7f32" ></button>
				<span class="clr_name">ALMOND</span>

			</div>

				<div class="button_clr">
<button class="btn btn-md clr_btns" style="font-size:1vw;
	background-color:transparent;margin-top:1%;border:2px solid gray" id="showless">less</button>

			</div>
		</div>
	</div>

	
		

		<div class="row p-0 m-0 h-100 w-100" id="showmore_clr2">
			<div class="col-12 col-sm-12 col-md-12 col-xs-12 col-lg-12 p-0 m-0 w-100">
			<h5 class="heading1">⚫&nbsp;&nbsp;SECONDARY COLOR</h5>

			<div class="button_clr"><button class="btn btn-md mrk_clr_btns" data-color="#7FFFD4" style="background-color:#7FFFD4"></button>
				<span class="clr_name">ACURMINE</span>

			</div>
			<div class="button_clr"><button class="btn btn-md mrk_clr_btns" data-color="#FFC0CB" style="background-color:pink"></button>
				<span class="clr_name">GENS</span>

			</div>
			<div class="button_clr"><button class="btn btn-md mrk_clr_btns" data-color="#FFD700" style="background-color:orange"></button>
				<span class="clr_name">GOLD</span>

			</div>

			<div class="button_clr"><button class="btn btn-md mrk_clr_btns" data-color="#C0C0C0" style="background-color:silver;"></button>
				<span class="clr_name">SILVER</span>

			</div>

			<div class="button_clr"><button class="btn btn-md mrk_clr_btns" data-color="#e2725b" style="background-color:#e2725b"></button>
				<span class="clr_name">Teracotta</span>

			</div>
			<div class="button_clr"><button class="btn btn-md mrk_clr_btns" data-color="#20B2AA" style="background-color:#20B2AA"></button>
				<center><span class="clr_name">KA GREEN</span></center>

			</div>

			<div class="button_clr"><button class="btn btn-md mrk_clr_btns" data-color="#8db600" style="background-color:#8db600"></button>
				<span class="clr_name">APPLE</span>

			</div>
			<div class="button_clr"><button class="btn btn-md mrk_clr_btns" data-color="#cd7f32" style="background-color:#cd7f32"></button>
				<span class="clr_name">BRONZE</span>

			</div>
			<div class="button_clr"><button class="btn btn-md mrk_clr_btns" style="font-size:1.1vw;
	background-color:transparent;margin-top:1%;font-size:1vw;border:2px solid gray"  id="showmore_clr_2">8+</button>

			</div>				

			</div>
		</div>
		<br><br>
	<div class="row p-0 m-0 h-100 w-100" id="sub_color" style="margin-bottom:5%">
		<div class="col-12 col-sm-12 col-md-12 col-xs-12 col-lg-12 p-0 m-0 w-100">
			<div class="button_clr"><button class="btn btn-md mrk_clr_btns"data-color="#fb5607" style="background-color:#fb5607;border:2px solid gray"></button>
				<span class="clr_name">ORANGE</span>

			</div>
			<div class="button_clr">
			<button class="btn btn-md mrk_clr_btns" data-color="#fdc500"style="background-color:#fdc500"></button>
			<span class="clr_name">YELLOW</span>

			</div>

			<div class="button_clr">
			<button class="btn btn-md mrk_clr_btns" data-color="#000000" style="background-color:black"></button>
			<span class="clr_name">BLACK</span>

			</div>
			<div class="button_clr">
			<button class="btn btn-md mrk_clr_btns" data-color="#840032" style="background-color:#840032"></button>
			<span class="clr_name">DARKPINK</span>
			</div>

			<div class="button_clr">
			<button class="btn btn-md mrk_clr_btns" data-color="#540804"style="background-color:#540804"></button>
			<span class="clr_name">MAROON</span>


			</div>
			<div class="button_clr">
			<button class="btn btn-md mrk_clr_btns" data-color="#a663cc" style="background-color:#a663cc" ></button>
			<span class="clr_name">LITEPURPLE</span>

			</div>
			<div class="button_clr">
					<button class="btn btn-md mrk_clr_btns" data-color="#3fa34d" style="background-color:#3fa34d"></button>
			<span class="clr_name">LEAVE</span>

			</div>

				<div class="button_clr">
			<button class="btn btn-md mrk_clr_btns" data-color="#89fc00"style="background-color:#89fc00"></button>
				<span class="clr_name">PAROTGREEN</span>

			</div>

			<div class="button_clr">
<button class="btn btn-md mrk_clr_btns" style="font-size:1vw;
	background-color:transparent;margin-top:1%;border:2px solid gray" id="less">less</button>

		</div>
		</div>
	</div>
<div class="row p-0 m-0 h-100 w-100" id="third_clr" style="margin-top:0px;margin-bottom:5%">
			<div class="col-12 col-sm-12 col-md-12 col-xs-12 col-lg-12 p-0 m-0 w-100">
			<h5 class="heading1">⚫&nbsp;&nbsp;THIRD COLOR</h5>

			<div class="button_clr"><button class="btn btn-md clr_btns" data-color="#7FFFD4" style="background-color:#7FFFD4"></button>
				<span class="clr_name">ACURMINE</span>

			</div>
			<div class="button_clr"><button class="btn btn-md clr_btns" data-color="#FFC0CB" style="background-color:pink"></button>
				<span class="clr_name">GENS</span>

			</div>
			<div class="button_clr"><button class="btn btn-md clr_btns" data-color="#FFD700" style="background-color:orange"></button>
				<span class="clr_name">GOLD</span>

			</div>

			<div class="button_clr"><button class="btn btn-md clr_btns" data-color="#C0C0C0" style="background-color:silver;"></button>
				<span class="clr_name">SILVER</span>

			</div>

			<div class="button_clr"><button class="btn btn-md clr_btns" data-color="#e2725b" style="background-color:#e2725b"></button>
				<span class="clr_name">Teracotta</span>

			</div>
			<div class="button_clr"><button class="btn btn-md clr_btns" data-color="#20B2AA" style="background-color:#20B2AA"></button>
				<center><span class="clr_name">KA GREEN</span></center>

			</div>

			<div class="button_clr"><button class="btn btn-md clr_btns" data-color="#8db600" style="background-color:#8db600"></button>
				<span class="clr_name">APPLE</span>

			</div>
			<div class="button_clr"><button class="btn btn-md clr_btns" data-color="#cd7f32" style="background-color:#cd7f32"></button>
				<span class="clr_name">BRONZE</span>

			</div>
			<div class="button_clr"><button class="btn btn-md clr_btns" style="font-size:1.1vw;
	background-color:transparent;margin-top:1%;font-size:1vw;border:2px solid gray"  id="show-thrd">8+</button>

			</div>				

			</div>
		</div>
		<br>
	<div class="row p-0 m-0 h-100 w-100" id="sub_third" style="margin-bottom:10%">
		<div class="col-12 col-sm-12 col-md-12 col-xs-12 col-lg-12 p-0 m-0 w-100">
			<div class="button_clr"><button class="btn btn-md clr_btns"data-color="#fb5607" style="background-color:#fb5607;border:2px solid gray"></button>
				<span class="clr_name">ORANGE</span>

			</div>
			<div class="button_clr">
			<button class="btn btn-md clr_btns" data-color="#fdc500"style="background-color:#fdc500"></button>
			<span class="clr_name">YELLOW</span>

			</div>

			<div class="button_clr">
			<button class="btn btn-md clr_btns" data-color="#000000" style="background-color:black"></button>
			<span class="clr_name">BLACK</span>

			</div>
			<div class="button_clr">
			<button class="btn btn-md clr_btns" data-color="#840032" style="background-color:#840032"></button>
			<span class="clr_name">DARKPINK</span>
			</div>

			<div class="button_clr">
			<button class="btn btn-md clr_btns" data-color="#540804"style="background-color:#540804"></button>
			<span class="clr_name">MAROON</span>


			</div>
			<div class="button_clr">
			<button class="btn btn-md clr_btns" data-color="#a663cc" style="background-color:#a663cc" ></button>
			<span class="clr_name">LITEPURPLE</span>

			</div>
			<div class="button_clr">
					<button class="btn btn-md clr_btns" data-color="#3fa34d" style="background-color:#3fa34d"></button>
			<span class="clr_name">LEAVE</span>

			</div>

				<div class="button_clr">
			<button class="btn btn-md clr_btns" data-color="#89fc00"style="background-color:#89fc00"></button>
				<span class="clr_name">PAROTGREEN</span>

			</div>

			<div class="button_clr">
<button class="btn btn-md clr_btns" style="font-size:1vw;
	background-color:transparent;margin-top:1%;border:2px solid gray" id="less-thrd">less</button>

		</div>
		</div>
	</div>
	

</div>
<!-- shirt marking box
<div id="marking_clrbox">
	<h5 class="heading">⚫&nbsp;&nbsp;&nbsp;COLORS</h5>
	<div class="row p-0 m-0 h-100 w-100 btn_element">
		<div class="col-12 col-sm-12 col-md-12 col-xs-12 col-lg-12 p-0 m-0 w-100" >
			<div class="button_clr"><button class="btn btn-md mrk_clr_btns" style="background-color:white;border:2px solid gray;text-align:center" data-color="#FFFFFF" value="#FFFFFF"></button>
				<span class="clr_name">White</span>

			</div>
			<div class="button_clr">
			<button class="btn btn-md mrk_clr_btns" style="background-color:#E1C699" data-color="#E1C699"></button>
			<span class="clr_name">BEIGE</span>

			</div>

			<div class="button_clr">
			<button class="btn btn-md mrk_clr_btns" data-color="#000000"
			style="background-color:black"></button>
			<span class="clr_name">BLACK</span>

			</div>
			<div class="button_clr">
			<button class="btn btn-md mrk_clr_btns" data-color="#A52A2A" style="background-color:brown"></button>
			<span class="clr_name">BROWN</span>

			</div>

			<div class="button_clr">
			<button class="btn btn-md mrk_clr_btns" data-color="#00022e"style="background-color:#00022e"></button>
			<span class="clr_name">BLUE</span>


			</div>
			<div class="button_clr">
			<button class="btn btn-md mrk_clr_btns" data-color="#013220" style="background-color:#013220"></button>
			<span class="clr_name">GREEN</span>

			</div>
			<div class="button_clr">
			<button class="btn btn-md mrk_clr_btns" data-color="#228B22" style="background-color:#228B22"></button>
			<center>
				<span class="clr_name">EMRED GREEN</span>
			</center>

			</div>

				<div class="button_clr">
			<button class="btn btn-md mrk_clr_btns" data-color="#002366" style="background-color:#002366"></button>
			<center>
				<span class="clr_name">ROYAL BLUE</span>
			</center>

			</div>

			<div class="button_clr">
<button class="btn btn-md mrk_clr_btns" style="font-size:1vw;
	background-color:transparent;margin-top:1%;border:2px solid gray" id="showmore_mrkclr">8+</button>
		</div>

		</div>
	</div>
<br>	



	<div class="row p-0 m-0 h-100 w-100 btn_element" id="more_mrkcolorbox">
		<div class="col-12 col-sm-12 col-md-12 col-xs-12 col-lg-12 p-0 m-0 w-100">
			
			
			<div class="button_clr"><button class="btn btn-md mrk_clr_btns" data-color="#800080" style="background-color:#800080"></button>
				<span class="clr_name">PURPLE</span>

			</div>
			<div class="button_clr"><button class="btn btn-md mrk_clr_btns" data-color="#008080" style="background-color:#008080"></button>
				<span class="clr_name">TEAL</span>

			</div>
			<div class="button_clr"><button class="btn btn-md mrk_clr_btns" data-color="#FF0000" style="background-color:#FF0000"></button>
				<span class="clr_name">RED</span>

			</div>

			<div class="button_clr"><button class="btn btn-md mrk_clr_btns" data-color="#f7a655" style="background-color:#f7a655;"></button>
				<span class="clr_name">SKIN</span>

			</div>

			<div class="button_clr"><button class="btn btn-md mrk_clr_btns" data-color="#313131" style="background-color:#313131"></button>
				<span class="clr_name">GREY</span>

			</div>
			<div class="button_clr"><button class="btn btn-md mrk_clr_btns" data-color="#073b4c" style="background-color:#073b4c"></button>
				<center> <span class="clr_name">SEAGREEN</span>
				</center>
			</div>

			<div class="button_clr"><button class="btn btn-md mrk_clr_btns" data-color="#540804" style="background-color:#540804"></button>
				<span class="clr_name">MAROON</span>

			</div>
			<div class="button_clr"><button class="btn btn-md mrk_clr_btns"data-color="#cd7f32" style="background-color:#cd7f32" ></button>
				<span class="clr_name">ALMOND</span>

			</div>

				<div class="button_clr">
<button class="btn btn-md clr_btns" style="font-size:1vw;
	background-color:transparent;margin-top:1%;border:2px solid gray" id="showless_mrkclr">less</button>

			</div>
		</div>
	</div>

	
		

		<div class="row p-0 m-0 h-100 w-100" id="showmore_mrkclr2">
			<div class="col-12 col-sm-12 col-md-12 col-xs-12 col-lg-12 p-0 m-0 w-100">
			<h5 class="heading1">⚫&nbsp;&nbsp;Non BHA-Colors-Available for Order,not to registration</h5>

			<div class="button_clr"><button class="btn btn-md mrk_clr_btns" data-color="#7FFFD4" style="background-color:#7FFFD4"></button>
				<span class="clr_name">ACURMINE</span>

			</div>
			<div class="button_clr"><button class="btn btn-md mrk_clr_btns" data-color="#FFC0CB" style="background-color:pink"></button>
				<span class="clr_name">GENS</span>

			</div>
			<div class="button_clr"><button class="btn btn-md mrk_clr_btns" data-color="#FFD700" style="background-color:orange"></button>
				<span class="clr_name">GOLD</span>

			</div>

			<div class="button_clr"><button class="btn btn-md mrk_clr_btns" data-color="#C0C0C0" style="background-color:silver;"></button>
				<span class="clr_name">SILVER</span>

			</div>

			<div class="button_clr"><button class="btn btn-md mrk_clr_btns" data-color="#e2725b" style="background-color:#e2725b"></button>
				<span class="clr_name">Teracotta</span>

			</div>
			<div class="button_clr"><button class="btn btn-md mrk_clr_btns" data-color="#20B2AA" style="background-color:#20B2AA"></button>
				<center><span class="clr_name">KA GREEN</span></center>

			</div>

			<div class="button_clr"><button class="btn btn-md mrk_clr_btns" data-color="#8db600" style="background-color:#8db600"></button>
				<span class="clr_name">APPLE</span>

			</div>
			<div class="button_clr"><button class="btn btn-md mrk_clr_btns" data-color="#cd7f32" style="background-color:#cd7f32"></button>
				<span class="clr_name">BRONZE</span>

			</div>
			<div class="button_clr"><button class="btn btn-md mrk_clr_btns" style="font-size:1.1vw;
	background-color:transparent;margin-top:1%;font-size:1vw;border:2px solid gray"  id="showmore_mrkclr_2">8+</button>

			</div>				

			</div>
		</div>
		<br><br>
	<div class="row p-0 m-0 h-100 w-100" id="sub_mrkcolor" style="margin-bottom:10%">
		<div class="col-12 col-sm-12 col-md-12 col-xs-12 col-lg-12 p-0 m-0 w-100">
			<div class="button_clr"><button class="btn btn-md mrk_clr_btns"data-color="#fb5607" style="background-color:#fb5607;border:2px solid gray"></button>
				<span class="clr_name">ORANGE</span>

			</div>
			<div class="button_clr">
			<button class="btn btn-md mrk_clr_btns" data-color="#fdc500"style="background-color:#fdc500"></button>
			<span class="clr_name">YELLOW</span>

			</div>

			<div class="button_clr">
			<button class="btn btn-md mrk_clr_btns" data-color="#000000" style="background-color:black"></button>
			<span class="clr_name">BLACK</span>

			</div>
			<div class="button_clr">
			<button class="btn btn-md mrk_clr_btns" data-color="#840032" style="background-color:#840032"></button>
			<span class="clr_name">DARKPINK</span>
			</div>

			<div class="button_clr">
			<button class="btn btn-md mrk_clr_btns" data-color="#540804"style="background-color:#540804"></button>
			<span class="clr_name">MAROON</span>


			</div>
			<div class="button_clr">
			<button class="btn btn-md mrk_clr_btns" data-color="#a663cc" style="background-color:#a663cc" ></button>
			<span class="clr_name">LITEPURPLE</span>

			</div>
			<div class="button_clr">
					<button class="btn btn-md mrk_clr_btns" data-color="#3fa34d" style="background-color:#3fa34d"></button>
			<span class="clr_name">LEAVE</span>

			</div>

				<div class="button_clr">
			<button class="btn btn-md mrk_clr_btns" data-color="#89fc00"style="background-color:#89fc00"></button>
				<span class="clr_name">PAROTGREEN</span>

			</div>

			<div class="button_clr">
<button class="btn btn-md mrk_clr_btns" style="font-size:1vw;
	background-color:transparent;margin-top:1%;border:2px solid gray" id="less_mrk">less</button>

		</div>
		</div>
	</div>

</div>
!-->

<!-- shirt marking div start!-->


<div class="row p-0 m-0 h-100 w-100" id="shirt_box">
	<div class="col-12 col-sm-12 col-md-12 col-xs-12 col-lg-12  p-0 m-0 w-100">

		<br><h5 class="shirt_heading">⚫&nbsp;&nbsp;Non BHA-Colors-Available for Order,not to registration</h5>
		<div class="row p-0 m-0 h-100 w-100" id="img_row">
			<div class="col-4 col-sm-4 col-md-4 col-xs-4 col-lg-4 p-0 m 0 w-100"><img class="texture" src="texture/texture1.png" data-name="top Base color" data-pattern="https://www.3dsium.com/Horsesite/texture/texture1.png"><p class="shirt_label">Plain</p></div>
			<div class="col-4 col-sm-4 col-md-4 col-xs-4 col-lg-4 p-0 m-0 w-100"><img class="texture" src="texture/texture2.png" data-pattern="https://www.3dsium.com/Horsesite/texture/texture2" data-name="top Base color"><p class="shirt_label">Seams</p></div>
			<div class="col-4 col-sm-4 col-md-4 col-xs-4 col-lg-4 p-0 m-0 w-100"><img  class="texture" src="texture/texture3.png" data-pattern="https://www.3dsium.com/Horsesite/texture1/texture 3 a-01.png" data-name="top Base color"><p class="shirt_label">Epluates</p></div>
			
		</div>
	   </div>
     </div>
     <br>
<div class="row p-0 m-0 h-100 w-100">
	<div class="col-12 col-sm-12 col-md-12 col-xs-12 col-lg-12 p-0 m-0 w-100">
		<nav class="navbar navbar-inverse">
  <ul class="nav navbar-nav main-tabs">
    <li class="list_slv"><button type="btn btn-md" id="slv_btn2">PATTERN&nbsp;STYLE</button></li>
    <li class="list_slv"><button type="btn btn-md" style="display:none">SELEV&nbsp;STYLE</button></li>
    <li class="list_slv"><button type="btn btn-md" id="slv_btn1">SELEV&nbsp;STYLE</button></li>
  </ul>
</nav>
</div>
</div>

<div id="color_box_1">
	<h5  class="heading">⚫&nbsp;&nbsp;&nbsp;PRIMARY COLOR</h5
		>
	<div class="row p-0 m-0 h-100 w-100 btn_element">
		<div class="col-12 col-sm-12 col-md-12 col-xs-12 col-lg-12  p-0 m-0 w-100" >
			<div class="button_clr"><button class="btn btn-md cap_clr_btns" data-color="#FFFFFF" style="background-color:#FFFFFF;border:1px solid gray;"></button>
				<span class="clr_name">White</span>

			</div>
			<div class="button_clr">
			<button class="btn btn-md cap_clr_btns" data-color="#E1C699" style="background-color:#E1C699"></button>
			<span class="clr_name">BEIGE</span>

			</div>

			<div class="button_clr">
			<button class="btn btn-md cap_clr_btns" data-color="#000000" style="background-color:black"></button>
			<span class="clr_name">BLACK</span>

			</div>
			<div class="button_clr">
			<button class="btn btn-md cap_clr_btns" data-color="#A52A2A" style="background-color:#A52A2A"></button>
			<span class="clr_name">BROWN</span>

			</div>

			<div class="button_clr">
			<button class="btn btn-md cap_clr_btns" data-color="#00022e" style="background-color:#00022e"></button>
			<span class="clr_name">BLUE</span>


			</div>
			<div class="button_clr">
			<button class="btn btn-md cap_clr_btns" data-color="#013220" style="background-color:#013220"></button>
			<span class="clr_name">GREEN</span>

			</div>
			<div class="button_clr">
			<button class="btn btn-md cap_clr_btns" data-color="#228B22" style="background-color:#228B22"></button>
			<center>
				<span class="clr_name">EMRED  GREEN</span>
			</center>

			</div>

				<div class="button_clr">
			<button class="btn btn-md cap_clr_btns" data-color="#002366" style="background-color:#002366"></button>
			<center>
				<span class="clr_name">ROYAL BLUE</span>
			</center>

			</div>
			<div class="button_clr">
			<button class="btn btn-md cap_clr_btns" style="font-size:1vw;
	background-color:transparent;margin-top:1%;border:2px solid gray" id="show_slv_clr">8+</button>
</div>
		</div>
	</div>

	<div class="row p-0 m-0 h-100 w-100 btn_element" id="more_colorbox_slv">
		<div class="col-12 col-sm-12 col-md-12 col-xs-12 col-lg-12 p-0 m-0 
		w-100">
		<div class="button_clr"><button class="btn btn-md cap_clr_btns" data-color="#800080" style="background-color:#800080"></button>
				<span class="clr_name">PURPLE</span>

			</div>
			<div class="button_clr"><button class="btn btn-md cap_clr_btns" data-color="#008080" style="background-color:#008080"></button>
				<span class="clr_name">TEAL</span>

			</div>
			<div class="button_clr"><button class="btn btn-md cap_clr_btns" data-color="#FF0000" style="background-color:#FF0000"></button>
				<span class="clr_name">RED</span>

			</div>

			<div class="button_clr"><button class="btn btn-md cap_clr_btns" data-color="#f7a655" style="background-color:#f7a655;"></button>
				<span class="clr_name">SKIN</span>

			</div>

			<div class="button_clr"><button class="btn btn-md cap_clr_btns" data-color="#313131" style="background-color:#313131"></button>
				<span class="clr_name">GREY</span>

			</div>
			<div class="button_clr"><button class="btn btn-md cap_clr_btns"data-color="#cd7f32" style="background-color:#cd7f32" ></button>
				<span class="clr_name">ALMOND</span>

			</div>

			<div class="button_clr"><button class="btn btn-md cap_clr_btns" data-color="#073b4c" style="background-color:#073b4c"></button>
		    <span class="clr_name">SEAGREEN</span>

			</div>
			<div class="button_clr"><button class="btn btn-md cap_clr_btns" data-color="#540804" style="background-color:#540804"></button>
				<span class="clr_name">MAROON</span>


			</div>

			<div class="button_clr">
			<button class="btn btn-md clr_btns" style="font-size:1vw;
	background-color:transparent;margin-top:1%;border:2px solid gray" id="showless_slv">less</button>
</div>
		</div>
	</div>
	<div class="row p-0 m-0 h-100 w-100 btn_element" id="color_box_2">
			<div class="col-12 col-sm-12 col-md-12 col-xs-12 col-lg-12 p-0 m-0 w-100">
			<br><h5 class="heading1" style="text-align:left">⚫&nbsp;&nbsp;&nbsp;SECONDARY COLOR</h5>
			<div class="button_clr"><button class="btn btn-md cap_clr_btns" data-color="#7FFFD4" style="background-color:#7FFFD4"></button>
				<span class="clr_name">ACURMINE</span>

			</div>
			<div class="button_clr"><button class="btn btn-md cap_clr_btns" data-color="#FFC0CB" style="background-color:pink"></button>
				<span class="clr_name">GENS</span>

			</div>
			<div class="button_clr"><button class="btn btn-md cap_clr_btns" data-color="#FFD700" style="background-color:orange"></button>
				<span class="clr_name">GOLD</span>

			</div>

			<div class="button_clr"><button class="btn btn-md cap_clr_btns" data-color="#C0C0C0" style="background-color:silver;"></button>
				<span class="clr_name">SILVER</span>

			</div>

			<div class="button_clr"><button class="btn btn-md cap_clr_btns" data-color="#e2725b" style="background-color:#e2725b"></button>
				<span class="clr_name">Teracotta</span>

			</div>
			<div class="button_clr"><button class="btn btn-md cap_clr_btns" data-color="#20B2AA" style="background-color:#20B2AA"></button>
				<center>
					<span class="clr_name">KA GREEN</span>
				</center>

			</div>

			<div class="button_clr"><button class="btn btn-md cap_clr_btns" data-color="#8db600" style="background-color:#8db600"></button>
				<span class="clr_name">APPLE</span>

			</div>
			<div class="button_clr"><button class="btn btn-md cap_clr_btns" data-color="#cd7f32" style="background-color:#cd7f32"></button>
				<span class="clr_name">BRONZE</span>

			</div>
			<div class="button_clr"><button class="btn btn-md cap_clr_btns" style="font-size:1vw;
	background-color:transparent;margin-top:1%;border:2px solid gray" id="sub_slv_clr">8+</button>
	</div>				

			</div>
		</div>
	
	<div class="row p-0 m-0 h-100 w-100 btn_element" id="sub_color_2">
		<div class="col-12  col-sm-12 col-md-12 col-xs-12 col-lg-12 p-0 m-0 w-100">
<div class="button_clr"><button class="btn btn-md clr_btns"data-color="#fb5607" style="background-color:#fb5607;border:2px solid gray"></button>
				<span class="clr_name">ORANGE</span>

			</div>
			<div class="button_clr">
			<button class="btn btn-md cap_clr_btns" data-color="#fdc500"style="background-color:#fdc500"></button>
			<span class="clr_name">YELLOW</span>

			</div>

			<div class="button_clr">
			<button class="btn btn-md cap_clr_btns" data-color="#840032" style="background-color:#840032"></button>
			<span class="clr_name">DARKPINK</span>

			</div>
			<div class="button_clr">
			<button class="btn btn-md cap_clr_btns" data-color="#220901"style="background-color:#220901"></button>
			<span class="clr_name">MAROON</span>

			</div>

			<div class="button_clr">
			<button class="btn btn-md cap_clr_btns" data-color="#a663cc" style="background-color:#a663cc" ></button>
			<span class="clr_name">LITEPURPLE</span>


			</div>
			<div class="button_clr">
			<button class="btn btn-md cap_clr_btns" data-color="#3fa34d" style="background-color:#3fa34d"></button>
			<span class="clr_name">LEAVE</span>

			</div>
			<div class="button_clr">
		<button class="btn btn-md cap_clr_btns" data-color="#89fc00"style="background-color:#89fc00"></button>
				<span class="clr_name">PAROTGREEN</span>

			</div>

				<div class="button_clr">
			<button class="btn btn-md cap_clr_btns" data-color="#002366" style="background-color:#002366"></button>
			<center>
				<span class="clr_name">ROYAL BLUE</span>
			</center>

			</div>
			<div class="button_clr">
			<button class="btn btn-md cap_clr_btns" style="font-size:1vw;
	background-color:transparent;margin-top:1%;border:2px solid gray" id="less_3">less</button>
</div>
		</div>
	</div>
	<div class="row p-0 m-0 h-100 w-100 btn_element" id="slv_thrd_clr" style="margin-top:0px;margin-bottom:5%" >
			<div class="col-12 col-sm-12 col-md-12 col-xs-12 col-lg-12 p-0 m-0 w-100">
		<h5 class="heading1" style="text-align:left">⚫&nbsp;&nbsp;&nbsp;THIRD COLOR</h5>
			<div class="button_clr"><button class="btn btn-md cap_clr_btns" data-color="#7FFFD4" style="background-color:#7FFFD4"></button>
				<span class="clr_name">ACURMINE</span>

			</div>
			<div class="button_clr"><button class="btn btn-md cap_clr_btns" data-color="#FFC0CB" style="background-color:pink"></button>
				<span class="clr_name">GENS</span>

			</div>
			<div class="button_clr"><button class="btn btn-md cap_clr_btns" data-color="#FFD700" style="background-color:orange"></button>
				<span class="clr_name">GOLD</span>

			</div>

			<div class="button_clr"><button class="btn btn-md cap_clr_btns" data-color="#C0C0C0" style="background-color:silver;"></button>
				<span class="clr_name">SILVER</span>

			</div>

			<div class="button_clr"><button class="btn btn-md cap_clr_btns" data-color="#e2725b" style="background-color:#e2725b"></button>
				<span class="clr_name">Teracotta</span>

			</div>
			<div class="button_clr"><button class="btn btn-md cap_clr_btns" data-color="#20B2AA" style="background-color:#20B2AA"></button>
				<center>
					<span class="clr_name">KA GREEN</span>
				</center>

			</div>

			<div class="button_clr"><button class="btn btn-md cap_clr_btns" data-color="#8db600" style="background-color:#8db600"></button>
				<span class="clr_name">APPLE</span>

			</div>
			<div class="button_clr"><button class="btn btn-md cap_clr_btns" data-color="#cd7f32" style="background-color:#cd7f32"></button>
				<span class="clr_name">BRONZE</span>

			</div>
			<div class="button_clr"><button class="btn btn-md cap_clr_btns" style="font-size:1vw;
	background-color:transparent;margin-top:1%;border:2px solid gray" id="thrd_slv_clr">8+</button>
	</div>				

			</div>
		</div>
	
	<div class="row p-0 m-0 h-100 w-100 btn_element" id="thrd_color_2">
		<div class="col-12  col-sm-12 col-md-12 col-xs-12 col-lg-12 p-0 m-0 w-100">
<div class="button_clr"><button class="btn btn-md clr_btns"data-color="#fb5607" style="background-color:#fb5607;border:2px solid gray"></button>
				<span class="clr_name">ORANGE</span>

			</div>
			<div class="button_clr">
			<button class="btn btn-md cap_clr_btns" data-color="#fdc500"style="background-color:#fdc500"></button>
			<span class="clr_name">YELLOW</span>

			</div>

			<div class="button_clr">
			<button class="btn btn-md cap_clr_btns" data-color="#840032" style="background-color:#840032"></button>
			<span class="clr_name">DARKPINK</span>

			</div>
			<div class="button_clr">
			<button class="btn btn-md cap_clr_btns" data-color="#220901"style="background-color:#220901"></button>
			<span class="clr_name">MAROON</span>

			</div>

			<div class="button_clr">
			<button class="btn btn-md cap_clr_btns" data-color="#a663cc" style="background-color:#a663cc" ></button>
			<span class="clr_name">LITEPURPLE</span>


			</div>
			<div class="button_clr">
			<button class="btn btn-md cap_clr_btns" data-color="#3fa34d" style="background-color:#3fa34d"></button>
			<span class="clr_name">LEAVE</span>

			</div>
			<div class="button_clr">
		<button class="btn btn-md cap_clr_btns" data-color="#89fc00"style="background-color:#89fc00"></button>
				<span class="clr_name">PAROTGREEN</span>

			</div>

				<div class="button_clr">
			<button class="btn btn-md cap_clr_btns" data-color="#002366" style="background-color:#002366"></button>
			<center>
				<span class="clr_name">ROYAL BLUE</span>
			</center>

			</div>
			<div class="button_clr">
			<button class="btn btn-md cap_clr_btns" style="font-size:1vw;
	background-color:transparent;margin-top:1%;border:2px solid gray" id="less_slv_thrd">less</button>
</div>
		</div>
	</div>
</div>
	<div class="row p-0 m-0 h-100 w-100" id="shirt_box_1">
	<div class="col-12 col-sm-12 col-md-12 col-xs-12 col-lg-12 p-0 m-0 w-100">
		<br><h5 class="shirt_heading">⚫&nbsp;&nbsp;Non BHA-Colors-Available for Order,not to registration</h5>
		<div class="row p-0 m-0 h-100 w-100" id="img_row">
			<div class="col-4 col-sm-4 col-md-4 col-xs-4 col-lg-4 p-0 m-0 w-100"><img class="img1" src="img/jacket.jpg"><p class="shirt_label">Plain</p></div>
			<div class="col-4 col-sm-4 col-md-4 col-xs-4 col-lg-4 p-0 m-0 w-100"><img class="img1" src="img/jacket.jpg"><p class="shirt_label">Seams</p></div>
			<div class="col-4 col-sm-4 col-md-4 col-xs-4 col-lg-4 p-0 m-0 w-100"><img  class="img1" src="img/jacket.jpg"><p class="shirt_label">Epluates</p></div>
			
		</div>
	   </div>
     </div>
     <br>
<div class="row p-0 m-0 h-100 w-100">
	<div class="col-12 col-sm-12 col-md-12 col-xs-12 col-lg-12 p-0 m-0 w-100">
		<nav class="navbar navbar-inverse">
  <ul class="nav navbar-nav main-tabs" >
    <li class="list_cap"><button type="btn btn-md" id="short_btn2">SHORTPATTERN</button></li>
    <li class="list_cap"><button type="btn btn-md" style="display: none">SHORT STYLE</button></li>
        <li class="list_cap"><button type="btn btn-md" id="short_btn1">SHORTSTYLE</button></li>
    </ul>
</nav>
</div>
</div>
<div id="color_box_3" class="container-fluid">
	<h5 class="heading">⚫&nbsp;&nbsp;&nbsp;PRIMARY COLORS</h5>
	<div class="row p-0 m-0 h-100 w-100 btn_element">
		<div class="col-12 col-sm-12 col-md-12 col-xs-12 col-lg-12 p-0 m-0 w-100" >
			<div class="button_clr"><button class="btn btn-md short_clr_btns" style="background-color:white;border:2px solid gray;text-align:center" data-color="#FFFFFF"></button>
				<span class="clr_name">White</span>

			</div>
			<div class="button_clr">
			<button class="btn btn-md short_clr_btns" style="background-color:#E1C699" data-color="#E1C699"></button>
			<span class="clr_name">BEIGE</span>

			</div>

			<div class="button_clr">
		<button class="btn btn-md short_clr_btns" data-color="#000000"
			style="background-color:black"></button>
			<span class="clr_name">BLACK</span>

			</div>
			<div class="button_clr">
			<button class="btn btn-md short_clr_btns" data-color="#A52A2A" style="background-color:#A52A2A"></button>
			<span class="clr_name">BROWN</span>

			</div>

			<div class="button_clr">
			<button class="btn btn-md short_clr_btns" data-color="#00022e"style="background-color:#00022e"></button>
			<span class="clr_name">BLUE</span>


			</div>
			<div class="button_clr">
			<button class="btn btn-md short_clr_btns" data-color="#013220" style="background-color:#013220"></button>
			<span class="clr_name">GREEN</span>

			</div>
			<div class="button_clr">
			<button class="btn btn-md short_clr_btns" data-color="#228B22" style="background-color:#228B22"></button>
			<center>
				<span class="clr_name">EMRED  GREEN</span>
			</center>

			</div>

				<div class="button_clr">
			<button class="btn btn-md short_clr_btns" data-color="#002366" style="background-color:#002366"></button>
			<center>
				<span class="clr_name">ROYAL BLUE</span>
			</center>

			</div>
			<div class="button_clr">
			<button class="btn btn-md short_clr_btns" style="font-size:1vw;
	background-color:transparent;margin-top:1%;border:2px solid gray" id="show_cap_clr">8+</button>

</div>
		</div>
		<br> 
<div class="row p-0 m-0 h-100 w-100 btn_element" id="more_colorbox_cap">
		<div class="col-12 col-sm-12 col-md-12 col-xs-12 col-lg-12 p-0 m-0 w-100">
			<div class="button_clr">
			<button class="btn btn-md cap_clr_btns" data-color="#7FFFD4" style="background-color:#7FFFD4"></button>
				<span class="clr_name">ACURMINE</span>

			</div>
			<div class="button_clr">
			<button class="btn btn-md short_clr_btns" data-color="#FFC0CB" style="background-color:pink"></button>
				<span class="clr_name">GENS</span>

			</div>
			<div class="button_clr"><button class="btn btn-md short_clr_btns" data-color="#FFD700" style="background-color:#FFD700"></button>
				<span class="clr_name">GOLD</span>

			</div>

			<div class="button_clr"><button class="btn btn-md short_clr_btns" data-color="#C0C0C0" style="background-color:#C0C0C0"></button>
				<span class="clr_name">SILVER</span>

			</div>

			<div class="button_clr"><button class="btn btn-md short_clr_btns" data-color="#e2725b" style="background-color:#e2725b"></button>
				<span class="clr_name">Tercotta</span>

			</div>
			<div class="button_clr"><button class="btn btn-md short_clr_btns" data-color="#20B2AA" style="background-color:#20B2AA"></button>
				<center> 
					<span class="clr_name">KA GREEN</span>
				</center>

			</div>

			<div class="button_clr"><button class="btn btn-md short_clr_btns" data-color="#8db600" style="background-color:#8db600"></button>
				<span class="clr_name">APPLE</span>

			</div>
			<div class="button_clr">
			<button class="btn btn-md short_clr_btns"data-color="#cd7f32" style="background-color:#cd7f32" ></button>
				<span class="clr_name">BRONZE</span>

			</div>

			<div class="button_clr">
			<button class="btn btn-md clr_btns"   id="showless_cap">less</button>
		</div></div>
	</div>

	<div class="row p-0 m-0 h-100 w-100 btn_element" id="cap_color_box2"> 
			<div class="col-12 col-sm-12 col-md-12 col-xs-12 col-lg-12 p-0 m-0 w-100">
			<br><h5 class="heading1" style="text-align:left; margin-top:5%">⚫&nbsp;&nbsp;&nbsp;SECONDARY COLOR</h5>

			<div class="button_clr">
				<button class="btn btn-md short_clr_btns" data-color="#7FFFD4" style="background-color:#7FFFD4"></button>
				<span class="clr_name">ACURMINE</span>

			</div>
			<div class="button_clr">
				<button class="btn btn-md short_clr_btns" data-color="#FFC0CB" style="background-color:pink"></button>
				<span class="clr_name">GENS</span>

			</div>
			<div class="button_clr"><button class="btn btn-md short_clr_btns" data-color="#FFD700" style="background-color:#FFD700"></button>
				<span class="clr_name">GOLD</span>

			</div>

			<div class="button_clr"><button class="btn btn-md short_clr_btns" data-color="#C0C0C0" style="background-color:#C0C0C0"></button>
				<span class="clr_name">SILVER</span>

			</div>

			<div class="button_clr">
				<button class="btn btn-md short_clr_btns" data-color="#e2725b" style="background-color:#e2725b"></button>
				<span class="clr_name">Tercotta</span>

			</div>
			<div class="button_clr"><button class="btn btn-md short_clr_btns" data-color="#20B2AA" style="background-color:#20B2AA"></button>
				<center>
					<span class="clr_name">KA GREEN</span>
				</center>

			</div>

			<div class="button_clr"><button class="btn btn-md short_clr_btns" data-color="#8db600" style="background-color:#8db600"></button>
				<span class="clr_name">APPLE</span>

			</div>
			<div class="button_clr"><button class="btn btn-md short_clr_btns"data-color="#cd7f32" style="background-color:#cd7f32" ></button>
				<span class="clr_name">BRONZE</span>

			</div>

			<div class="button_clr">
			<button class="btn btn-md cap_clr_btns"  id="sub_cap_clr">8+</button>
	</div>				

			</div>
		</div>
	
<div class="row p-0 m-0 h-100 w-100 btn_element" id="sub_color_4">
		<div class="col-12 col-sm-12 col-md-12 col-xs-12 col-lg-12 p-0 m-0 w-100">
			<div class="button_clr"><button class="btn btn-md short_clr_btns" style="background-color:white;border:2px solid gray;text-align:center" data-color="#FFFFFF"></button>
				<span class="clr_name">White</span>


			</div>
			<div class="button_clr">
			<button class="btn btn-md short_clr_btns" style="background-color:#E1C699" data-color="#E1C699"></button>
			<span class="clr_name">BEIGE</span>

			</div>

			<div class="button_clr">
				<button class="btn btn-md short_clr_btns" data-color="#000000"
			style="background-color:black"></button>
			<span class="clr_name">BLACK</span>

			</div>
			<div class="button_clr">
				<button class="btn btn-md short_clr_btns" data-color="#A52A2A" style="background-color:brown"></button>
			<span class="clr_name">BROWN</span>

			</div>

			<div class="button_clr">
			<button class="btn btn-md short_clr_btns" data-color="#00022e"style="background-color:#00022e"></button>
			<span class="clr_name">BLUE</span>


			</div>
			<div class="button_clr">
			<button class="btn btn-md short_clr_btns" data-color="#013220" style="background-color:#013220"></button>			
			<span class="clr_name">GREEN</span>

			</div>
			<div class="button_clr">
			<button class="btn btn-md short_clr_btns" data-color="#228B22" style="background-color:#228B22"></button>
			<center><span class="clr_name">EMRED GREEN</span></center>

			</div>

				<div class="button_clr">
			<button class="btn btn-md short_clr_btns" data-color="#002366" style="background-color:#002366"></button>
			<center><span class="clr_name">ROYAL BLUE</span></center>

			</div>
			<div class="button_clr">
			<button class="btn btn-md clr_btns"  id="less_4">less</button>

		</div>
	</div>

			
	</div>
<div class="row p-0 m-0 h-100 w-100 btn_element" id="cap_color_box2"> 
			<div class="col-12 col-sm-12 col-md-12 col-xs-12 col-lg-12 p-0 m-0 w-100">
			<br><h5 class="heading1" style="text-align:left; margin-top:0px ">⚫&nbsp;&nbsp;&nbsp;THIRD COLOR</h5>

			<div class="button_clr">
				<button class="btn btn-md short_clr_btns" data-color="#7FFFD4" style="background-color:#7FFFD4"></button>
				<span class="clr_name">ACURMINE</span>

			</div>
			<div class="button_clr">
				<button class="btn btn-md short_clr_btns" data-color="#FFC0CB" style="background-color:pink"></button>
				<span class="clr_name">GENS</span>

			</div>
			<div class="button_clr"><button class="btn btn-md short_clr_btns" data-color="#FFD700" style="background-color:#FFD700"></button>
				<span class="clr_name">GOLD</span>

			</div>

			<div class="button_clr"><button class="btn btn-md short_clr_btns" data-color="#C0C0C0" style="background-color:#C0C0C0"></button>
				<span class="clr_name">SILVER</span>

			</div>

			<div class="button_clr">
				<button class="btn btn-md short_clr_btns" data-color="#e2725b" style="background-color:#e2725b"></button>
				<span class="clr_name">Tercotta</span>

			</div>
			<div class="button_clr"><button class="btn btn-md short_clr_btns" data-color="#20B2AA" style="background-color:#20B2AA"></button>
				<center>
					<span class="clr_name">KA GREEN</span>
				</center>

			</div>

			<div class="button_clr"><button class="btn btn-md short_clr_btns" data-color="#8db600" style="background-color:#8db600"></button>
				<span class="clr_name">APPLE</span>

			</div>
			<div class="button_clr"><button class="btn btn-md short_clr_btns"data-color="#cd7f32" style="background-color:#cd7f32" ></button>
				<span class="clr_name">BRONZE</span>

			</div>

			<div class="button_clr">
			<button class="btn btn-md cap_clr_btns"  id="sub_cap_clr">8+</button>
	</div>				

			</div>
		</div>
	
<div class="row p-0 m-0 h-100 w-100 btn_element" id="sub_color_4">
		<div class="col-12 col-sm-12 col-md-12 col-xs-12 col-lg-12 p-0 m-0 w-100">
			<div class="button_clr"><button class="btn btn-md short_clr_btns" style="background-color:white;border:2px solid gray;text-align:center" data-color="#FFFFFF"></button>
				<span class="clr_name">White</span>


			</div>
			<div class="button_clr">
			<button class="btn btn-md short_clr_btns" style="background-color:#E1C699" data-color="#E1C699"></button>
			<span class="clr_name">BEIGE</span>

			</div>

			<div class="button_clr">
				<button class="btn btn-md short_clr_btns" data-color="#000000"
			style="background-color:black"></button>
			<span class="clr_name">BLACK</span>

			</div>
			<div class="button_clr">
				<button class="btn btn-md short_clr_btns" data-color="#A52A2A" style="background-color:brown"></button>
			<span class="clr_name">BROWN</span>

			</div>

			<div class="button_clr">
			<button class="btn btn-md short_clr_btns" data-color="#00022e"style="background-color:#00022e"></button>
			<span class="clr_name">BLUE</span>


			</div>
			<div class="button_clr">
			<button class="btn btn-md short_clr_btns" data-color="#013220" style="background-color:#013220"></button>			
			<span class="clr_name">GREEN</span>

			</div>
			<div class="button_clr">
			<button class="btn btn-md short_clr_btns" data-color="#228B22" style="background-color:#228B22"></button>
			<center><span class="clr_name">EMRED GREEN</span></center>

			</div>

				<div class="button_clr">
			<button class="btn btn-md short_clr_btns" data-color="#002366" style="background-color:#002366"></button>
			<center><span class="clr_name">ROYAL BLUE</span></center>

			</div>
			<div class="button_clr">
			<button class="btn btn-md clr_btns"  id="less_4">less</button>

		</div>
	</div>

			
	</div>
	</div>

</div>
<div class="row p-0 m-0 h-100 w-100" id="shirt_box_2">
	<div class="col-12 col-sm-12 col-md-12 col-xs-12 col-lg-12 p-0 m-0 w-100">
		<br><h5 class="shirt_heading">⚫&nbsp;&nbsp;Non BHA-Colors-Available for Order,not to registration</h5>
		<div class="row p-0 m-0 h-100 w-100" id="img_row">
			<div class="col-4 col-sm-4 col-md-4 col-xs-4 col-lg-4 p-0 m-0 w-100"><img class="img1" src="img/jacket.jpg"><p class="shirt_label">Plain</p></div>
			<div class="col-4 col-sm-4 col-md-4 col-xs-4 col-lg-4 p-0 m-0 w-100"><img class="img1" src="img/jacket.jpg"><p class="shirt_label">Seams</p></div>
			<div class="col-4 col-sm-4 col-md-4 col-xs-4 col-lg-4 p-0 m-0 w-100"><img  class="img1" src="img/jacket.jpg"><p class="shirt_label">Epluates</p></div>
			
		</div>
	   </div>
     </div>
<br>
<div class="row p-0 m-0 h-100 w-100">
	<div class="col-12 col-sm-12 col-md-12 col-xs-12 col-lg-12 p-0 m-0 w-100">
		<nav class="navbar navbar-inverse">
  <ul class="nav navbar-nav main-tabs">
    <li class="list"><button type="btn btn-md" id="spec_btn">SPECIFICATION</button></li>
  </ul>
</nav>
</div>
</div>
<div  id="spec_box">

	<div class="row p-0 m-0 h-100 w-100">
		<div class="col-6 col-sm-6 col-md-6 col-xs-6 col-lg- p-0 m-0 w-100" >
    <div class="form-group">
      <label for="sel1"><span style="font-size:1.2vw">•</span>&nbsp;&nbsp;&nbsp;MATERIAL</label>
      <select class="form-control" id="sel1">
        <option>LEATHER</option>
        <option>COTTON</option>
        <option>LELEN</option>
        <option>WOOLEN</option>
      </select>
 </div>
</div>
 <div class="col-6 col-sm-6 col-md-6 col-xs-6 col-lg-6 p-0 m-0 w-100">
    <div class="form-group" id="siz_mrg">
      <label for="sel2"><span style="font-size:1.2vw">•</span>&nbsp;&nbsp;&nbsp;SIZE</label>
      <select class="form-control" id="sel1">
        <option>14</option>
        <option>16</option>
        <option>18</option>
        <option>20</option>
      </select>
 </div>
	</div>	

</div>
<div class="row p-0 m-0 h-100 w-100">
		<div class="col-6 col-sm-6 col-md-6 col-xs-6 col-lg-6 p-0 m-0 w-100">
    <div class="form-group">
      <label for="sel3"><span style="font-size:1.2vw">•</span>&nbsp;&nbsp;&nbsp;ITEM(S)</label>
      <select class="form-control" id="sel1">
        <option>SHIRT</option>
        <option>CAP</option>
        <option>TROUSE</option>
        <option>MUFLER</option>
      </select>
 </div>
</div>
 <div class="col-6 col-sm-6 col-md-6 col-xs-6 col-lg-6 p-0 m-0 w-100" class="left_col">
    <div class="form-group" id="qty_mrg">
      <label for="sel4"><span style="font-size:1.2vw">•</span>&nbsp;&nbsp;&nbsp;QUANTITY</label>
      <select class="form-control" id="sel1">
        <option>14</option>
        <option>16</option>
        <option>18</option>
        <option>20</option>
      </select>
 </div>
	</div>	

</div>

</div>
</div>
<!--form value!-->
 <form>
<input type="hidden" name="shirt_clr" class="shirt_clr" value="0">
<input type="hidden" name="shirtmrk_clr" class="shirtmrk_clr" value="0">
<input type="hidden" name="slv_clr" class="slv_clr" value="0">
<input type="hidden" name="short_clr" class="short_clr" value="0">
<input type="hidden" name="" id="input" value="<?php echo ($_GET['id']);?>">
	<input type="hidden" name="" id="inp_id" value="">

</form>

<!--functions !-->

<script type="text/javascript">
	<?php
$myURL="http://localhost/PROJECT_1/configurator.php/";
?>
//save changes//
     $('#save_btn').click(function(){
     	var shirt_clr=$('.shirt_clr').val();
     	var shirtmrk_clr=$('.shirtmrk_clr').val();
     	var slv_clr=$('.slv_clr').val();
     	var short_clr=$('.short_clr').val();

     	$.ajax({
     		url:'save.php',	
     		type:'POST',
    data:{Shrt_clr:shirt_clr,Shrtmrk:shirtmrk_clr,Slv_clr:slv_clr,Short_clr:short_clr},
     		success:function(result){
     			
     		alert("data saved");
     		var data=$.parseJSON(result);
     		    	var save_url=('<?php echo $myURL;?>'+'?id='+data.id);
     		    	console.log(save_url);
     		    	$('#inp_id').val(data.id);
   
     	        
     		}
     		
     	
     	});
      

     });


		var clara=claraplayer('clara-embed');
	clara.on('loaded', function() {
    console.log('model  is loaded and ready');
   var C_ID=$('#input').val();
  //alert(C_ID);
   $.ajax({
   	url:'fetch.php',
   	type:'POST',
   	data:{ C_ID : C_ID },
   	success:function(result){
   		var obj=$.parseJSON(result);
   		var fetch_id=obj[0]['id'];
   		var fetch_clr=obj[0]['color'];
   		alert(fetch_id + fetch_clr);

   		

   	}
   });
   
  
    
  
  });

clara.sceneIO.fetchAndUse('d554fb3e-7b2d-49bb-92fc-c116953e00ff');
//hide and show//
$('#hide').click(function(){
clara.scene.set({
	name:'base color',
	type:'PolyMesh',
	plug:'Properties',
	property:'visible'},false);
	
});

//color change//
$(document).ready(function(){
      $('.clr_btns').click(
      	function colors(colorval) {
           hexToRGB = function(hex){
    var r = hex >> 16;
    var g = hex >> 8 & 0xFF;
    var b = hex & 0xFF;
    return [r,g,b];
}
    	var hex_color= $(this).data('color');
          material = 'top Base color';
        c = hex_color.replace('#', '0x');
        color_change = hexToRGB(c);
        clara.scene.set({
            name: material,
            plug: 'Material',
            property: 'baseColor'
        }, {
            r: color_change[0] / 255,
            g: color_change[1] / 255,
            b: color_change[2] / 255
        }); 

         material = 'Colar Base color';
        c = hex_color.replace('#', '0x');
        color_change = hexToRGB(c);
        clara.scene.set({
            name: material,
            plug: 'Material',
            property: 'baseColor'
        }, {
            r: color_change[0] / 255,
            g: color_change[1] / 255,
            b: color_change[2] / 255
        }); 

 
});
      //short color change//
		 $('.short_clr_btns').click(
      	function colors(colorval) {
           hexToRGB = function(hex){
    var r = hex >> 16;
    var g = hex >> 8 & 0xFF;
    var b = hex & 0xFF;
    return [r,g,b];
}
    	var hex_color= $(this).data('color');
          material = 'short base color';
        c = hex_color.replace('#', '0x');
        color_change = hexToRGB(c);
        clara.scene.set({
            name: material,
            plug: 'Material',
            property: 'baseColor'
        }, {
            r: color_change[0] / 255,
            g: color_change[1] / 255,
            b: color_change[2] / 255
        }); 
      
      });
//shirt texture color chng
		  $('.mrk_clr_btns').click(
      	function colors(colorval) {
           hexToRGB = function(hex){
    var r = hex >> 16;
    var g = hex >> 8 & 0xFF;
    var b = hex & 0xFF;
    return [r,g,b];
}
    	var hex_color= $(this).data('color');
          material = 'Top texture';
        c = hex_color.replace('#', '0x');
        color_change = hexToRGB(c);
        clara.scene.set({
            name: material,
            plug: 'Material',
            property: 'baseColor'
        }, {
            r: color_change[0] / 255,
            g: color_change[1] / 255,
            b: color_change[2] / 255
        }); 
      
        material = 'Magic part';
        c = hex_color.replace('#', '0x');
        color_change = hexToRGB(c);
        clara.scene.set({
            name: material,
            plug: 'Material',
            property: 'baseColor'
        }, {
            r: color_change[0] / 255,
            g: color_change[1] / 255,
            b: color_change[2] / 255
        }); 
        material = 'colartextuee';
        c = hex_color.replace('#', '0x');
        color_change = hexToRGB(c);
        clara.scene.set({
            name: material,
            plug: 'Material',
            property: 'baseColor'
        }, {
            r: color_change[0] / 255,
            g: color_change[1] / 255,
            b: color_change[2] / 255
        }); 
      
      

      });
		 
		  $('.cap_clr_btns').click(
      	function colors(colorval) {
           hexToRGB = function(hex){
    var r = hex >> 16;
    var g = hex >> 8 & 0xFF;
    var b = hex & 0xFF;
    return [r,g,b];
}
    	var hex_color= $(this).data('color');
          material = 'arms bottom';
        c = hex_color.replace('#', '0x');
        color_change = hexToRGB(c);
        clara.scene.set({
            name: material,
            plug: 'Material',
            property: 'baseColor'
        }, {
            r: color_change[0] / 255,
            g: color_change[1] / 255,
            b: color_change[2] / 255
        }); 
         material = 'arms bottom base color';
        c = hex_color.replace('#', '0x');
        color_change = hexToRGB(c);
        clara.scene.set({
            name: material,
            plug: 'Material',
            property: 'baseColor'
        }, {
            r: color_change[0] / 255,
            g: color_change[1] / 255,
            b: color_change[2] / 255
        }); 
      
      });
//clr fetch//
    $('.clr_btns').click(function(){
   var color=$(this).attr('data-color');
   $('.shirt_clr').val(color);
  


 });
     $('.mrk_clr_btns').click(function(){
   var color=$(this).attr('data-color');
   $('.shirtmrk_clr').val(color);
  


 });
      $('.short_clr_btns').click(function(){
   var color=$(this).attr('data-color');
   $('.short_clr').val(color);
  


 });
       $('.cap_clr_btns').click(function(){
   var color=$(this).attr('data-color');
   $('.slv_clr').val(color);
  


 });
     

      //cap color change//
      $('.cap_clr_btns').click(
      		function colors(colorval) {
           hexToRGB = function(hex){
    var r = hex >> 16;
    var g = hex >> 8 & 0xFF;
    var b = hex & 0xFF;
    return [r,g,b];
}

var hex_color=$(this).data('color');
material='head';

c = hex_color.replace('#', '0x');
        color_change = hexToRGB(c);
        clara.scene.set({
            name: material,
            plug: 'Material',
            property: 'baseColor'
        }, {
            r: color_change[0] / 255,
            g: color_change[1] / 255,
            b: color_change[2] / 255
        });  

    



    });

    
//texture apply//
$('.texture').click(function(){
var text_link=$(this).data('pattern');
var name=$(this).data('name');
            clara.assets.importImage(text_link, {
                resizeTo: 1024,
                targetFormat: 'png',
                quality: 60
            }).then(handleImport).catch(handleError);
        function handleImport(attrs) {
            clara.scene.set({
                name: name,
                plug: 'Material',
                property: 'baseMap'
            }, attrs.imageNodeId);
        };
        function handleError(err) {
            console.log('Import image error: ', err);
        }
        
    });


});





</script>
</body>
</html>