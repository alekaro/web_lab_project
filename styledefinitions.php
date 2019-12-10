<?php
$styleSheets = array();

// lista stylów
$styleSheets[0]["text"]='Domyślny';
$styleSheets[0]["sheet"]='<link href="styles.css" rel="stylesheet" type="text/css" />';

$styleSheets[1]["text"]='Czarno-Biały';
$styleSheets[1]["sheet"]='<link href="styles22.css" rel="stylesheet" type="text/css" />';

// styl domyślny
$defaultStyleSheet=0;

// ustaw styl
if(!isset($_COOKIE["STYLE"])){
echo $styleSheets[$defaultStyleSheet]["sheet"];
}
 else {
echo $styleSheets[$_COOKIE["STYLE"]]["sheet"];
}
?>