<?php
class getAll  {

    public $DB;


            function __construct ($DB) {
                $this->DB = $DB;
            }
  
    function printAll($DB){
                $this->DB = $DB;
                $DB_employee = $DB->prepare('SELECT * FROM proj_emplyee');
                $DB_employee->execute();

                echo "<table > <tr>
                            <th>worker id</th>
                            <th>workers name</th> 
                            <th>start dat</th>
                            </tr>";
                while ($row = $DB_employee->fetch()) {
                    echo     "<tr>
                                <td>" . $row["worker_id"] . "</td>
                                <td>" . $row["worker_name"] . "</td> 
                                <td>" . $row["work_start"] . "</td>
                            </tr>";
                            }
                echo "</table>";
         


    }


}