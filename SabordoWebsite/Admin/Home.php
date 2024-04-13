<?php
 $currentDateTime = date('Y-m-d');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Mac</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

  <link rel="stylesheet" href="loader2.css">
  
    
  <style>

    #sidebar {
      
      background-color: rgb(35, 45, 63);
      padding: 0;
      height: 100vh; 
      position: fixed; 
      left: 0; 
      top: 0;
      z-index: 1; 
      overflow-y: auto; 
    }
    #sidebar .list-group-item {
      border-color: transparent;
      text-align: center; 
    }
    #sidebar .list-group-item.active {
      background-color: #e9ecef;
    }
    #content {
      margin-left: 250px;
      padding: 20px; 
    }
    .data-table {
      width: 100%;
      border-collapse: collapse;
    }
    .data-table th,
    .data-table td {
      padding: 8px;
      border: 1px solid #ddd;
    }
    .data-table th {
      background-color: #f2f2f2;
    
}

.dashboard-header {
    border-top: 110px solid rgb(35, 45, 63);
    margin-bottom: 5px;
    top:0;
    height: 50px;
    width: 1805px;
}

@media (max-width: 2000px) {
    body {
        overflow-x: hidden;
    }
}
.inputt {
    position: absolute;
    top: 8%;
    right: 9%;
    background-color:  transparent;
    color:#fff;
    width: 100%;
    max-width: 250px;
    height: 20px;
    padding: 12px;
    border-radius: 6px;
    border: 1.5px solid #fff;
    outline: none;
    transition: all 0.3s cubic-bezier(0.19, 1, 0.22, 1);
    box-shadow: 0px 0px 20px -18px;
  }
  
  .inputt:hover {
    border: 1px solid rgb(250, 247, 247);
    box-shadow: 0px 0px 20px -17px;
  }
  
  .inputt:focus {
    border: 2px solid grey;
  }



  </style>
</head>
<body>
<style>
body {
    background-color: #9DBBBB;
}
</style>

  <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" id="sidebar">
    <img style=" width: 150px;
    height: auto; 
    display: block;
    margin: 0 auto;
    border-radius: 1%;
    filter: drop-shadow(10px 10px 10px #000000)" src="logo.png" alt="">
    <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <span class="fs-4">Admin Mac-Creates</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
         <li class="nav-item">
        <a href="Home.php" class="nav-link active" aria-current="page" data-target="dashboard">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"/></svg>
          Admin Dashboard
        </a>
      </li>
      <li class="nav-item">
      <a href="../index.php" class="nav-link" data-target="portfolio">
      <svg class="bi me-2" width="16" height="16"><use xlink:href="#briefcase"/></svg>
      Visit Portfolio
    </a>
</li>
      
      <li class="nav-item">
      <a href="add_portfolio.php" class="nav-link" data-target="portfolio">
      <svg class="bi me-2" width="16" height="16"><use xlink:href="#briefcase"/></svg>
      Add Item to Portfolio
    </a>
</li>

      <li class="nav-item">
        <a href="add_service.php" class="nav-link" data-target="services">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#gear"/></svg>
          Add Services
        </a>
      </li>
      <li class="nav-item">
        <a href="log.php" class="nav-link" data-target="contact">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#envelope"/></svg>
          Admin Log
        </a>
      </li>
    </ul>
    <hr>
    <a href="logout.php" class="nav-link">
    <img style=" width: 40px;
    height: auto; 
    display: block;
    margin: 0 auto;
    border-radius: 1%;" src="turn-off.png" alt="">
    </a>
  </div>
  </div>
 
  <div  class="dashboard-header"> </div> 
  <img style=" width: 40px;
    height: auto; 
    display: block;
    margin: 0 auto;
    position:absolute;left:17%; top:7%;" src="dashboard.png" alt="">
    <h4 style="position:absolute;left:17%;">Date: <?php echo $currentDateTime; ?></h4>
   
  <h1 style="position:absolute;left:21%; top:6%; color:azure;">Admin Dashboard</h1>

  

  <img style=" width: 35px;
    height: auto; 
    display: block;
    margin: 0 auto;
    position:absolute; right:5%;cursor:pointer; top:58px;" src="notification.png" alt="">

  <img style=" width: 25px;
    height: auto; 
    display: block;
    margin: 0 auto;
    position:absolute; right:1%;cursor:pointer; top:8%;" src="menu.png" alt="">

  <div id="content" class="container mt-5">
    <div id="dashboard" class="section">
   
      
    </div>
    <div id="portfolio" class="section hidden">
    <input placeholder="Search.." type="text" name="text" class="inputt">
      <h2>Portfolio</h2>
  
      <table class="data-table">
        <thead>
          <tr>
            <th>Name</th>
            <th>Description and Links</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php include('get_portfolio.php'); ?>
        </tbody>
      </table>
    </div>
    <div id="services" class="section hidden">
      <h2>Services</h2>
  
      <table class="data-table">
        <thead>
          <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php include('get_services.php'); ?>
        </tbody>
      </table>
    </div>
    <div id="contact" class="section hidden">
      <h2>Contact Messages</h2>
      <table class="data-table">
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Comment</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php include("../conn.php"); 

         

            $sql = "SELECT * FROM tbl_contact";
            $result = mysqli_query($connection, $sql);
            if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row["Name"] . "</td>";
                echo "<td>" . $row["Email"] . "</td>";
                echo "<td>" . $row["Comment"] . "</td>";
                echo "<td><a class='btn btn-danger' href='delete_contact.php?user_name=" . $row["Name"] . "'style='background-color:rgb(209, 30, 36);'>Delete</a></td>"; 
                echo "</tr>";
              }
            } else {
              echo "<tr><td colspan='4'>No contact messages found</td></tr>";
            }
            mysqli_close($connection); 
          ?>
        </tbody>
      </table>
    </div>
  </div>
  <div  class="dashboard-headerr"> </div> 

  <script>

document.onreadystatechange = function () {
            if (document.readyState === "complete") {
                setTimeout(function () {
                    document.getElementById("preloader").style.display = "none";
                    document.getElementById("content").style.visibility = "visible";
                }, 1655);
            }
        };

  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVFQWjxhNqHJ8VZN9lmOUWC0yF0zAGyNkZGpNW3TNNRLsXNjO0Cu" crossorigin="anonymous"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const sidebarLinks = document.querySelectorAll('#sidebar .nav-link');
      const sections = document.querySelectorAll('.section');

      sidebarLinks.forEach(link => {
        link.addEventListener('click', function(event) {
          const target = this.getAttribute('data-target');
          sections.forEach(section => {
            section.classList.add('hidden');
          });
          document.getElementById(target).classList.remove('hidden');
        });
      });
    });

</script>
<?php

?>

</body>
</html>
