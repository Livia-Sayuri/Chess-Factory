<?php
	$Write="<?php $" . "UIDresult=''; " . "echo $" . "UIDresult;" . " ?>";
	file_put_contents('UIDContainer.php',$Write);
?>
<?php
include('verify.php');
    $Write="<?php $" . "UIDresult=''; " . "echo $" . "UIDresult;" . " ?>";
	file_put_contents('UIDContainer.php',$Write);
?>
<!DOCTYPE html>
<html>
	<head>
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/bootstrap.min.js"></script>
		<script src="jquery.min.js"></script>
		<script>
			$(document).ready(function(){
				 $("#getUID").load("UIDContainer.php");
				setInterval(function() {
					$("#getUID").load("UIDContainer.php");	
				}, 500);
			});
		</script>
		<style>
		html {
			font-family: Arial;
			display: inline-block;
			margin: 0px auto;
			text-align: center;
		}
		body{
			 background-color:black;
		}
		ul.topnav {
			list-style-type: none;
			margin: auto;
			padding: 0;
			overflow: hidden;
			background-color: #7c7241;
			width: 70%;
		}

		ul.topnav li {float: left;}

		ul.topnav li a {
			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}

		ul.topnav li a:hover:not(.active) {background-color: #000000;}

		ul.topnav li a.active {background-color: #333;}

		ul.topnav li.right {float: right;}

		@media screen and (max-width: 6000px) {
			ul.topnav li.right, 
			ul.topnav li {float: none;}
		}
		
		td.lf {
			padding-left: 15px;
			padding-top: 12px;
			padding-bottom: 12px;
		}
		.neonText {
		color: #fff;
		text-shadow:
			0 0 7px #fff,
			0 0 10px #fff,
			0 0 21px #fff,
			0 0 42px #c2a73a,
			0 0 82px #c2a73a,
			0 0 92px #c2a73a,
			0 0 102px #c2a73a,
			0 0 151px #c2a73a;
		}

		h1 {
		font-size: 3.2rem;
		animation: flicker 1.5s infinite alternate;     
		}

		/* Flickering animation */
		@keyframes flicker {
			
		0%, 18%, 22%, 25%, 53%, 57%, 100% {

			text-shadow:
			0 0 4px #fff,
			0 0 11px #fff,
			0 0 19px #fff,
			0 0 40px #c2a73a,
			0 0 80px #c2a73a,
			0 0 90px #c2a73a,
			0 0 100px #c2a73a,
			0 0 150px #c2a73a;
		
		}
		
		20%, 24%, 55% {        
			text-shadow: none;
		}    
		}


		/* Additional styling */
		
		h2 {
		font-size: 1.5rem;
		animation: flicker 1.5s infinite alternate;     

		}
		.container {
		margin-top: 5vh;
		margin-bottom: 5vh;

		}

		body {
		font-size: 18px;
		font-family: "Times New Roman", sans-serif;
		background-color: black;
		}  

		h1, h2 {
		text-align: center;
		text-transform: uppercase;
		font-weight: 400;
		}

		/* For mobile phones: */
		[class*="col-"] {
		width: 100%;
		}

		@media only screen and (min-width: 600px) {
		/* For tablets: */
		.col-s-1 {width: 8.33%;}
		.col-s-2 {width: 16.66%;}
		.col-s-3 {width: 25%;}
		.col-s-4 {width: 33.33%;}
		.col-s-5 {width: 41.66%;}
		.col-s-6 {width: 50%;}
		.col-s-7 {width: 58.33%;}
		.col-s-8 {width: 66.66%;}
		.col-s-9 {width: 75%;}
		.col-s-10 {width: 83.33%;}
		.col-s-11 {width: 91.66%;}
		.col-s-12 {width: 100%;}
		}

		@media only screen and (min-width: 768px) {
		/* For desktop: */
		.col-1 {width: 8.33%;}
		.col-2 {width: 16.66%;}
		.col-3 {width: 25%;}
		.col-4 {width: 33.33%;}
		.col-5 {width: 41.66%;}
		.col-6 {width: 50%;}
		.col-7 {width: 58.33%;}
		.col-8 {width: 66.66%;}
		.col-9 {width: 75%;}
		.col-10 {width: 83.33%;}
		.col-11 {width: 91.66%;}
		.col-12 {width: 100%;}
		}

		</style>
		
		<title>Read Tag : Chess 4.0</title>
	</head>
	
	<body>			
		   <h1 class="neonText">
			   Chess 4.0</h1>

		<ul class="topnav">
			<li><a href="home.php">Home</a></li>
			<li><a href="user data.php">User Data</a></li>
			<li><a href="registration.php">Registration</a></li>
			<li><a class="active" href="read tag.php">Read Tag ID</a></li>
			<li><a href="commandsMES4.php">MES4 Interface</a></li>

		</ul>
		
		<br>
			<h2 class="neonText"
		 align="center" id="blink">Please Scan Chess Piece to Display ID or Piece Data</h2>
	
		<p id="getUID" hidden></p>
		
		<br>
		<div id="show_user_data">
			<form>
			<div class="col-sm-3 col-sm-9">
				<table  width="402" border="1" bordercolor=gray align="center"  cellpadding="0" cellspacing="1"  bgcolor="#000" style="padding: 2px">
					<tr>
						<td  height="40" align="center"  bgcolor="#7c7241"><font  color="#FFFFFF">
							<b>User Data</b>
							</font>
						</td>
					</tr>
					<tr>
						<td  bgcolor="#000000">
						<div class="col-sm-3 col-sm-9">
							<table width="402"  border="0" align="center" cellpadding="5"  cellspacing="0">
								<tr>
									<td width="113" align="left" class="lf">ID</td>
									<td style="font-weight:bold">:</td>
									<td align="left">--------</td>
								</tr>
								<tr bgcolor="#000000">
									<td align="left" class="lf">Name</td>
									<td style="font-weight:bold">:</td>
									<td align="left">--------</td>
								</tr>
								
								
							</table>
						</td>
					</tr>
				</table>
			</form>
		</div>

		<script>
			var myVar = setInterval(myTimer, 1000);
			var myVar1 = setInterval(myTimer1, 1000);
			var oldID="";
			clearInterval(myVar1);

			function myTimer() {
				var getID=document.getElementById("getUID").innerHTML;
				oldID=getID;
				if(getID!="") {
					myVar1 = setInterval(myTimer1, 500);
					showUser(getID);
					clearInterval(myVar);
				}
			}
			
			function myTimer1() {
				var getID=document.getElementById("getUID").innerHTML;
				if(oldID!=getID) {
					myVar = setInterval(myTimer, 500);
					clearInterval(myVar1);
				}
			}
			
			function showUser(str) {
				if (str == "") {
					document.getElementById("show_user_data").innerHTML = "";
					return;
				} else {
					if (window.XMLHttpRequest) {
						// code for IE7+, Firefox, Chrome, Opera, Safari
						xmlhttp = new XMLHttpRequest();
					} else {
						// code for IE6, IE5
						xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
					}
					xmlhttp.onreadystatechange = function() {
						if (this.readyState == 4 && this.status == 200) {
							document.getElementById("show_user_data").innerHTML = this.responseText;
						}
					};
					xmlhttp.open("GET","read tag user data.php?id="+str,true);
					xmlhttp.send();
				}
			}
			
			var blink = document.getElementById('blink');
			setInterval(function() {
				blink.style.opacity = (blink.style.opacity == 0 ? 1 : 0);
			}, 750); 
		</script>
	</body>
</html>

<h2><a href="logout.php">Leave Factory</a></h2>