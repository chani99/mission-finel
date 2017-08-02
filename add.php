<?php
class add {
    public $mesegge;
    public $UserDetails;
    private $DB;


    function __construct ($UserDetails, $DB) {
        $this->UserDetails = $UserDetails;
        $this->DB = $DB;

          $DB_employee = $DB->prepare("INSERT INTO proj_emplyee(worker_id, worker_name, work_start)
                VALUES(:worker_id, :worker_name, :work_start)");
            $DB_employee->execute(array(
                "worker_id"=>$this->UserDetails['id'],
                "worker_name"=>$this->UserDetails['name'],
                "work_start"=>$this->UserDetails['start-date'],));

                return true;
                    }
  
  
               

}



