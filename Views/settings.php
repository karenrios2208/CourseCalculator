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
      <form id = "cname">
        <label> New name:   </label>
        <input type="text" id="user" name="user"/>
        <input type="hidden" id="email" name="email" value="<?php echo $_SESSION['email'] ?>"/>
        <button type="submit" name="change">Change</button>
        <p id="msgn"></p>
      </form> 
      <br/>
      <!-- <div class="text">Change photo</div>
      <form id = "cphoto">
        <input type="file"
       id="photo" name="photo"
       accept="image/png, image/jpeg">
        <input type="hidden" id="email" name="email" value="<?php echo $_SESSION['email'] ?>"/>
        <button type="submit" name="change">Submit</button>
        <p id="msgph"></p>
      </form>  -->
      
      <div class="text">Change password</div>
      <form id = "cpassword">
        <label> New password: </label>
        <input type="text" id="pwd" name="pwd"/>
        <input type="hidden" id="email" name="email" value="<?php echo $_SESSION['email'] ?>"/>
        <button type="submit" name="change">Change</button>
        <p id="msgp"></p>
        </form> 
    </div>
  </div>
    <?php
      require '../Resources/templates/sidebar-scripts.php';
    ?>
    <script>

    var xhttp;
    var form = document.getElementById("cname");
        form.onsubmit = function (e) {
            e.preventDefault();
            var formdata = new FormData(form);
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    //var karen = JSON.parse(this.responseText);
                    document.getElementById("msgn").innerHTML = 'Name changed succesfully';
                    
                }
                else if (this.readyState == 4 && this.status == 404) {
                    //var karen = JSON.parse(this.responseText);
                    document.getElementById("msgn").innerHTML = 'Wrong email or password';
                }
                else if (this.readyState == 4 && this.status == 505) {
                    //var karen = JSON.parse(this.responseText);
                    document.getElementById("msgn").innerHTML = 'No empty fields allowed';
                }
            };

            xhttp.open("POST", "../Controllers/User/updateName.php", false);
            xhttp.send(formdata);
        }
  // function for changing password
        var form1 = document.getElementById("cpassword");
        form1.onsubmit = function (e) {
            e.preventDefault();
            var formdata = new FormData(form1);
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    //var karen = JSON.parse(this.responseText);
                    document.getElementById("msgp").innerHTML = 'Password changed succesfully';
                }
                else if (this.readyState == 4 && this.status == 404) {
                    //var karen = JSON.parse(this.responseText);
                    document.getElementById("msgp").innerHTML = 'Wrong email or password';
                }
                else if (this.readyState == 4 && this.status == 505) {
                    //var karen = JSON.parse(this.responseText);
                    document.getElementById("msgp").innerHTML = 'No empty fields allowed';
                }
            };

            xhttp.open("POST", "../Controllers/User/updatePassword.php", false);
            xhttp.send(formdata);
        }

   // function for changing StudyProgram       
        var form2 = document.getElementById("cphoto");
        form2.onsubmit = function (e) {
            e.preventDefault();
            var formdata = new FormData(form);
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    //var karen = JSON.parse(this.responseText);
                    document.getElementById("msgsph").innerHTML = 'Photo changed succesfully';
                }
                else if (this.readyState == 4 && this.status == 404) {
                    //var karen = JSON.parse(this.responseText);
                    document.getElementById("msgsph").innerHTML = 'Wrong email or password';
                }
                else if (this.readyState == 4 && this.status == 505) {
                    //var karen = JSON.parse(this.responseText);
                    document.getElementById("msgsph").innerHTML = 'No empty fields allowed';
                }
            };

            xhttp.open("POST", "../Controllers/User/updatePhoto.php", false);
            xhttp.send(formdata);
        }

    </script>
</body>
</html>
