<?php
class user {
    public $id;
    public $name;
    public $StartDate;


    function __construct ($id, $name, $StartDate) {
        $this->id = $id;
        $this->name = $name;
        $this->StartDate = $StartDate;
        
    }

    function userDet() {
        $userArr = array(
            "id"=>$this->id,
            "name"=>$this->name,
            "start-date"=>$this->StartDate);
            return $userArr;
    }
}
