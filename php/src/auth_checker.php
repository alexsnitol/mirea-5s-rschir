<?php
session_start();

if (!array_key_exists("authenticated", $_SESSION) || !$_SESSION["authenticated"]) {
    echo "Access denied! Please authority in system!";
    exit();
}
