<?php

/**
 * EMPLOYEE FUNCTIONS LIBRARY
 *
 * @author: Jose Manuel Orts
 * @date: 11/06/2020
 */
function listEmployee()
{
    $content = file_get_contents(".././../resources/employees.json");
    return json_decode($content);
}



function addEmployee()
{
    // TODO implement it



    $allEmployees = listEmployee();
    print_r($allEmployees);
    $newId = count($allEmployees) + 1;
    $newEmployee = array(
        "id" => $newId, "name" => $_POST["name"], "lastName" => $_POST["lastName"], "gender" => $_POST["gender"], "email" => $_POST["email"], "age" => $_POST["age"], "city" => $_POST["city"],
        "state" => $_POST["state"], "streetAddress" => $_POST["streetAddress"], "phoneNumber" => $_POST["phoneNumber"], "postalCode" => $_POST["postalCode"]
    );


    array_push($allEmployees, $newEmployee);
    $jsonClients = json_encode($allEmployees);
    $file = (".././../resources/employees.json");
    file_put_contents($file, $jsonClients);
}


function deleteEmployee(string $id)
{
    // TODO implement it
}


function updateEmployee($updateEmployee)
{
    // TODO implement it
    $empleados = listEmployee();
    foreach ($empleados as $empleado) {
        if ($empleado->id == $updateEmployee) {
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
    sendEmployee($empleados);
}

function sendEmployee($content)
{
    $file = ".././../resources/employees.json";
    $usersAll = json_encode($content);
    $Allusers = file_put_contents($file, $usersAll);
}

function getEmployee($id)
{
    $employees = listEmployee();
    foreach ($empleados as $empleado) {
        if ($empleado->id == $id) {
            $formId = $empleado->id;
            $formName = $empleado->name;
            $formGender = $empleado->gender;
            $formLastName = $empleado->lastNameme;
            $formEmail = $empleado->email;
            $formAge = $empleado->age;
            $formCity = $empleado->city;
            $formState = $empleado->state;
            $formStreet = $empleado->streetAddress;
            $formPhone = $empleado->phoneNumber;
            $formPostalCode = $empleado->postalCode;
        }
    }
}


// function removeAvatar($id)
// {
//     // TODO implement it
// }


// function getQueryStringParameters(): array
// {
//     // TODO implement it
// }

// function getNextIdentifier(array $employeesCollection): int
// {
//     // TODO implement it
// }
