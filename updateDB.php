<?php
     
    require 'database.php';
 
    if ( !empty($_REQUEST)) {
        // keep track post values
        $name = $_REQUEST['name'];
		$id = $_REQUEST['id'];
		
        
		// insert data
        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO chess_40 (name,id) values(?, ?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($name,$id));
		Database::disconnect();
		header("Location: user data edit tb.php");
    }
?>