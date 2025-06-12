<?php

$v1 = range(0, 12);
$v2 = range(0, 100, 10);
$v3 = range("a", "i");
$v4 = range("e", "a");

foreach ($v1 as $var) {
    echo "$var<br>";
}  

foreach ($v2 as $var) {
    echo "$var<br>";
}

foreach ($v3 as $var) {
    echo "$var<br>";
}

foreach ($v4 as $var) {
    echo "$var<br>";
}

?>