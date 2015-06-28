<?php include_once('db-connection.php') ?>
<?php

//sanitize
$name = mysqli_real_escape_string($link, $_POST['name']);

//insert
$sql = "INSERT INTO rsvps (name) VALUES ('$name')";


//declare in the rsvp variable
if(mysqli_query($link, $sql)){
    $host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = 'confirmation.php';
    header("Location: http://$host$uri/$extra");
  exit;
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// close connection
mysqli_close($link);
?>
