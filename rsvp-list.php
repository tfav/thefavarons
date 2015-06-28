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
                echo "<th>created_at</th>";
                echo "<th>name</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['created_at'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
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
