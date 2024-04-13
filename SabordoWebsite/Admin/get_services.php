<?php
  include('../conn.php');

  $sql = "SELECT * FROM tbl_services";
  $result = mysqli_query($connection, $sql);

  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
        
        echo "<td>" . $row["Title"] . "</td>";
    
        echo "<td>" . substr($row["Description"], 0, 50) . "...</td>";
        echo "<td><a class='btn btn-primary' href='edit_services.php?id=" . $row["ID"] . "'>Edit</a> | <a class='btn btn-danger' href='deleteserv.php?user_id=" . $row["ID"] . "'onclick='return confirm(\"Are you sure?\")'>Delete</a></td>"; 
      echo "</tr>";
    }
  } else {
    echo "<tr><td colspan='4'>No Services found</td></tr>";
  }

  mysqli_close($connection); 
?>
