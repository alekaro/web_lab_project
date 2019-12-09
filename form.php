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

                        <h1>Dziękujemy za wypełnienie formularza!</h1>

                    <td class="d3">
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
                <?php
                $months = array(
                    "styczeń" => 1,
                    "luty" => 2,
                    "marzec" => 3,
                    "kwiecień" => 4,
                    "maj" => 5,
                    "czerwiec" => 6,
                    "lipiec" => 7,
                    "sierpień" => 8,
                    "wrzesień" => 9,
                    "październik" => 10,
                    "listopad" => 11,
                    "grudzień" => 12
                );

                if ( isset( $_POST['submit'] ) ) {
                    $firstname = $_POST['firstname'];
                    $surname = $_POST['surname'];
                    $email = $_POST['email'];
                    
                    if (preg_match( "/^[0-9]{3} [0-9]{3} [0-9]{3}$/",$_POST["phone"]))                                  
                    {
                        $_POST['phone'] = preg_replace("/ /", "", $_POST['phone']);
                        echo '<p>'.$_POST['phone'].'</p>';
                    }
                    else if (!preg_match( "/^[0-9]{3} [0-9]{3} [0-9]{3}$/",$_POST["phone"]))                                  
                    {
                       echo '<p> Proszę podaj swój numer telefonu w prawidłowym formacie.</p>';
                       echo '<p> np. 123 123 123 </p>';
                       die();
                    }
                    
                    $phone = $_POST['phone'];
                    echo '<p>'.$_POST['phone'].'</p>';
                    $city = $_POST['city'];
                    $bmonth = $_POST['bmonth'];
                    $region = $_POST['region'];
                    $message = $_POST['message'];
                    
                    $words = preg_split("/[\s,]+/", $message);
                    $words2 = "";

                    foreach($words as $word){
                        $words2 = $words2.$word." \n";
                    }

                    echo '<p> words2 = '.nl2br($words2).'</p>';
                    echo '<p> Twoja wiadomość posiada - '.count($words).' wyrazów. </p>';

                    if($_POST['bmnumber'] == 'yes'){    #mozna rowniez if(strcasecmp($_POST['bmnumber'], 'yes') == 0) wtedy nie bierze pod uwage wielkosci liter
                        $bmonth = $months[$bmonth];
                    }

                    echo<<<END
                        <h2>Witaj $firstname!</h2>
                        <p>Twój miesiąc urodzin to $bmonth.</p>
                    END;
                }
                ?>

            </div>
            <div id="mr-right" class="xxx">

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