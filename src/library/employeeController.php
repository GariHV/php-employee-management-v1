<?php

require_once("./employeeManager.php");
if (isset($_GET["getEmployees"])) {
    $result = listEmployee();
    
    echo json_encode($result);
}
