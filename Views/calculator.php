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
  <style>
      .styl {
          width : 75%;
          text-align: center;
      }
    </style>
<body>
    <?php
      require '../Resources/templates/sidebar.php';
    ?>
  <div class="home_content">
    <?php
      require '../Resources/templates/topbar.php';
    ?>
    <div class="title">Grade Calculator</div>
    
    <span id="Warn" style = "color : red; text-align: center;"></span>

    <div class="styl">

    <form method="GET" id="my_form"></form>

          <table id="requestContents" class = "styl">
              <colgroup>
                  <col style="width: 128px">
                  <col style="width: 136px">
                  <col style="width: 84px">
              </colgroup>
              <tr>
                  <th>Nombre del rubro</th>
                  <th>Porcentaje <br> (0 - 100%)</th>
                  <th>Calificacion <br> (0 - 100)</th>
              </tr>
              <tr>
                <td><input type="text" name="nombre1" form="my_form" placeholder="Tareas" style="width: 136px"></td>
                <td><input type="number" name="porcentaje1" form="my_form" placeholder="25" value="25" style="width: 84px"></td>
                <td><input type="number" name="cali1" form="my_form" placeholder="100" value="100" style="width: 84px"></td>
              </tr>
              
              <tr>
                <td><input type="text" name="nombre2" form="my_form" placeholder="Proyecto Parcial" style="width: 136px"></td>
                <td><input type="number" name="porcentaje2" form="my_form" placeholder="25" value="25" style="width: 84px"></td>
                <td><input type="number" name="cali2" form="my_form" placeholder="100" value="100" style="width: 84px"></td>
              </tr>

              <tr>
                <td><input type="text" name="nombre3" form="my_form" placeholder="Examenes" style="width: 136px"></td>
                <td><input type="number" name="porcentaje3" form="my_form" placeholder="20" value="20" style="width: 84px"></td>
                <td><input type="number" name="cali3" form="my_form" placeholder="100" value="100" style="width: 84px"></td>
              </tr>

              <tr>
                <td><input type="text" name="nombre4" form="my_form" placeholder="Examen Final" style="width: 136px"></td>
                <td><input type="number" name="porcentaje4" form="my_form" placeholder="20" value="20" style="width: 84px"></td>
                <td><input type="number" name="cali4" form="my_form" placeholder="100" value="100" style="width: 84px"></td>
              </tr>

              <tr>
                <td><input type="text" name="nombre5" form="my_form" placeholder="Actividades" style="width: 136px"></td>
                <td><input type="number" name="porcentaje5" form="my_form" placeholder="10" value="10" style="width: 84px"></td>
                <td><input type="number" name="cali5" form="my_form" placeholder="100" value="100" style="width: 84px"></td>
              </tr>
              <tr>
                <td><input type="text" name="nombre6" form="my_form" placeholder="Ver Loki" style="width: 136px"></td>
                <td><input type="number" name="porcentaje6" form="my_form" placeholder="0" style="width: 84px"></td>
                <td><input type="number" name="cali5" form="my_form" placeholder="0" style="width: 84px"></td>
              </tr>
              <tr>
                <td><input type="text" name="nombre7" form="my_form" placeholder="Procrastinar" style="width: 136px"></td>
                <td><input type="number" name="porcentaje7" form="my_form" placeholder="0" style="width: 84px"></td>
                <td><input type="number" name="cali5" form="my_form" placeholder="0" style="width: 84px"></td>
              </tr>
              <tr>
                <td><input type="text" name="nombre8" form="my_form" placeholder="Llorar" style="width: 136px"></td>
                <td><input type="number" name="porcentaje8" form="my_form" placeholder="0" style="width: 84px"></td>
                <td><input type="number" name="cali5" form="my_form" placeholder="0" style="width: 84px"></td>
              </tr>

          </table>

          <!-- <button type="button" form="my_form">Calcular</button> -->

      </div>

      <div style="width:27%; text-align: center;">

      <table id="requestContents" class = "styl">
              <colgroup>
                  <col style="width: 128px">
              </colgroup>
              <tr>
                  <th>Total</th>
              </tr>
              <tr>
                <td>
                <input type="text" name="sum" style="width: 128px"><br>
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
        let porcentaje6 = document.getElementsByName("porcentaje6")[0].value;
        let porcentaje7 = document.getElementsByName("porcentaje7")[0].value;
        let porcentaje8 = document.getElementsByName("porcentaje8")[0].value;

        let cali1 = document.getElementsByName("cali1")[0].value;
        let cali2 = document.getElementsByName("cali2")[0].value;
        let cali3 = document.getElementsByName("cali3")[0].value;
        let cali4 = document.getElementsByName("cali4")[0].value;
        let cali5 = document.getElementsByName("cali5")[0].value;
        let cali6 = document.getElementsByName("cali6")[0].value;
        let cali7 = document.getElementsByName("cali7")[0].value;
        let cali8 = document.getElementsByName("cali8")[0].value;

        let cal = Number(porcentaje1) + Number(porcentaje2) + Number(porcentaje3) + Number(porcentaje4) + Number(porcentaje5) + Number(porcentaje6) + Number(porcentaje7) + Number(porcentaje8);

        if (cal == 100) {
                document.getElementById("Warn").innerHTML = "<p> </p>";
        }
        else if (cal != 100) {
          	document.getElementById("Warn").innerHTML = "<p> Precaución: <br> El porcentaje no suma 100% total</p>";
        }

        let sum = (Number(porcentaje1) * .01 * Number(cali1)) + (Number(porcentaje2) * .01 * Number(cali2)) + (Number(porcentaje3) * .01 * Number(cali3)) + (Number(porcentaje4) * .01 * Number(cali4)) + (Number(porcentaje5) * .01 * Number(cali5)) + (Number(porcentaje6) * .01 * Number(cali6)) + (Number(porcentaje7) * .01 * Number(cali7)) + (Number(porcentaje8) * .01 * Number(cali8));
        document.getElementsByName("sum")[0].value = sum;
    }
</script>

</body>
</html>
