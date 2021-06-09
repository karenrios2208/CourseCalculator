<?php
// start a session
session_start();
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../Resources/css/navbar.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>template</title> 
  </head>
<body>
    
  <div class="sidebar">
    <div class="logo_content">
      <div class="logo">
        
      </div>
      <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav_list">
      
      <li>
        <a href="#">
          <i class='bx bx-user' ></i>
          <span class="links_name">Account</span>
        </a>
        <span class="tooltip">Account</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-calculator' style='color:#fcfcfc'  ></i>
          <span class="links_name">Grade Simulator</span>
        </a>
        <span class="tooltipBig">Grade Simulator</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-pie-chart-alt-2' ></i>
          <span class="links_name">Academic Plan</span>
        </a>
        <span class="tooltipBig">Academic Plan</span>
      </li>
    </ul>
    <div class="profile_content">
      <div class="profile">
        <a href="logout.php">
            <i class='bx bx-log-out' id="log_out" ></i>
        </a>
      </div>
    </div>
  </div>
  <div class="home_content">
    <div class="topbar" ></div>
    <div class="text">WELCOME <?php echo $_SESSION['name'] ?></div>
  </div>

  <script>
   let btn = document.querySelector("#btn");
   let sidebar = document.querySelector(".sidebar");
   let searchBtn = document.querySelector(".bx-search");

   btn.onclick = function() {
     sidebar.classList.toggle("active");
     if(btn.classList.contains("bx-menu")){
       btn.classList.replace("bx-menu" , "bx-menu-alt-right");
     }else{
       btn.classList.replace("bx-menu-alt-right", "bx-menu");
     }
   }
   searchBtn.onclick = function() {
     sidebar.classList.toggle("active");
   }

  </script>

</body>
</html>
