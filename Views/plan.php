<?php
// start a session
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../Resources/css/navbar.css">
    <link rel="stylesheet" href="../Resources/css/carousel.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academic Plan</title> 
  </head>
<body>
    <?php
      require '../Resources/templates/sidebar.php';
    ?>
  <div class="home_content">
    <?php
      require '../Resources/templates/topbar.php';
    ?>
    <div class="title"> Academic plan history </div>
    <div class="wrapper">
      <div class="item">
        <div class="course">
          <p class="courseName">1</p>
        </div>
        <div class="course">2</div>
        <div class="course">3</div>
        <div class="course">4</div>
        <div class="course">5</div>
        <div class="course">6</div>
        <div class="course">7</div>
      </div>
      <div class="item">box-2</div>
      <div class="item">box-3</div>
      <div class="item">box-4</div>
      <div class="item">box-5</div>
      <div class="item">box-6</div>
    </div>
  </div>

    <?php
      require '../Resources/templates/sidebar-scripts.php';
    ?>

</body>
</html>
