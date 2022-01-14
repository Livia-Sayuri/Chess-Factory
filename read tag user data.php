<?php
    require 'database.php';
    $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    $pdo = Database::connect();
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "SELECT * FROM table_chess_40 where id = ?";
	$q = $pdo->prepare($sql);
	$q->execute(array($id));
	$data = $q->fetch(PDO::FETCH_ASSOC);
	Database::disconnect();
	
	$msg = null;
	if (null==$data['name']) {
		$msg = "The ID of your Card / KeyChain is not registered !!!";
		$data['id']=$id;
		$data['name']="--------";
	} else {
		$msg = null;
	}
?>
 <?php
include('verify.php');
    $Write="<?php $" . "UIDresult=''; " . "echo $" . "UIDresult;" . " ?>";
	file_put_contents('UIDContainer.php',$Write);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
	<meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
	<style>
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
		<div>
			<form>
			<div class="col-sm-3 col-sm-9">
				<table  width="452" border="1" bordercolor="#7c7241" align="center"  cellpadding="0" cellspacing="1"  bgcolor="#000" style="padding: 2px">
					<tr>
						<td  height="40" align="center"  bgcolor="#10a0c5"><font  color="#FFFFAF">
						
						<b>User Data</b></font></td>
					</tr>
					<tr>
						<td bgcolor="#f9f9f9">
							<table width="452"  border="0" align="center" cellpadding="5"  cellspacing="0">
								<tr>
									<td width="113" align="left" class="lf">ID</td>
									<td style="font-weight:bold">:</td>
									<td align="left"><?php echo $data['id'];?></td>
								</tr>
								<tr bgcolor="#f2f2f2">
									<td align="left" class="lf">Name</td>
									<td style="font-weight:bold">:</td>
									<td align="left"><?php echo $data['name'];?></td>
								</tr>
								
								
							</table>
						</td>
					</tr>
				</table>
			</form>
		</div>
		<p style="color:red;"><?php echo $msg;?></p>
	</body>
</html>

<h2><a href="logout.php">Leave Factory</a></h2>