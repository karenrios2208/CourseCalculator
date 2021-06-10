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
    <?php
      require '../Resources/templates/sidebar.php';
    ?>
  <div class="home_content">
    <?php
      require '../Resources/templates/topbar.php';
    ?>
    <div class="text">Title</div>
  </div>
    <?php
      require '../Resources/templates/sidebar-scripts.php';
    ?>
</body>
</html>
