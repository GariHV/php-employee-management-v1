<?php
    $fil="../../resources/users.json";
    $Allusers= file_get_contents($fil);
    $usersAll= json_decode($Allusers);
    if (($_POST)){
        $postEmail= $_POST["email"];
        $postPassword= $_POST["password"];
        header(("Location: ./loginManager.php?InvalidCredential"));
        foreach ($usersAll as $users) {
            foreach ($users as $key) {
                if($postEmail == $key->email){
                    if(password_verify($postPassword, $key->password)){
                        session_start();
                        $_SESSION["email"]= $key->email;
                        $_SESSION["user"]= $key->name;
                        header("Location: ../../index.php");
                        exit();
                    }
                }
            }
        }
    }