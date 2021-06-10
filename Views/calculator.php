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
    <title>Calculator</title> 
  </head>
<body>
    <?php
      require '../Resources/templates/sidebar.php';
    ?>
  <div class="home_content">
    <?php
      require '../Resources/templates/topbar.php';
    ?>
    <div class="title">Grade Calculator</div>

    <div style="width:75%; text-align: center;">

    <form method="GET" id="my_form"></form>

          <table id="requestContents">
              <colgroup>
                  <col style="width: 128px">
                  <col style="width: 136px">
                  <col style="width: 84px">
              </colgroup>
              <tr>
                  <th>Nombre del rubro</th>
                  <th>Porcentaje</th>
                  <th>Calificacion</th>
              </tr>
              <tr>
                <td>
                  <input type="text" name="nombre1" form="my_form" />
                </td>
                <td>
                  <input type="number" name="porcentaje1" form="my_form" />
                </td>
                <td>
                  <input type="number" name="cali1" form="my_form" />
                </td>
              </tr>
              
              <tr>
                <td>
                  <input type="text" name="nombre2" form="my_form" />
                </td>
                <td>
                  <input type="number" name="porcentaje2" form="my_form" />
                </td>
                <td>
                  <input type="number" name="cali2" form="my_form" />
                </td>
              </tr>

              <tr>
                <td>
                  <input type="text" name="nombre3" form="my_form" />
                </td>
                <td>
                  <input type="number" name="porcentaje3" form="my_form" />
                </td>
                <td>
                  <input type="number" name="cali3" form="my_form" />
                </td>
              </tr>

              <tr>
                <td>
                  <input type="text" name="nombre4" form="my_form" />
                </td>
                <td>
                  <input type="number" name="porcentaje4" form="my_form" />
                </td>
                <td>
                  <input type="number" name="cali4" form="my_form" />
                </td>
              </tr>

              <tr>
                <td>
                  <input type="text" name="nombre5" form="my_form" />
                </td>
                <td>
                  <input type="number" name="porcentaje5" form="my_form" />
                </td>
                <td>
                  <input type="number" name="cali5" form="my_form" />
                </td>
              </tr>

          </table>

          <button type="button" form="my_form">Calcular</button>

      </div>

      <div style="width:25%; text-align: center;">

      <table id="requestContents">
              <colgroup>
                  <col style="width: 128px">
              </colgroup>
              <tr>
                  <th>Total</th>
              </tr>
              <tr>
                <td>
                  <p>
                    100
                  </p>
                </td>
                
              </tr>


      </div>

  </div>
    <?php
      require '../Resources/templates/sidebar-scripts.php';
    ?>
</body>
</html>
