<?php
$x = [
    ['*', '.', '.', '.', '*'],
    ['.', '*', '.', '*', '.'],
    ['.', '.', '*', '.', '.'],
    ['.', '*', '.', '*', '.'],
    ['*', '.', '.', '.', '*']
];

foreach ($x as $linha) {
    foreach ($linha as $coluna) {
        echo $coluna;
    }
    echo "\n";
}
?>