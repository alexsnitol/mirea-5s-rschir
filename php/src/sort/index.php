<!DOCTYPE html>
<html>
<body>

<?php

if (!array_key_exists("array", $_GET)) {
    echo "Enter array as words split commas in GET parameter with name 'array'";
    exit();
}

$array = explode(",", $_GET["array"]);

include "sort.php";

$array = insertion_Sort($array);

foreach ($array as $item) {
    echo "$item</br>";
}

?>

</body>
</html>