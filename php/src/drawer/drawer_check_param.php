<?php

if (!array_key_exists("num", $_GET)) {
    echo "Enter number of figure from 1 to 4 as GET parameter with name 'num'.";
    exit();
}
