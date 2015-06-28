<?php require_once('header.php');
      include_once('db-connection.php')
?>
<?php
$user = $_POST['user'];
$pass = $_POST['pass'];

if($user == "admin" && $pass == "Favaronwedding2015") {
  $sql = "SELECT * FROM rsvps";
  if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border=1>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>RSVP At</th>";
                echo "<th>name</th>";
                echo "<th>Num of Guests</th>";
                echo "<th>Guest Names</th>";
                echo "<th>Kids Attending?</th>";
                echo "<th>Attending Ceremony?</th>";
                echo "<th>Attending Reception?</th>";
                echo "<th>Address Line 1</th>";
                echo "<th>Address Line 2</th>";
                echo "<th>City</th>";
                echo "<th>State</th>";
                echo "<th>Zipcode</th>";
                echo "<th>Comments</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['created_at'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['number_of_guests'] . "</td>";
                echo "<td>" . $row['guest_names'] . "</td>";
                echo "<td>" . $row['kids_attending'] . "</td>";
                echo "<td>" . $row['ceremony'] . "</td>";
                echo "<td>" . $row['reception'] . "</td>";
                echo "<td>" . $row['address_line_1'] . "</td>";
                echo "<td>" . $row['address_line_2'] . "</td>";
                echo "<td>" . $row['city'] . "</td>";
                echo "<td>" . $row['state'] . "</td>";
                echo "<td>" . $row['zipcode'] . "</td>";
                echo "<td>" . $row['comments'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
  }
}
else {
    if(isset($_POST))
    {?>

            <form method="POST" action="rsvp-list.php">
            User <input type="text" name="user"></input><br/>
            Pass <input type="password" name="pass"></input><br/>
            <input type="submit" name="submit" value="Go"></input>
            </form>
    <?}
}
?>
