<!DOCTYPE html>
<html>
<body>

<?php

include 'drawer_check_param.php';

$number_of_figure = $_GET["num"];

if ($number_of_figure == 1) {
    echo "
    <svg width='100' height='100'>
        <circle cx='50' cy='50' r='40' stroke='green' stroke-width='4' fill='yellow' />
    </svg>
    ";
} elseif ($number_of_figure == 2) {
    echo "
    <svg width='400' height='100'>
        <rect width='400' height='100' style='fill:rgb(0,0,255);stroke-width:10;stroke:rgb(0,0,0)' />
    </svg>
    ";
} elseif ($number_of_figure == 3) {
    echo "
    <svg width='400' height='180'>
      <rect x='50' y='20' rx='20' ry='20' width='150' height='150'
      style='fill:red;stroke:black;stroke-width:5;opacity:0.5' />
    </svg>    
    ";
} elseif ($number_of_figure == 4) {
    echo "
    <svg width='300' height='200'>
      <polygon points='100,10 40,198 190,78 10,78 160,198'
      style='fill:lime;stroke:purple;stroke-width:5;fill-rule:evenodd;' />
    </svg>
    ";
} else {
    echo "'num' most be from 1 to 4";
}

?>

</body>
</html>