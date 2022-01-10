<?php

require_once("./employeeManager.php");
if (isset($_GET["getEmployees"])) {
    $result = listEmployees();
    echo json_encode($result);
}
