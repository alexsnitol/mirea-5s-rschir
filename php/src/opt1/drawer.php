<?php

require '../auth_checker.php';

?>

<!DOCTYPE html>
<html>
<body>

<?php
include 'drawer_check_param.php';

$code = $_GET["num"]; // 001122222222223333333333

// 0 - number of figure
// 1 - number of color
// 2 - width
// 3 - height

// 01 01 0011001000 0110010000 -> 5448080

$number_of_figure = ($code & 12582912) >> 22;
$number_of_color =  ($code & 3145728) >> 20;
$width =            ($code & 1047552) >> 10;
$height =           ($code & 1023);

echo $number_of_figure.'-'.$number_of_color.'-'.$width.'-'.$height."</br>";

if ($number_of_color == 0) {
    $color = 'black';
} elseif ($number_of_color == 1) {
    $color = 'blue';
} elseif ($number_of_color == 2) {
    $color = 'green';
} elseif ($number_of_color == 3) {
    $color = 'red';
} else {
    $color = 'black';
}

if ($number_of_figure == 0) {?>

    <svg width='<?php echo $width ?>' height='<?php echo $height ?>'>
        <circle cx='50' cy='50' r='<?php echo $width ?>' fill='<?php echo $color ?>' />
    </svg>

<?php } elseif ($number_of_figure == 1) {?>

    <svg width='<?php echo $width ?>' height='<?php echo $height ?>'>
        <rect width='<?php echo $width ?>' height='<?php echo $height ?>' style='fill:<?php echo $color ?>;' />
    </svg>

<?php } elseif ($number_of_figure == 2) {?>

    <svg width='<?php echo $width ?>' height='<?php echo $height ?>'>
      <rect x='50' y='20' rx='20' ry='20' width='<?php echo $width ?>' height='<?php echo $height ?>' style='fill:<?php echo $color ?>;' />
    </svg>

<?php } else {
    echo "'num' most be from 0 to 2";
}

?>

</body>
</html>