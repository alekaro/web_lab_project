<?php
    include('login-logic.php');
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

                        <h1 class="center">Zaloguj się!</h1>

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
            <p>Podaj swój login oraz hasło</p>
                <form method="post" action="" autocomplete="off">
                    <p><label>Login 
                            <input name="user-login" type="text" size="33" autofocus>
                        </label></p>
                    <p><label>Hasło 
                            <input name="user-passwd" type="password" size="33">
                        </label></p>

                    <p>
                        <input type="submit" name="submit">
                        </input>
                    </p>
                    <span><?php echo $error; ?></span>
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