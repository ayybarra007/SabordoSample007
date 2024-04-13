<?php

include("../conn.php");


$user_id = $_GET["user_id"];



mysqli_query($connection, "DELETE FROM tbl_services WHERE ID='$user_id'");

echo "<script language='javascript'>alert('Services has been Deleted!')</script>";
echo "<script>window.location.href='Home.php';</script>";



?>