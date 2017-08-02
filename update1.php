<?php
class update  {
    public $idDetails="";
    public $user;
    public $DB;


            function __construct ($user, $DB) {
                $this->user = $user;
                $this->DB = $DB;
            }
  
    function userUpdate($DB, $user){
                $this->DB = $DB;
                $array =  (array) $this->user;
                $WorkerNeme = $array['name'];
                $WorkerDate = $array['StartDate'];
                $WorkerId = $array['id'];

                $DBtest = $DB->prepare("SELECT COUNT(*) FROM proj_emplyee WHERE worker_id =". $WorkerId);
                $DBtest->execute();
                $row = $DBtest->fetch();

                if($row['COUNT(*)'] == 1) {
                $DB_employee = $DB->prepare("UPDATE proj_emplyee SET worker_name = '$WorkerNeme', work_start=' $WorkerDate' WHERE worker_id='$WorkerId'");
                $DB_employee->execute();
                return true;
                }
                else {
                return false;
                }

    }


}