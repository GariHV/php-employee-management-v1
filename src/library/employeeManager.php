<?php
/**
 * EMPLOYEE FUNCTIONS LIBRARY
 *
 * @author: Jose Manuel Orts
 * @date: 11/06/2020
 */
function listEmployee(){
$content = file_get_contents(".././../resources/employees.json");
return json_decode($content);
}



function addEmployee(array $newEmployee)
{
// TODO implement it
}


function deleteEmployee(string $id)
{
// TODO implement it
}


function updateEmployee($updateEmployee)
{
// TODO implement it
    $empleados = listEmployee();
    foreach($empleados as $empleado){
        if($empleado->id == $updateEmployee){
            $empleado->id = $_POST["id"];
            $empleado->name = $_POST["name"];
            $empleado->gender = $_POST["gender"];
            $empleado->lastName = $_POST['lastName'];
            $empleado->email = $_POST['email'];
            $empleado->age = $_POST['age'];
            $empleado->city = $_POST['city'];
            $empleado->state = $_POST['state'];
            $empleado->streetAddress = $_POST['streetAddress'];
            $empleado->phoneNumber = $_POST['phoneNumber'];
            $empleado->postalCode = $_POST['postalCode'];
        }
    }
    echo ($_POST['city']);
    sendEmployee($empleados);
    header('Location: ./library/employeeController.php?edit='+ $updateEmployee);
}

function sendEmployee($content){
    $file=".././../resources/employees.json";
    $usersAll=json_encode($content);
    $Allusers= file_put_contents($file,$usersAll);
}


function getEmployee(string $id)
{
// TODO implement it
}


function removeAvatar($id)
{
// TODO implement it
}


function getQueryStringParameters(): array
{
// TODO implement it
}

function getNextIdentifier(array $employeesCollection): int
{
// TODO implement it
}
