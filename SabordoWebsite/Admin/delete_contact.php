<?php

include("../conn.php");


$user_name = $_GET["user_name"];



mysqli_query($connection, "DELETE FROM tbl_contact WHERE Name='$user_name'");

echo "<script language='javascript'>alert('Message has been Deleted!')</script>";
echo "<script>window.location.href='Home.php';</script>";



?>