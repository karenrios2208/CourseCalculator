<?php
// start a session
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../resources/weak.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins" />

</head>

<body>
    <h1>WELCOME <?php echo $_SESSION['name'] ?></h1>
</body>

</html>