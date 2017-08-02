<?php

class GetID extends getValue {



    function __construct(){
        $this->getId = $getID;
        $DB_employee = $my_Data_Base->query('SELECT * FROM proj_emplyee');
                while ($row = $DB_employee->fetch()) {
                    if($WorkerId == $row["worker_id"]){
                        $worker = "workers name is:" .  $row["worker_name"] . "</br>" . "start work at: ". $row["work_start"]; 
                    echo $worker;  
                    return $worker;  
                    }

                }
    }
}
            





