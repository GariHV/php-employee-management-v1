<?php
    echo("a");
    $fil="../../resources/users.json";
    $Allusers= file_get_contents($fil);
    $usersAll= json_decode($Allusers);
    print_r($usersAll);
    if (($_POST)){
        $postEmail= $_POST["email"];
        $postPassword= $_POST["password"];
        print_r($postPassword);
/*         header(("Location: ./loginManager.php?InvalidCredential")); */
        foreach ($usersAll as $users) {
            foreach ($users as $key) {
                if($postEmail == $key->email){
                    print_r($key->password);
                    if(password_verify($postPassword, $key->password)){
                        session_start();
                        $_SESSION["email"]= $postEmail;
                        $_SESSION["user"]= $key->name;
                        header("Location: ../../index.php");
                        exit();
                    }
                }
            }
        }
    }