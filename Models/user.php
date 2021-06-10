<?php

class User
{
    // database connection and table name
    private $conn;
    private $table_name = "user";

    public $Name;
    public $Password;
    public $Email;
    public $StudyProgram;
    public $Available;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    //Delete a user
    function delete(){

        //Query
        $query = "UPDATE  ".$this->table_name."
                SET Available = '0'
                WHERE Name = :user";

        //prepare query statement
        $stmt = $this->conn->prepare($query);

        //sanitize
        $this->Name=htmlspecialchars(strip_tags($this->Name));

        //bind new values
        $stmt->bindParam(":user", $this->Name);

        // execute the query
        if($stmt->execute()){
            return true;
        }
      
        return false;
    }

    //update the user
    function update(){
        
        // update query
        $query = "UPDATE
                    " . $this->table_name . "
                SET
                    Password = :pwd,
                    Email = :mail,
                    StudyProgram= :sp
                WHERE
                    Name = :user";
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // sanitize
        $this->Username=htmlspecialchars(strip_tags($this->Username));
        $this->FullName=htmlspecialchars(strip_tags($this->FullName));
        $this->Email=htmlspecialchars(strip_tags($this->Email));
        $this->Password=htmlspecialchars(strip_tags($this-> Password));
    
    
        // bind new values
        $stmt->bindParam(":user", $this->Name);
        $stmt->bindParam(":mail", $this->Email);
        $stmt->bindParam(":pwd", $this->Password);
        $stmt->bindParam(":sp", $this->StudyProgram);
    
        // execute the query
        if($stmt->execute()){
            return true;
        }
    
        return false;
    }

    function create(){
         // query to insert record
         $query = "INSERT INTO
                ".$this->table_name."
            SET
                Name = :user, 
                Email = :mail,
                Password = :pwd,
                StudyProgram = :sp";

        // prepare query
        $stmt = $this->conn->prepare($query);

        // sanitize
        $this->Name=htmlspecialchars(strip_tags($this->Name));
        $this->StudyProgram=htmlspecialchars(strip_tags($this->StudyProgram));
        $this->Email=htmlspecialchars(strip_tags($this->Email));
        $this->Password=htmlspecialchars(strip_tags($this-> Password));


        // bind new values
        $stmt->bindParam(":user", $this->Name);
        $stmt->bindParam(":mail", $this->Email);
        $stmt->bindParam(":pwd", $this->Password);
        $stmt->bindParam(":sp", $this->StudyProgram);
       
        // execute query
        if($stmt->execute()){
        return true;
        }

        return false;
    }

    function read(){
      
        // select all query
        $query = "SELECT
                    q.Name, q.Email, q.Password, q.StudyProgram
                FROM
                    " . $this->table_name . " q
                ORDER BY
                    q.Name ASC";
      
        // prepare query statement
        $stmt = $this->conn->prepare($query);
      
        // execute query
        $stmt->execute();
      
        return $stmt;
    }

    function search($keyword){
        
        $query = "SELECT
                    u.Name, u.Password, u.Email, u.StudyProgram
                FROM " . $this->table_name . " u
                WHERE 
                    u.Name = ?
                    ORDER BY 
                        u.Name DESC";

        $stmt = $this->conn->prepare($query);

        $keyword = htmlspecialchars(strip_tags($keyword));
        $keyword = "{$keyword}";

        $stmt->bindParam(1, $keyword);

        $stmt->execute();

        return $stmt;
    }

    function searchLogin($keyword, $pass){
        
        $query = "SELECT
                    u.Password, u.Email
                FROM " . $this->table_name . " u
                WHERE  u.Email='".$keyword."' and u.Password = '".$pass."'
                ORDER BY 
                    u.Name DESC;";

        $stmt = $this->conn->prepare($query);

        $stmt->execute();

        return $stmt;
    }

    function searchName($email)
    {
        $query = "SELECT u.Name
                FROM " . $this->table_name . " u
                WHERE u.Email='".$email."'
                LIMIT 1;";

        $stmt = $this->conn->prepare($query);

        $stmt->execute();

        return $stmt;
    }

    
    function updateName($name,$email )
    {
        $query = "UPDATE
        " . $this->table_name . "
    SET
        Name = '".$name."'

    WHERE
        Email = '".$email."';";

        $stmt = $this->conn->prepare($query);

        $stmt->execute();

        return $stmt;
    }

    function updatePassword($pwd,$email )
    {
        $query = "UPDATE
        " . $this->table_name . "
    SET
        Password = '".$pwd."'

    WHERE
        Email = '".$email."';";

        $stmt = $this->conn->prepare($query);

        $stmt->execute();

        return $stmt;
    }


    function updateStudy($sp,$email )
    {
        $query = "UPDATE
        " . $this->table_name . "
    SET
        StudyProgram = '".$sp."'

    WHERE
        Email = '".$email."';";

        $stmt = $this->conn->prepare($query);

        $stmt->execute();

        return $stmt;
    }
}
?>
