<?php
  include('../conn.php');

  $sql = "SELECT * FROM tbl_portfolio";
  $result = mysqli_query($connection, $sql);

  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
        
        echo "<td>" . $row["Name"] . "</td>";
        echo "<td>" . substr($row["Description"], 0, 50) . "...</td>";
        echo "<td><a class='btn btn-primary' href='edit_portfolio.php?id=" . $row["ID"] . "'>Edit</a> | <a class='btn btn-danger' href='deleteportnow.php?user_id=" . $row["ID"] . "'onclick='return confirm(\"Are you sure?\")'>Delete</a></td>";

      echo "</tr>";
    }
  } else {
    echo "<tr><td colspan='4'>No portfolio items found</td></tr>";
  }

  mysqli_close($connection); 
?>
