<?php
$listaStylow = array();

// lista stylów
$listaStylow[0]["text"]='Domyślny';
$listaStylow[0]["sheet"]='<link href="styles.css" rel="stylesheet" type="text/css" />';

$listaStylow[1]["text"]='Czarno-Biały';
$listaStylow[1]["sheet"]='<link href="styles22.css" rel="stylesheet" type="text/css" />';

// styl domyślny
$defaultStyleSheet=0;

// ustaw styl
if(!isset($_COOKIE["STYLE"])){
echo $listaStylow[$defaultStyleSheet]["sheet"];
}
 else {
echo $listaStylow[$_COOKIE["STYLE"]]["sheet"];
}

echo $_COOKIE["STYLE"];
print_r($_COOKIE);
?>