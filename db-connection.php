<?php

$dbhost = $_ENV['DATABASE_SERVER'];

//Local
// $dbuser = "root";
// $dbpass = "root";
// $dbtable = "thefavarons";

// Production
$dbuser = "db140168_wedding";
$dbpass = "f]8+xtT4Rqmr";
$dbtable = "thefavarons";


$link = new mysqli("internal-db.s140168.gridserver.com", "db140168_wedding", "Favaronwedding2015!", "thefavarons");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
