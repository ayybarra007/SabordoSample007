<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="css/loader.css"> 
    <link rel="stylesheet" href="css/contact.css">
        

    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

     <title>Mac-Creates | Contact</title>
</head>
<body>

    <div id="preloader"> </div>

    <div id="content">
  
     
    <nav>
        <div class="nav-bar">
            <i class='bx bx-menu sidebarOpen' ></i>
            <div class="loader">
                <svg viewBox="0 0 80 80">
                    <circle id="test" cx="40" cy="40" r="32"></circle>
                </svg>
            </div>
            
            <div class="loader triangle">
                <svg viewBox="0 0 86 80">
                    <polygon points="43 8 79 72 7 72"></polygon>
                </svg>
            </div>
            
            <div class="loader">
                <svg viewBox="0 0 80 80">
                    <rect x="8" y="8" width="64" height="64"></rect>
                </svg>
            </div>
            <span class="logo navLogo"><a href="#">Mac-Creates</a></span>

            <div class="menu">
                <div class="logo-toggle">
                    <span class="logo"><a href="#">Mac-Creates</a></span>
                    <i class='bx bx-x siderbarClose'></i>
                </div>

                <ul class="nav-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="portfolio.php">Portfolio</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="#">Contact</a></li>
                </ul> 
        
    </nav>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["Name"];
  $email = $_POST["Email"];
  $message = $_POST["Comment"];

  include("conn.php"); 

  $sql = "INSERT INTO tbl_contact (Name, Email, Comment) VALUES ('$name', '$email', '$message')";

  if (mysqli_query($connection, $sql)) {
    echo "<script>alert('Your message has been sent successfully!');</script>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
  }

  mysqli_close($connection); 
} 
?>
    <div class="custom-card">
        <span class="custom-title">Contact Mac-Creates</span>
        <form class="custom-form" method="POST" action="<?php htmlspecialchars("PHP_SELF"); ?>">
            <div class="custom-group">
                <input placeholder="‎" type="text"  name="Name" >
                <label for="name">Name</label>
            </div>
            <div class="custom-group">
                <input placeholder="‎" type="email" id="email" name="Email" >
                <label for="email">Email</label>
            </div>
            <div class="custom-group">
                <textarea placeholder="‎" id="comment" name="Comment" rows="5" ></textarea>
                <label for="comment">Message</label>
            </div>
            <button style="align-self: center;" type="submits">Submit</button>
        </form>
    </div>
    
    <div class="logo-img">
        <img style="position: absolute; width: 600px; left: 60%; top: 24%; animation: bounce 3.3s, floatImage 1s ease-in-out infinite;" src="css/contact.svg" alt="">
    </div>
        




    <footer class="footer">
   
        <ul class="social-icon">
          <li class="social-icon__item"><a class="social-icon__link" href="#">
              <ion-icon name="logo-facebook"></ion-icon>
            </a></li>
          <li class="social-icon__item"><a class="social-icon__link" href="#">
              <ion-icon name="logo-twitter"></ion-icon>
            </a></li>
          <li class="social-icon__item"><a class="social-icon__link" href="#">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a></li>
          <li class="social-icon__item"><a class="social-icon__link" href="#">
              <ion-icon name="logo-instagram"></ion-icon>
            </a></li>
            </ul>
    
        <p>&copy;2024 Mac-Creates | All Rights Reserved</p>
      </footer>
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

      
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
    </div>
    
</body>
</html>