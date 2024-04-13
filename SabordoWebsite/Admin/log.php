
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Mac</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="log.css">
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
      height: 50px;
      width: 1605px;
      
    }


  </style>
</head>
<body>

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
        <a href="Home.php" class="nav-link" aria-current="page" data-target="dashboard">
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
        <a href="#" class="nav-link active" data-target="contact">
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
 
  <div  class="dashboard-header"> </div> 
  <img style=" width: 40px;
    height: auto; 
    display: block;
    margin: 0 auto;
    position:absolute;left:17%; top:7%;" src="dashboard.png" alt="">
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

    <h1>Admin Log</h1>

   
  <img style=" width: 300px;
    height: auto; 
    display: block;
    margin: 0 auto;
    position:absolute; right:60%;cursor:pointer; top:45%;" src="car.gif" alt="">

<img style=" width: 300px;
    height: auto; 
    display: block;
    margin: 0 auto;
    position:absolute; right:36%;cursor:pointer; top:45%;" src="bus.gif" alt="">

<img style=" width: 300px;
    height: auto; 
    display: block;
    margin: 0 auto;
    position:absolute; right:13%;cursor:pointer; top:45%;" src="carr.gif" alt="">

</body>
</html>


