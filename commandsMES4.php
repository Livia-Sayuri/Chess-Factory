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
<html lang="en">
<html>
	<head>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/bootstrap.min.js"></script>

		<style>
		
		html {
			font-family: "Times New Roman";
			display: inline-block;
			margin: 0px auto;
			text-align: center;
			
		}
		html, body {
  			margin: 0;
  			padding: 0;
		}

		body{
			background-color:#000000;
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
		
		img {
			display: block;
			margin-left: auto;
			margin-right: auto;
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
			0 0 40px #d1b74b,
			0 0 80px #d1b74b,
			0 0 90px #d1b74b,
			0 0 100px #d1b74b,
			0 0 150px #d1b74b;
		
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
		}

		body {
		font-size: 18px;
		font-family: "Times New Roman", sans-serif;
		background-color: #010a01;
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

		input, ul.submenu {
		display: none;

		}
		/*position the label*/
		label {
		position: relative;
		display: block;
		cursor: pointer;
		}
		/*show the submenu when input is checked*/
		input:checked~ul.submenu {
		display: block;
		}
		
		</style>
		<title>commands MES4 Interfaces : Chess 4.0</title>
	</head>
	
	<body>	

	<h1 class="neonText">Chess 4.0</h1>

	<ul class="topnav">
		<li><a href="home.php">Home</a></li>
		<li><a href="user data.php">User Data</a></li>
		<li><a href="registration.php">Registration</a></li>
		<li><a href="read tag.php">Read Tag ID</a></li>
		<li><a class="active" href="commandsMES4.php">MES4 Interface</a></li>
	</ul>
    
    	<h2>Files from I4.0</h2>
	<ul>
	<li><a href="http://172.16.127.17/I4.0/Apps/index.html">MES4 MOBILE</a></li>
	<li><a href="http://172.16.127.17/I4.0/mes4/EN/mes4.php?content=production&subcontent=resources">MES4 ORDER MANAGEMENT</a></li>
	<li><a href="http://172.16.127.17/I4.0/InfoPortal_CP-F/DE/index.html">INFO PORTAL_CP-F</a></li>
    <li><a href="http://172.16.127.17/I4.0/manualworkstation/">MANUAL WORKSTATION</a></li>
    <li><a href="http://172.16.127.17/I4.0/energy/EN/energy.php">FESTO ENERGY</a></li>
    <li><a href="http://172.16.127.17/I4.0/energy/EN/MANUALS/">FESTO ENERGY MANUALS </a></li>
	</ul>
        <h2>Files from InfoPortal</h2>
	<ul>
    <li><a href="http://172.16.127.17/InfoPortal/EN/index.html">INFO PORTAL</a></li>
    <li><a href="http://172.16.127.17/InfoPortal/Ciros/EN/index.html">CIROS</a></li>
    <li><a href="http://172.16.127.17/InfoPortal/labs/Samples/EN/MPS%20203.html">LABS</a></li>
    <li><a href="http://172.16.127.17/InfoPortal/Robotics/Samples/EN/TWEEN.html">ROBOTICS</a></li>
    <li><a href="http://172.16.127.17/InfoPortal/Datasheets/">DATASHEETS</a></li>

	</ul>
</body>
</html>

<div style=" margin-top: 20px" class="form-action">

<h2><a href="logout.php">Leave Factory</a></h2>