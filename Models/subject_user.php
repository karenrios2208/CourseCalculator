<?php

class Subject_User
{
    private $conn;
    private $table_name = "subject_user";

    public $SubjecKey;
    public $Email;
    public $FinalGrade;
    public $Teacher;
    public $SemesterCompleted;
    public $Available;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    //Delete a subject_user
    function delete(){

        $query = "UPDATE  ".$this->table_name."
                SET Available = '0'
                WHERE Email = :user";

        //prepare query statement
        $stmt = $this->conn->prepare($query);

        //sanitize
        $this->Email=htmlspecialchars(strip_tags($this->Email));

        //bind new values
        $stmt->bindParam(":user", $this->Email);

        // execute the query
        if($stmt->execute()){
            return true;
        }
      
        return false;
    }
    
    function update(){
        
        // update query
        $query = "UPDATE
                    " . $this->table_name . "
                SET
                    SubjectKey = :sk,
                    Email = :mail,
                    FinalGrade = grade,
                    Teacher = teacher,
                    SemesterCompleted = sem
                WHERE
                    Email = :user";
    
        // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // sanitize
        $this->SubjectKey =htmlspecialchars(strip_tags($this->SubjectKey));
        $this->Email=htmlspecialchars(strip_tags($this->Email));
        $this->FinalGrade = htmlspecialchars(strip_tags($this->FinalGrade));
        $this->Teacher=htmlspecialchars(strip_tags($this->Teacher));
        $this->SemesterCompleted = htmlspecialchars(strip_tags($this->SemesterCompleted));
    
    
        // bind new values
        $stmt->bindParam(":sk", $this->SubjectKey);
        $stmt->bindParam(":mail", $this->Email);
        $stmt->bindParam(":grade", $this->FinalGrade);
        $stmt->bindParam(":teacher", $this->Teacher);
        $stmt->bindParam(":sem", $this->SemesterCompleted);
    
        // execute the query
        if($stmt->execute()){
            return true;
        }
    
        return false;
    }

}
?>