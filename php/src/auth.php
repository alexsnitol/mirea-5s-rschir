<?php
session_start();

$username = $_POST["username"];
$password = $_POST["password"];

$mysqli = new mysqli("db", "user", "password", "appDB");
$result = $mysqli->query("SELECT * FROM users WHERE users.name = '".$username."' AND users.password = '".$password."'");

if (empty($result)) {
    $_SESSION["authenticated"] = false;

    echo "Incorrect username or password!";
} else {
    $_SESSION["authenticated"] = true;

    echo "Authorization is successful!";
}