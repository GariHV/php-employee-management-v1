<?php
function validatePassword(){
        $fil="../../json/users.json";
    $Allusers= file_get_contents($fil);
    $usersAll= json_decode($Allusers);
    if (($_POST)){
        $postEmail= $_POST["email"];
        $postPassword= $_POST["password"];
        header(("Location: ./login.php?InvalidCredential"));
        foreach ($usersAll as $user ) {
            if($postEmail == $user->email){
                if(password_verify($postPassword, $user->password)){
                    session_start();
                    $_SESSION["email"]= $postEmail;
                    $_SESSION["user"]= $user->name;
                    header("Location: ../../index.php");
                    exit();
                }
            }
        }
    }
}

function registerNewUser(){
    if(isset($_POST['email'])){
    $cryptedPass = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $arr_clients= array("name" =>$_POST["name"],"email"=> $_POST["email"], "password" => $cryptedPass );
    // $json_string = json_encode($arr_clients);
    print_r ($arr_clients);
    $file=("../../resources/users.json");
    $Allusers= file_get_contents($file);
    $usersAll= json_decode($Allusers);
    // print_r($Allusers);
    array_push($usersAll , $arr_clients);
    print_r($usersAll);
    $jsonUsers= json_encode($usersAll);
    file_put_contents($file, $jsonUsers);
    $nombreUser= $_POST['email'];
    mkdir("../../root/$nombreUser",0777);
/*     header(("Location:../../index.php"));
 */}
}