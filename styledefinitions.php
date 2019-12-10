<?php
$styleSheets = array();

// DEFINE STYLESHEETS
$styleSheets[0]["text"]='Domyślny';
$styleSheets[0]["title"]='wybrany motyw domyślny';
$styleSheets[0]["sheet"]='<link href="styles.css" rel="stylesheet" type="text/css" />';

$styleSheets[1]["text"]='Czarno-Biały';
$styleSheets[1]["title"]='wybrany motyw czarno-biały';
$styleSheets[1]["sheet"]='<link href="styles22.css" rel="stylesheet" type="text/css" />';

// DEFAULT STYLESHEET
$defaultStyleSheet=0;

// SET STYLESHEET
if(!isset($_COOKIE["STYLE"])){
if(isset($_SESSION["STYLE"])){
echo $styleSheets[$_SESSION["STYLE"]]["sheet"];
} else {
echo $styleSheets[$defaultStyleSheet]["sheet"];
}
} else {
echo $styleSheets[$_COOKIE["STYLE"]]["sheet"];
}
?>