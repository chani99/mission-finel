<?php
class get  {
    public $idDetails=array("");
    public $id;
    public $DB;


            function __construct ($id, $DB) {
                $this->id = $id;
                $this->DB = $DB;
            }
  
    function userDetals($DB){
                $this->DB = $DB;
                $DBtest = $DB->prepare("SELECT COUNT(*) FROM proj_emplyee WHERE worker_id =". $this->id);
                $DBtest->execute();
                $row1 = $DBtest->fetch();

                if($row1['COUNT(*)'] == 1) {
                        $DB_employee = $DB->prepare("SELECT * FROM proj_emplyee WHERE worker_id =". $this->id);
                        $DB_employee->execute();
                        $row = $DB_employee->fetch();
                        array_push($this->idDetails,$row["worker_name"],$row["work_start"]);
                            return $this->idDetails;
                    }
                    else {
                        $this->idDetails = false;
                    return $this->idDetails;

                    }
                return $this->idDetails;
                }    




}