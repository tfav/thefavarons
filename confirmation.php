<?php require_once('header.php') ?>
<?php include_once('db-connection.php') ?>
<h1>Thank You</h1>

  <?php
  // Attempt select query execution
$sql = "SELECT * FROM rsvps";
if($result = mysqli_query($link, $sql)){
  if(mysqli_num_rows($result) > 0){
      echo "<table>";
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
} ?>
</body>
</html>
