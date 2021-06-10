<?php
// start a session
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../Resources/css/navbar.css">
    <link rel="stylesheet" href="../Resources/css/card.css">
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
    <div class="title">User configuration</div>
    <div class="creditCardForm">
      <div class="text">Change name</div>
      <form id="changeName" action="settings.php"></form>
      <div class="text">Change photo</div>
      <div class="text">Change password</div>
      <div class="text">Change studyplan</div>
    </div>
  </div>
    <?php
      require '../Resources/templates/sidebar-scripts.php';
    ?>
</body>
</html>
