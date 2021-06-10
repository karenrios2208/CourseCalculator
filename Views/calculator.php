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
                  <th>Porcentaje (0 - 100%)</th>
                  <th>Calificacion (0 - 100)</th>
              </tr>
              <tr>
                <td>
                  <input type="text" name="nombre1" form="my_form" placeholder="Matematicas"/>
                </td>
                <td>
                  <input type="number" name="porcentaje1" form="my_form" placeholder="25" value="25"/>
                </td>
                <td>
                  <input type="number" name="cali1" form="my_form" placeholder="100" value="100"/>
                </td>
              </tr>
              
              <tr>
                <td>
                  <input type="text" name="nombre2" form="my_form" placeholder="Física"/>
                </td>
                <td>
                  <input type="number" name="porcentaje2" form="my_form" placeholder="25" value="25"/>
                </td>
                <td>
                  <input type="number" name="cali2" form="my_form" placeholder="100" value="100"/>
                </td>
              </tr>

              <tr>
                <td>
                  <input type="text" name="nombre3" form="my_form" placeholder="Computación"/>
                </td>
                <td>
                  <input type="number" name="porcentaje3" form="my_form" placeholder="20" value="20"/>
                </td>
                <td>
                  <input type="number" name="cali3" form="my_form" placeholder="100" value="100"/>
                </td>
              </tr>

              <tr>
                <td>
                  <input type="text" name="nombre4" form="my_form" placeholder="Artes"/>
                </td>
                <td>
                  <input type="number" name="porcentaje4" form="my_form" placeholder="20" value="20"/>
                </td>
                <td>
                  <input type="number" name="cali4" form="my_form" placeholder="100" value="100"/>
                </td>
              </tr>

              <tr>
                <td>
                  <input type="text" name="nombre5" form="my_form" placeholder="Historia"/>
                </td>
                <td>
                  <input type="number" name="porcentaje5" form="my_form" placeholder="10" value="10"/>
                </td>
                <td>
                  <input type="number" name="cali5" form="my_form" placeholder="100" value="100"/>
                </td>
              </tr>

          </table>

          <!-- <button type="button" form="my_form">Calcular</button> -->

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
                <input type="text" name="sum"><br>
                </td>
                
              </tr>

              <tr>
                <td>
                  <input type="button" value="Sum" onclick="calcSum()">
                </td>
              </tr>


      </div>

  </div>
    <?php
      require '../Resources/templates/sidebar-scripts.php';
    ?>

<script>
    function calcSum() {
        let porcentaje1 = document.getElementsByName("porcentaje1")[0].value;
        let porcentaje2 = document.getElementsByName("porcentaje2")[0].value;
        let porcentaje3 = document.getElementsByName("porcentaje3")[0].value;
        let porcentaje4 = document.getElementsByName("porcentaje4")[0].value;
        let porcentaje5 = document.getElementsByName("porcentaje5")[0].value;

        let cali1 = document.getElementsByName("cali1")[0].value;
        let cali2 = document.getElementsByName("cali2")[0].value;
        let cali3 = document.getElementsByName("cali3")[0].value;
        let cali4 = document.getElementsByName("cali4")[0].value;
        let cali5 = document.getElementsByName("cali5")[0].value;

        let sum = (Number(porcentaje1) * .01 * Number(cali1)) + (Number(porcentaje2) * .01 * Number(cali2)) + (Number(porcentaje3) * .01 * Number(cali3)) + (Number(porcentaje4) * .01 * Number(cali4)) + (Number(porcentaje5) * .01 * Number(cali5));
        document.getElementsByName("sum")[0].value = sum;
    }
</script>

</body>
</html>
