<?php

session_start();

unset($_SESSION['ID']);
session_unset();
session_destroy();
header('Refresh: 0;url=../index.php');
exit();


?>