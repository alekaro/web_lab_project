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
                for($i = 0; $i < 100 ; $i++){
                    $guitars_available[$i] = rand(100000, 200000)/100;
                }

                if ( isset( $_POST['submit'] ) ) {
                    $cost = $_POST['cost'];
                    $discount = $_POST['discount'];
                    $installments = $_POST['installments'];
                    $logicvar = "";
                    $logicvar2 = "";
                    $magazine_worth = "";
                    $port = $_SERVER['REMOTE_ADDR'];
                    
                    if($discount!=""){
                        $after_discount = $cost - $cost*$discount/100;
                    }else{
                        $after_discount = $cost;
                    }

                    for(reset($guitars_available); $elem = key($guitars_available); next($guitars_available)){
                        $magazine_worth += $guitars_available[$elem];
                        echo $magazine_worth;
                    }
                    settype($magazine_worth, "integer");

                    $installment = $after_discount/$installments;
                    $installment = (int)$installment+=1;

                    if(True || True && False){
                        $logicvar = "True";
                    }else{
                        $logicvar = "False";
                    }

                    if((True || True) && False){
                        $logicvar2 = "True";
                    }else{
                        $logicvar2 = "False";
                    }

                    echo<<<END
                        <table>
                        <tr>
                            <td>
                                Cena:
                            </td>
                            <td>
                                $cost zł
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Po zniżce:
                            </td>
                            <td>
                                $after_discount zł
                            </td>
                        </tr>
                        <tr>
                            <td>
                                w jednej racie:
                            </td>
                            <td>
                                $installment zł
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Łączna wartość wszystkich gitar na magazynie:
                            </td>
                            <td>
                                $magazine_worth zł
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Dodatek, jaki będzie wynik?:
                            </td>
                            <td>
                                True || True && False
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Wynik:
                            </td>
                            <td>
                                $logicvar
                            </td>
                        </tr>
                        <tr>
                            <td>
                                alternatywnie?:
                            </td>
                            <td>
                                (True || True) && False
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Wynik:
                            </td>
                            <td>
                                $logicvar2
                            </td>
                        </tr>
                        <tr>
                            <td>
                                user ip:
                            </td>
                            <td>
                                $port
                            </td>
                        </tr>
                        </table>
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