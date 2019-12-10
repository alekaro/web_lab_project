<?php
// ustawiamy ciastko na jeden miesiąc
if(isset($_REQUEST["SETSTYLE"])){
if(setcookie("testcookie",true)){
setcookie("STYLE",$_REQUEST["SETSTYLE"],time()+60 * 60 * 24 * 30,"/");
}
}

// powrót do obecnej strony
header("Location: ".$_SERVER["HTTP_REFERER"]);

?>