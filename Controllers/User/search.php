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




if( $_POST['user'] != "" )
{
    $stmt = $user->search($_POST['user']);
    $numRows = $stmt->rowCount();

    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $user_rows = "";

    if ($numRows > 0) 
    {
        foreach($rows as $item){
            $user_rows .= "
            \n <tr> 
                            \t <td> $item[Name] </td>
                            \t <td> $item[Password] </td>
                            \t <td> $item[Email] </td>
                            \t <td> $item[StudyProgram] </td>
                    \n </tr>";
    
        }
        
    }
    else{
        http_response_code(404);
    }
}
    else{
      
        // set response code - 404 Not found
        http_response_code(404);
      
    }

?>
<meta http-equiv="refresh" content="0; URL=mainPage.html" />;