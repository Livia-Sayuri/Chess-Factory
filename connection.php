<?php
define('HOST', 'localhost');
define('USER', 'chessPlayer');
define('PASSWORD', 'Chess_Game@');
define('DB', 'chess_40');

$connection = mysqli_connect(HOST, USER, PASSWORD, DB) or die ('Connection was not possible :c');
