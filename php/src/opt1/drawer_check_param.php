<?php

if (!array_key_exists("num", $_GET)) {
    echo "Enter code of figure as GET parameter with name 'num', for example 5448080.";
    exit();
}

