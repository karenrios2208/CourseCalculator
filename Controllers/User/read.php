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


    // get database connection
    $database = new Database();
    $db = $database->getConnection();

    // prepare user object
    $user = new User($db);

    $stmt =$user->read();
    $num = $stmt->rowCount();

    if($num>0){
        $user_arr=array();
        $user_arr["records"]=array();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            // extract row
            // this will make $row['name'] to
            // just $name only
            extract($row);
    
            $user_item=array(
                "user" => $Username,
                "fname" => $FullName,
                "mail" => $Email,
                "pwd" => $Password,
            );
      
            array_push($user_arr["records"], $user_item);
        }
      
        // set response code - 200 OK
        http_response_code(200);
      
        // show quinielas data in json format
        echo json_encode($user_arr);
    }
    else{
      
        // set response code - 404 Not found
        http_response_code(404);
      
        // tell the user no quinielas found
        echo json_encode(
            array("message" => "No Users Found.")
        );
    }
?>