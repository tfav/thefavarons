<?php require_once('header.php') ?>
<?php
$link = mysqli_connect("localhost", "root", "root", "thefavarons");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

 $sql = "SELECT * FROM guests WHERE name = 'Travis F'";

      if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
          echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>name</th>";
                echo "<th>all_access?</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['all_access'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
}

     if($result = mysqli_query($link, $sql)){

       $row = mysqli_fetch_array($result);

       if(mysqli_num_rows($result) > 0 && $row[all_access] == 1 ){
         echo "All Access Bitch!";
       // Close result set
       mysqli_free_result($result);
   } else{
       echo "No access bitch!";
   }
}


// Close connection
mysqli_close($link);


?>


<p>
  Do I render?
</p>
