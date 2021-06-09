<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
  
// get database connection
define('ROOT_PATH', dirname(__DIR__) . '/');
include (dirname(ROOT_PATH) .'/Models/database.php');
  
// instantiate user object
include (dirname(ROOT_PATH) .'/Models/user.php');
  
$database = new Database();
$db = $database->getConnection();
  
$user = new User($db);


if( $_POST['email'] != "" && $_POST['pwd'] != "" )
{
    $stmt = $user->searchLogin($_POST['email'], $_POST['pwd']);
    $numRows = $stmt->rowCount();

    if ($numRows > 0) 
    {
        http_response_code(200);
        session_start();
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['pwd'] = $_POST['pwd'];

        $stmt2 = $user->searchName($_POST['email']);
        $value = $stmt2->fetchAll(PDO::FETCH_ASSOC);
        VAR_DUMP($value);
        $_SESSION['name'] = $value[0]['Name'];

        
    }
    else{
        //Error no encontrado
        http_response_code(404);
    }
}
else{
    
    // Error campos vacios
    http_response_code(505);
    
}

?>
