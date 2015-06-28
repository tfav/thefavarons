<?php require_once('header.php') ?>
<?php
$link = mysqli_connect("localhost", "root", "root", "thefavarons");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 $name = htmlspecialchars($_POST['name']);
 $sql = "SELECT * FROM guests WHERE name = '$name'";

     if($result = mysqli_query($link, $sql)){

       $row = mysqli_fetch_array($result);

       if(mysqli_num_rows($result) > 0 && $row[all_access] == 1 ){
         echo "All Access Bitch!";

   } elseif(mysqli_num_rows($result) > 0 && $row[all_access] == 0 ) {
       echo "partial access bitch!";
   } else {
     echo "stop trying to crash the party";

     // Close result set
     mysqli_free_result($result);
   }

}


// Close connection
mysqli_close($link);


?>


<p>
  Do I render?
</p>
