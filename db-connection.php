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


$link = mysqli_connect("internal-db.s140168.gridserver.com", "db140168_wedding", "f]8+xtT4Rqmr", "thefavarons");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
