<?php
session_start();

$prev = "liczbowy-formularz.php";

if (!isset($_SESSION['login'])) {
    header("location: login.php?previous=$prev");
}
?>

<!DOCTYPE HTML>
<html lang="pl">

<head>
    <meta charset="utf-8" />
    <title>Formularz kontaktowy</title>
    <meta name="description" content="Największy katalog gitarowy na świecie. Mayones, Yamaha, Epiphone, Ibanez i wiele wiele innch." />
    <meta name="keywords" content="gitara,gitary,yamaha,katalog,mayones" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="stylesheet" href="styles.css" type="text/css" />

</head>

<body>

    <div id="container-form">
        <div id="header">
            <table class="t1">
                <tr>
                    <td class="d1">
                        <a href="index.html"><img height="100" width="100" src="./img/logo.png" alt="Powrót do strony głównej" /></a>
                    </td>
                    <td class="d2">

                        <h1>Skontaktuj się z nami!</h1>

                    <td class="d3">
                        <?php
                        echo '<p style="color: white;font-size: 40px;">' . $_SESSION['login'] . '</p>';
                        ?>
                    </td>
                </tr>
            </table>
        </div>
        <div id="main-row">
            <div id="mr-left" class="xxx">
                <h2>Kategorie</h2>
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
            </div>
            <div id="mr-center" class="xxx">
                <p>Oblicz cenę gitary</p>
                <form method="post" action="num-form.php" autocomplete="on">
                    <p><label>Cena:
                            <input name="cost" type="text" size="33" autofocus>
                        </label></p>
                    <p><label>Rabat:
                            <input name="discount" type="text" size="33">
                        </label></p>

                    <p><label>ilość rat(w %):
                            <input name="installments" type="text" size="33">
                        </label></p>

                    <p>
                        <input type="submit" name="submit">
                        <!--<p id="submit-p">Wyślij</p>-->
                        </input>
                        <button type="reset">
                            <!--<p id="reset-p">Wyczyść</p>-->
                            Wyczyść
                        </button>
                    </p>
                </form>

            </div>
            <div id="mr-right" class="xxx">

                <form method="POST" action=''>
                    <input type="submit" name="reset-session">
                </form>
                <?php
                if (isset($_POST['reset-session'])) {
                    session_unset();

                    session_destroy();

                    header("Refresh:0");
                }
                ?>

                <?php
                echo '<p>Id sesji: '.$_COOKIE["sessionIdC"].'</p>';
                ?>

            </div>
        </div>
        <footer>
            <table class="t1">
                <tr>
                    <td class="d1">
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
                        <a href="mailto:kataloggitarowy@katag.com">Skontaktuj się z nami mailowo</a>
                </tr>
            </table>
        </footer>

    </div>

</body>

</html>