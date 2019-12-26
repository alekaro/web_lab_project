<?php
    session_start();
    $prev = $_GET["previous"];

    setcookie("sessionIdC", session_id());

    $user_table = [
        "admin" => "haslo"
    ];

    $error='';
    if (isset($_POST['submit'])) {
        if (empty($_POST['user-login']) || empty($_POST['user-passwd'])) {
            $error = "Wpisz login i hasło.";
        }
        else
        {
            $username=$_POST['user-login'];
            $password=$_POST['user-passwd'];

            $username = stripslashes($username);
            $password = stripslashes($password);
            if (array_key_exists($username, $user_table) && $user_table[$username] == $password) {
                $_SESSION['login']=$username;
                header('Location: '. $prev);
            } else {
                $error = "Login lub hasło nieprawidłowe.";
            }
        }   
    }
?>