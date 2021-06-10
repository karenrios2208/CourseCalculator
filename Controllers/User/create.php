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
  
$database = new Database();
$db = $database->getConnection();
  
$user = new User($db);
$avai = 1;
  
// get posted data
//$data = json_decode(file_get_contents("php://input"));
var_dump($_POST);
// make sure data is not empty
if(

    !empty($_POST['user']) &&
    !empty($_POST['pwd']) &&
    !empty($_POST['mail']) &&
    !empty($_POST['sp'])

){
  
    // set user's property values
    $user->Name = $_POST['user'];
    $user->StudyProgram = $_POST['sp'];
    $user->Email = $_POST['mail'];
    $user->Password = $_POST['pwd'];

    $stmt = $user->search($_POST['mail']);
    $numrows = $stmt->rowCount();

    if ($numrows > 0)
    {
        http_response_code(404); // No se pudo crear
    }
    // create the user
    if($user->create()){
  
        // set response code - 201 created
        http_response_code(200);
  
        // tell the user
        echo json_encode(array("message" => "user was created."));
    }
  
    // if unable to create the user, tell the user
    else{
  
        // set response code - 503 service unavailable
        http_response_code(404); // No se pudo crear
  
        // tell the user
        echo json_encode(array("message" => "Unable to create user."));
    }
}
  
// tell the user data is incomplete
else{
  
    // set response code - 400 bad request
    http_response_code(505); //Hay datos vacios
  
    // tell the user
    echo json_encode(array("message" => "Unable to create user. Data is incomplete."));
}
?>