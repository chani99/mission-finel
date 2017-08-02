<?php
class delete  {
    public $idDetails="";
    public $id;
    public $DB;


            function __construct ($id, $DB) {
                $this->id = $id;
                $this->DB = $DB;
            }
  
    function deleteEmp($DB){
                $this->DB = $DB;
                $DBtest = $DB->prepare("SELECT COUNT(*) FROM proj_emplyee WHERE worker_id =". $this->id);
                $DBtest->execute();
                $row = $DBtest->fetch();

                if($row['COUNT(*)'] == 1) {
                $DB_employee = $DB->prepare("DELETE FROM proj_emplyee WHERE worker_id =". $this->id);
                $DB_employee->execute();
                return true;
                } 
                else {
                    return false;
                }


    }


}