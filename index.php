<?php

session_start();

$_SESSION["username"] = "la";
$_SESSION["age"] = 25;

if (isset($_SESSION["username"])){
    echo "Hi, ".$_SESSION["username"];
} else {
    echo "Hi, guest";
}

session_destroy();

?>