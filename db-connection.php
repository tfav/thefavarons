<?php

$dbhost = $_ENV['DATABASE_SERVER'];
$dbuser = "root";
$dbpass = "root";
$dbtable = "thefavarons";


$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbtable);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
