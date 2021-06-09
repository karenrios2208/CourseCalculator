<?php
    // required headers
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    
// get database connection
include_once '../Models/database.php';
  
// instantiate user object
include_once '../Models/user.php';

    //Make connection
    $database = new Database();
    $db = $database->getConnection();

    //prepare user object
    $user = new User($db);
    
    //get posted data
    $data = json_decode(file_get_contents("php://input"));

    //Check that data it's not empty
    if(
        !empty($data->user
    ){
        //change available protery
        $user->Name=$data->user;

        //update
        if ($user->delete()){
            // set response code - 200 ok
    http_response_code(200);
  
    // tell the user
    echo json_encode(array("message" => "User was deleted")); 
        }
    }
    else{
        // set response code - 503 service unavailable
        http_response_code(503);
      
        // tell the user
        echo json_encode(array("message" => "Unable to delete the user."));
    }

?>