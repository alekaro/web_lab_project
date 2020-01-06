<?php
session_start();
?>

<!DOCTYPE HTML>
<html lang="pl">

<head>
    <meta charset="utf-8" />
    <title>Katalog gitar</title>
    <meta name="description" content="Największy katalog gitarowy na świecie. Mayones, Yamaha, Epiphone, Ibanez i wiele wiele innch." />
    <meta name="keywords" content="gitara,gitary,yamaha,katalog,mayones" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="stylesheet" href="styles.css" type="text/css" />

</head>

<body>

    <div id="container">
        <div id="header">
            <table class="t1">
                <tr>
                    <td class="d1">
                        <a href="index.html"><img class="logo" height="100" width="100" src="./img/logo.png" alt="Powrót do strony głównej" /></a>
                    </td>
                    <td class="d2">
                        <h1 class="center">Skrypt diagnostyczny</h1>
                    <td class="d3">
                    </td>
                </tr>
            </table>
        </div>
        <div id="main-row">
            <div id="mr-left" class="xxx">
                <h2>Kategorie</h2>
                <nav>
                    <ol>
                        <li><strong>Elektryczne </strong><br />
                            <ul>
                                <li><a href="e-mayones.html">Mayones</a></li>
                                <li><a href="e-ibanez.html">Ibanez</a></li>
                            </ul>
                        </li>
                        <li><strong>Basowe</strong><br />
                            <ul>
                                <li><a href="b-mayones.html">Mayones</a></li>
                                <li>Epiphone</li>
                                <li>Ibanez</li>
                            </ul>
                        </li>
                        <li><strong>Akustyczne</strong><br />
                            <ul>
                                <li>Ibanez</li>
                                <li>Yamaha</li>
                            </ul>
                        </li>
                        <li><strong>Klasyczne</strong><br />
                            <ul>
                                <li>Yamaha</li>
                            </ul>
                        </li>
                    </ol>
                </nav>
            </div>


            <div id="mr-center" class="xxx">
                <?php
                $bdateerror = False;
                $error = "";

                if (isset($_POST["submit"])) {

                    foreach ($_POST as $key => $value) {
                        $$key = $value;
                    }

                    if (!preg_match("/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/", $bdate) && $bdate != "") {
                        $bdateerror = True;
                    } // end if

                    $query = "SELECT * FROM  users WHERE TRUE";

                    foreach ($_POST as $key => $value) {
                        if ($$key != "" && $value != "Wyszukaj") $query = $query . " AND $key LIKE \"%" . $value . "%\"";
                    }

                    if ($bdateerror) {
                        $error = '<p style="color: red;">Data urodzenia musi być w formacie 0000-00-00 </p>';
                    } else {
                        // Connect to MySQL
                        if (!($database = mysqli_connect("localhost", "root", "", "userList"))) {
                            die("<p>Could not connect to database</p>");
                        }

                        // execute query in database
                        if (!($result = mysqli_query($database, $query))) {
                            print("<p>Could not execute query!</p>");
                            die(mysqli_error($database));
                        }

                        mysqli_close($database);

                        $error = '<p style="color: green;"> Wyszukiwanie powiodło się. </p>';
                    }
                }
                ?>
                <form method="post" action="" autocomplete="off">
                    <table class="t1">
                        <tr>
                            <td class="d1">
                                <label>Login</label>
                            </td>
                            <td>
                                <input name="login" type="text" size="33" autofocus>
                            </td>
                        </tr>
                        <tr>
                            <td class="d1">
                                <label>Email</label>
                            </td>
                            <td>
                                <input name="email" type="text" size="33">
                            </td>
                        </tr>
                        <tr>
                            <td class="d1">
                                <label>Data urodzenia</label>
                            </td>
                            <td>
                                <input name="bdate" type="text" size="33">
                            </td>
                        </tr>
                        <tr>
                            <td class="d1">
                                <label>Hasło</label>
                            </td>
                            <td>
                                <input name="haslo" type="text" size="33">
                            </td>
                        </tr>
                    </table>

                    <p>
                        <input type="submit" name="submit" value="Wyszukaj">
                        </input>
                    </p>
                    <span><?php echo $error; ?></span>

                    <table class="ei-tab">
                        <tr>
                            <td>
                                <p style="font-weight: bold;">id</p>
                            </td>
                            <td>
                                <p style="font-weight: bold;">login</p>
                            </td>
                            <td>
                                <p style="font-weight: bold;">email</p>
                            </td>
                            <td>
                                <p style="font-weight: bold;">dataUr</p>
                            </td>
                            <td>
                                <p style="font-weight: bold;">haslo</p>
                            </td>
                            <td>
                                <p style="font-weight: bold;">dataUtw</p>
                            </td>
                        </tr>
                        <?php
                        if (isset($_POST["submit"])) {
                            while ($row = mysqli_fetch_row($result)) {
                                echo "<tr>";
                                foreach ($row as $key => $value) {
                                    echo "<td>$value</td>";
                                }
                                echo "</tr>";
                            }
                        }
                        ?>
                    </table>
                </form>
            </div>


            <div id="mr-right" class="xxx">

            </div>
        </div>
        <footer>
            <table class="t1">
                <tr>
                    <td class="d1">
                        <a href="liczbowy-formularz.php">formularz obliczeniowy</a>
                    </td>
                    <td class="d2">
                        &copy; Copyright. All right reserved
                    <td rowspan="2" class="d3">
                        <p>Newsletter:</p>
                        <a href="newsletter.html"><img src="img/newsletter.png" height="30" width="30" alt="Newsletter" /></a>
                    </td>
                </tr>
                <tr>
                    <td class="d1">
                    </td>
                    <td class="d2">
                        <a href="mailto:kataloggitarowy@katag.com">Skontaktuj się z nami mailowo</a> lub wypełnij <a href="formularz.html">formularz</a>
                </tr>
            </table>
        </footer>

    </div>

</body>

</html>