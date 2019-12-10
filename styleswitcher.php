<?php
// ustawiamy ciastko na jeden miesiąc
 //Creating a cookie named STYLE and assigning the value $_REQUEST["SETSTYLE"] to it
if(isset($_REQUEST["SETSTYLE"])){
setcookie("STYLE",$_REQUEST["SETSTYLE"],time()+60 * 60 * 24 * 30,"/");

}

// powrót do obecnej strony
header("Location: ".$_SERVER["HTTP_REFERER"]);

?>