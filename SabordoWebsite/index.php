<?php


$email = $pass = "";

$emailErr = $passErr = $loginErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["Email"])) {
        $emailErr = "Email is required!";
    } else {
        $email = $_POST["Email"];
    }

    if (empty($_POST["Password"])) {
        $passErr = "Password is required!";
    } else {
        $pass = $_POST["Password"];
    }

    if ($email && $pass) {
        include("conn.php");

        $check_email = mysqli_query($connection, "SELECT * FROM tbl_adminuser WHERE Email='$email'");
        $check_email_row = mysqli_num_rows($check_email);

        if ($check_email_row > 0) {

            while ($row = mysqli_fetch_assoc($check_email)) {

                $user_id = $row["ID"];

                $db_pass = $row["Password"];
                $db_accnt = $row["Account_Type"];

                if ($pass == $db_pass) {

                    session_start();

                    $_SESSION ["ID"] = $user_id;

                    if ($db_accnt == "1") {

                        echo "<script>window.location.href='Admin/Home.php';</script>";

                    }
            
        } else {
            $loginErr = "Wrong password!...";
            $email = "";
            $pass = "";
        }
    }


}else{

    $loginErr = "Wrong email!...";
    $email = "";
    $pass = "";
}

    }

}


?>


<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="css/loginborder.css">
    <link rel="stylesheet" href="css/loader.css"> 
    
    
        

    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

     <title>Mac-Creates | Home</title>
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
                    <li><a href="#">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="portfolio.php">Portfolio</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
                
            </div>

            <div class="darkLight-searchBox">
                <div class="dark-light">
                    <i class='bx bx-moon moon'></i>
                    <i class='bx bx-sun sun'></i>
                </div>

                <div class="searchBox">
                   <div class="searchToggle">
                    <i class='bx bx-x cancel'></i>
                    <i class='bx bx-search search'></i>
                   </div>

                    <div class="search-field">
                        <input type="text" placeholder="Search...">
                        <i class='bx bx-search'></i>
                    </div>
                </div>
            </div>
        </div>

    </nav>



    <section id="home">
     <h1 style="font-size: 200%; position: absolute; top: -23%;" class="crds" href="index.html">Home</h1>
        <p>Mac has mastered the art of creating <br>
            streamlined solutions for his everyday challenges.<br>
            Whether it's organizing study materials or <br>
            optimizing his schedule, Mac's ingenuity shines <br>
            through.</p>
      <button  id="connect">Connect with me..</button>
     </section>
     <form class="form">
        <span class="title">Subscribe to my newsletter.</span>
       
        <div>
          <input placeholder="Enter your email" type="email" name="email" id="email-address">
          <button type="submit">Subscribe</button>
        </div>
      </form>

      <style>


    .error {
        color: red;
    }
</style>

      <form id="LoginForm" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="login">
            <div class="h1">Login Mac-Creates<br>and Manage your Website</div>
        
            <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
                <?php if (!empty($loginErr)): ?>
                    <div style="font-size: 65%;" class="error"><?php echo $loginErr; ?></div>
                <?php endif; ?>
                <input style="background-color: transparent;" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" placeholder="Email" id="email" name="Email" type="text" value="<?php echo $email; ?>">
                <?php if (!empty($emailErr)): ?>
                    <div style="font-size: 65%; position: absolute;" class="error"><?php echo $emailErr; ?></div>
                <?php endif; ?>
                <input placeholder="Password" id="password" name="Password" type="password" value="<?php echo $pass; ?>">
                <?php if (!empty($passErr)): ?>
                    <div style="font-size: 65%; position: absolute;" class="error"><?php echo $passErr; ?></div>
                <?php endif; ?>
            <?php else: ?>
                <input style="background-color: transparent;" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" placeholder="Email" id="email" name="Email" type="text" value="">
                <input placeholder="Password" id="password" name="Password" type="password" value="">
            <?php endif; ?>
            <div class="forgot">
                <a rel="noopener noreferrer" href="#">Forgot password?</a>
            </div>
            <button style="color: rgb(255, 255, 255);" class="animated-button" type="submit">
                <span>Login</span>
                <span></span>
            </button>
        </div>
    </form>
    

<footer class="footer">
   
    <ul class="social-icon">
      <li class="social-icon__item"><a class="social-icon__link" href="https://www.facebook.com/jhonella.saborvador?mibextid=ZbWKwL">
          <ion-icon name="logo-facebook"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="https://twitter.com/ChiefAkira">
          <ion-icon name="logo-twitter"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="https://www.linkedin.com/in/jhon-macber-sabordo-844b39277/">
          <ion-icon name="logo-linkedin"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="https://www.instagram.com/johnmacber/">
          <ion-icon name="logo-instagram"></ion-icon>
        </a></li>
        </ul>

    <p>&copy;2024 Mac-Creates | All Rights Reserved</p>
  </footer>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="javascript/nav.js"></script>
  <script src="javascript/script.js"></script>

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