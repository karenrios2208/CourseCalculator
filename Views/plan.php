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
    <div class="subtitle">Study plan: <?php echo $_SESSION['plan']?></div>
    <div class="wrapper">
      <?php 
        $plan = $_SESSION['plan'];
        $file = file_get_contents("../Resources/json/".$plan.".json");
        $json_a = json_decode($file, true);
        
        foreach($json_a as $item){
          $semester = $item['semester'];
          $subjects = $item['subjects'];
          echo "<div class='semester'> ";
          echo "<div class='semester_header'> ";
          echo "Semester ".$semester;
          echo "</div>";
          
          foreach($subjects as $mat)
          {
            $name = $mat['nombre'];
            echo "<div class='course'> ";
            echo "<p class='courseName'> ";
            echo $mat['clave'];
            echo "<p class='courseName'> ";
            echo $name;
            echo "</p> </div>";
          }

          echo "</div>";
        }
        
      ?>
      
  </div>

    <?php
      require '../Resources/templates/sidebar-scripts.php';
    ?>

</body>
</html>
