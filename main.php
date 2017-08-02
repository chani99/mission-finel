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

$buttonValue = ($_POST['submit']);
$UserDetails;
$DB = new connect();
$DB->getDB();
$DB = $DB->getDB();

    switch ($buttonValue) {

        case "get": //get details of a amployee
        if ($_POST['Wid'] != "") {
            $get= new get($_POST['Wid'], $DB);
            $get = $get->userDetals($DB);
                    if ($get == false) {
                        echo "<script type='text/javascript'>alert('the id you enterd dosnt exist');</script>";

                    } else {
                    echo $get;
                    }
        }
            else {
                echo "<script type='text/javascript'>alert('enter a id of the employee');</script>";
            }
            break;


        case "add": //add a new employee
            if (($_POST['Wmame']!= "") && ($_POST['startDate']!= "") ) {
                $UserDetails = new User($_POST['Wid'], $_POST['Wmame'], $_POST['startDate'] );
                $UserDetails = $UserDetails->userDet();
                $get= new add($UserDetails, $DB);
                if ($get ==true){
                echo $_POST['Wmame'] . ' was added :)';}
            }
                else {
            echo "<script type='text/javascript'>alert('fill all the fields');</script>";
            }
            break;


     case "update": //update a employee
            if (($_POST['Wid']!= "") && ($_POST['Wmame']!= "") && ($_POST['startDate']!= "") ) {
            $UserDetails = new User($_POST['Wid'], $_POST['Wmame'], $_POST['startDate'] );
            $get= new update($UserDetails, $DB);
            $result = $get->userUpdate($DB, $UserDetails);
                    if ($result == true){
                    echo "updated";}
                    else {
                     echo "<script type='text/javascript'>alert('the id you enterd dosnt exist');</script>";
                    }
            }
            else {
            echo "<script type='text/javascript'>alert('fill all the fields');</script>";
            }
            break;


     case "delete": //delete a employee
            if ($_POST['Wid'] != "") {
            $delete= new delete($_POST['Wid'], $DB);
            $result = $delete->deleteEmp($DB);
                    if($result == true) {
                        echo $_POST['Wid'] . "was deleted.";
                    }
                    else{
                        echo "<script type='text/javascript'>alert('the id you enterd dosnt exist');</script>";
                    }
            }
            else {
                echo "<script type='text/javascript'>alert('enter a id of the employee');</script>";
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
