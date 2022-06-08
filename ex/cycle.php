<?php
//Цикл while
$i = 1;
while ($i <= 10) {
    echo $i++;
}

//Цикл for

for ($i = 1; $i <= 10; $i++) {
    echo $i;
}

//Цикл foreach
$arr = [1, 2, 3, 4];
foreach ($arr as $value) {
    $value = $value * 2;
}

