<?php

session_start();

echo "Dashboard <br>";
    echo "Hi, ".($_SESSION["username"] ?? "guest");

session_destroy();
