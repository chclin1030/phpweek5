<?php

session_start();
session_destroy();
setcookie("iID",$iID,time()-36); //通常不會這樣寫
header('Location: login.php');

?>
