<?php
include ('connect.php');
$DB = new connect();
$DB->getDB();
$DB = $DB->getDB();

$id = $_REQUEST["id"];

$DB_employee = $DB->prepare("SELECT * FROM proj_emplyee WHERE worker_id =". $id);
$DB_employee->execute();
$row = $DB_employee;
                while ($row = $DB_employee->fetch()) {
                $idDetails = "workers name is:" .  $row["worker_name"] . "</br>" .
                    "start work at: ". $row["work_start"];
//$idDetails = json_encode($DB_employee);
                }
echo $idDetails;


               