<?php
require_once 'connect.php';
include 'GetID.php';
include_once 'getValue.php';


class getValue extends connect  {

    private $GetButtunValue;
    private $getID;
    private $GetName;
    private $getStartDate;
    private $returnToHTML;
    private $my_Data_Base;


    function __constract(){
        if(isset($_POST['submit'])) {
            $this->GetButtunValue = $_POST['submit'];
            $this->getID = $_POST['Wid'];
            $this->GetName = $_POST['Wmame'];
            $this->getStartDate = $_POST['startDate'];
            $this->my_Data_Base = connecToDB();
            $this->returnToHTML = mySwitch();

        }
    }

    function mySwitch(){
            switch($this->GetButtunValue){
                    case 'get': 
                    return new GetID();
                    break;
            }
    }
    
    
}


//             case 'get':
//         case "add":
//    case "update":
//         case "delete":
//         case "all":
//         default:
//             echo "error";
