<?php
include("../conn.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $title = $_POST["Name"];
    $desc = $_POST["Description"];


    $sql = "UPDATE tbl_services SET Title='$title', Description='$desc' WHERE ID='$id'";
    if (mysqli_query($connection, $sql)) {
        echo "<script>alert('Services updated successfully!')</script>";
        echo "<script>window.location.href='Home.php';</script>";
    } else {
        echo "Error updating record: " . mysqli_error($connection);
    }
}

$id = $_GET["id"];
$sql = "SELECT * FROM tbl_services WHERE ID='$id'";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);
$title = $row["Title"];
$desc = $row["Description"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Services</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <style>
        body {
    background-color: #9DBBBB;
}
</style>
<h1>Edit Services Form</h1>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3"> 
            <div class="form-box">
                
                <form style="text-align: center; padding: 15px 20px; font-family: sans-serif;" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    Title<br><input style="margin: 20px; border-radius: 5px; border: solid 1px; width:50%; height:30px;" type="text" name="Name" value="<?php echo $title; ?>"> <br>
                    Description<br> <input style="margin: 20px; border-radius: 5px; border: solid 1px; width:90%; height:40px;" type="message" name="Description" value="<?php echo $desc; ?>"> <br>
                    <input style="text-decoration: none; background-color: rgb(30, 209, 78); color: #ffffff; padding: 5px 10px; border: 1px solid #ddd; border-radius: 3px; margin-bottom: 10px ; width:40%; height:40px; cursor:pointer;" type="submit" name="submit" value="Update">
                </form>
            </div>
        </div>
    </div>
</div>

    

</body>
</html>
