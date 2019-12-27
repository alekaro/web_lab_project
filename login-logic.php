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

            $query = "SELECT * FROM users " .
                        "WHERE login = \"$username\" AND haslo = \"$password\"";

            // Connect to MySQL
            if (!($database = mysqli_connect("localhost", "root", "", "userList"))) {
                die("<p>Could not connect to database</p>");
            }

            // execute query in database
            if (!($result = mysqli_query($database, $query))) {
                print("<p>Could not execute query!</p>");
                die(mysqli_error($database));
            }

            if (mysqli_fetch_row($result)!=NULL) {
                $_SESSION['login']=$username;
                header('Location: '. $prev);
            } else {
                $error = "Login i/lub hasło nieprawidłowe.";
            }
        }   
    }
