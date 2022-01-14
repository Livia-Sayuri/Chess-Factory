<?php
    require 'database.php';
 
    $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    if ( !empty($_POST)) {
        // keep track post values
        $name = $_POST['name'];
		$id = $_POST['id'];
         
        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "UPDATE table_chess_40  set name = ? WHERE id = ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($name,$id));
		Database::disconnect();
		header("Location: user data.php");
    }
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
		}
		body{
			 background-color:black;
		}
		textarea {
			resize: none;
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

		ul.topnav li a:hover:not(.active) {background-color: #3e8e41;}

		ul.topnav li a.active {background-color: #333;}

		ul.topnav li.right {float: right;}

		@media screen and (max-width: 6000px) {
			ul.topnav li.right, 
			ul.topnav li {float: none;}
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
		}
		.container {
		margin-top: 5vh;
		margin-bottom: 5vh;
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
		<title>Edit : Chess 4.0 with MYSQL Database</title>	
	</head>	
	
	<body>
	<div class="container">
	 <div class="center" style="margin: 0 auto; width:495px; border-style: solid; border-color: #dae150;">
		 <div class="row"
			 
			 class="container">
				<h2 class="neonText"
				 align="center" >Edit User Data</h2>
			 </div>
		 
				<form class="form-horizontal" action="user data edit tb.php?id=<?php echo $id?>" method="post">
					<div class="control-group">
						<label class="control-label">ID</label>
						<div class="controls">
							<input name="id" type="text"  placeholder="" value="<?php echo $data['id'];?>" readonly>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Name</label>
						<div class="controls">
							<input name="name" type="text"  placeholder="" value="<?php echo $data['name'];?>" required>
						</div>
					</div>
										
					<div class="form-action">
						<div style="background-color: black; margin-left: 250px; margin-right: 0px;" class="form-action">
						<button type="submit" class="btn btn-success">Update</button>
						<a class="btn" href="user data.php">Back</a>
					</div>
				</form>
			</div>               
		</div> <!-- /container -->	
	</body>
</html>

<h2><a href="logout.php">Leave Factory</a></h2>