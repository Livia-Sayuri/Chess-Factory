<?php
     
    require 'database.php';
 
    if ( !empty($_POST)) {
        // keep track post values
        $name = $_POST['name'];
		$id = $_POST['id'];
        
		// insert data
        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO table_chess_40 (name,id) values(?, ?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($name,$id));
		Database::disconnect();
		header("Location: user data.php");
    }
?>