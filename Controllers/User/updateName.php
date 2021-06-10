<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// get database connection
define('ROOT_PATH', dirname(__DIR__) . '/');
include (dirname(ROOT_PATH) .'/Models/database.php');
  
// instantiate user object
include (dirname(ROOT_PATH) .'/Models/user.php');


// get database connection
$database = new Database();
$db = $database->getConnection();

// prepare user object
$user = new User($db);

// get name of user to be edited
//$data = json_decode(file_get_contents("php://input"));
var_dump($_POST);
if( $_POST['user'] !=''){
    
    if($user->updateName($_POST['user'], $_POST['email'])){
        
        session_start();
        $_SESSION['name'] = $_POST['user'];

        http_response_code(200);
    }
    else{
        http_response_code(404); //No se encontro usuario
    }

}

else{
    // set response code - 400 bad request
    http_response_code(505); //Datos vacios
}

?>