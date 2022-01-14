<?php
session_start();

?>
 
<!DOCTYPE html>
<html>
    
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
            background: black;
            background-image: url("chess ok ok.jpg");
            background-size: cover;
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

		</style>
	</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class=" has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h1 class="title has-text-grey">Login Chess 4.0 Factory</h1>

                    <?php
                    if(isset($_SESSION['not_authenticated'])):
                    ?>
                    <div class="notification is-danger">
                      <p><h2>ERRO: Invalid user!!<h2></p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['not_authenticated']);
                    ?>


			<div class="box">	
                <form action="login.php" method="POST">

                <div class="control-group">
						<label class="control-label"><h2>Username<h2></label>
						<div class="controls">
                        <input name="user" name="text" class="input is-large" placeholder="Username" autofocus="">
						</div>
					</div>		
					<div class="control-group">
                    <label class="control-label"><h2>Password<h2></label>
						<div class="controls">
                        <input name="password" class="input is-large" type="password" placeholder="Password">
						</div>
					</div>			
			</div>	
					<div class="form-group">
        				<div class="col-sm-offset-2 col-sm-10"> 
						<div style=" margin-left: 15px; margin-right: 15px;" class="form-group">
            			<input type="submit" class="btn btn-warning" value="Enter Factory" >
						
                    </div>
				</form>
				
			</div> 
			<div style="margin-bottom: 5vh;" class="form-group"></div>
		</div> <!-- /container -->	
            </div>
        </div>
    </div>
    </section>
</body>
 
</html>