<?php include_once('db-connection.php') ?>
<?php

//sanitize
$name = mysqli_real_escape_string($link, $_POST['name']);
$number_of_adults_ceremony = mysqli_real_escape_string($link, $_POST['number_of_adults_ceremony']);
$guest_names = mysqli_real_escape_string($link, $_POST['guest_names']);
$number_of_kids_ceremony = mysqli_real_escape_string($link, $_POST['number_of_kids_ceremony']);
$ceremony = mysqli_real_escape_string($link, $_POST['ceremony']);
$reception = mysqli_real_escape_string($link, $_POST['reception']);
$number_of_kids_reception = mysqli_real_escape_string($link, $_POST['number_of_kids_reception']);
$number_of_adults_reception = mysqli_real_escape_string($link, $_POST['number_of_adults_reception']);
$address_line_1 = mysqli_real_escape_string($link, $_POST['address_line_1']);
$address_line_2 = mysqli_real_escape_string($link, $_POST['address_line_2']);
$city = mysqli_real_escape_string($link, $_POST['city']);
$state = mysqli_real_escape_string($link, $_POST['state']);
$zipcode = mysqli_real_escape_string($link, $_POST['zipcode']);
$song_request = mysqli_real_escape_string($link, $_POST['song_request']);
$comments = mysqli_real_escape_string($link, $_POST['comments']);

//insert
$sql = "INSERT INTO rsvps (name, number_of_adults_ceremony, guest_names,
                          number_of_kids_ceremony, ceremony, reception,
                          number_of_adults_reception, number_of_kids_reception,
                          address_line_1, address_line_2, city,
                          state, zipcode, song_request, comments)

        VALUES            ('$name', '$number_of_adults_ceremony', '$guest_names',
                          '$number_of_kids_ceremony', '$ceremony', '$reception',
                          '$number_of_adults_reception', '$number_of_kids_reception',
                          '$address_line_1', '$address_line_2', '$city', '$state',
                          '$zipcode', '$song_request', '$comments' )";

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
