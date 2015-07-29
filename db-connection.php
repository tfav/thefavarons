<?php

$dbhost = $_ENV['DATABASE_SERVER'];

//Local
$dbuser = "root";
$dbpass = "root";
$dbtable = "thefavarons";

// Production
// $dbuser = "db140168_wedding";
// $dbpass = "f]8+xtT4Rqmr";
// $dbtable = "thefavarons";


$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbtable);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
