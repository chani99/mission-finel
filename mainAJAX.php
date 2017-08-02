<?php
include ('button.php');
include ('get.php');
include ('user.php');
include ('connect.php');
include ('add.php');
include ('update1.php');
include ('delete.php');
include ('getAll.php');

$get;
$buttonValue = ($_REQUEST['q']);
$userID = $_REQUEST['id'];
$userName = $_REQUEST['name'];
$userDate = $_REQUEST['date'];
$UserDetails;

$DB = new connect();
$DB = $DB->getDB();

    switch ($buttonValue) {

        case "get": //get details of an employee
        if ($userID != "") {
            $get= new get($userID, $DB);
            $get = $get->userDetals($DB);
                    if ($get == false) {
                        echo "The ID you enterd doesn't exist";
                    } else {
                    echo(json_encode($get));
                    }
        }
            else {
                echo "Enter the ID of the employee";
            }
            break;


        case "add": //add a new employee
            if (($userName!= "") && ($userDate!= "") ) {
                $UserDetails = new User($userID, $userName, $userDate );
                $UserDetails = $UserDetails->userDet();
                $get= new add($UserDetails, $DB);
                if ($get ==true){
                echo $userName . ' was added :)';}
            }
                else {
            echo "Fill out all the fields";
            }
            break;


     case "update": //update a employee
            if (($userID!= "") && ($userName!= "") && ($userDate!= "") ) {
            $UserDetails = new User($userID, $userName, $userDate );
            $get= new update($UserDetails, $DB);
            $result = $get->userUpdate($DB, $UserDetails);
                    if ($result == true){
                    echo "Updated";}
                    else {
                     echo 'The ID you enterd doesn\'t exist';
                    }
            }
            else {
            echo 'Fill out all the fields';
            }
            break;


     case "delete": //delete a employee
            if ($userID != "") {
            $delete= new delete($userID, $DB);
            $result = $delete->deleteEmp($DB);
                    if($result == true) {
                        echo $userID . "was deleted.";
                    }
                    else{
                        echo "The ID you enterd dosnt exist";
                    }
            }
            else {
                echo "Enter the ID of the employee";
            }
            break;

     case "all": //get all employees
            $getall= new getAll($DB);
            $getall = $getall->printAll($DB);
            echo $getall;
            break;


    default:
    echo "error";

}
