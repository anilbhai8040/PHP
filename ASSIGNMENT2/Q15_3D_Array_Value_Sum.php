<?php
$arr = array(
    array(
        array(1, 2),
        array(1, 2),
        array(3, 4)),

    array(
        array(1, 2),
        array(1, 2),
        array(3, 4)),

    array(
        array(1, 2),
        array(1, 2),
        array(3, 4)
    )
);

for ($i = 0; $i < count($arr); $i++) {
    for ($j = 0; $j < count($arr[$i]); $j++) {
        $arr2[$i][$j] = 0;
        for ($k = 0; $k < count($arr[$i][$j]); $k++) {
            echo $arr[$i][$j][$k]." ";
        }
        echo "<br>";
    }
    echo "<br>";
}
$depth = count($arr);       // Number of layers
$rows = count($arr[0]);     // Number of rows in each layer
$cols = count($arr[0][0]);  // Number of columns in each row

// Sum of array elements
$arr2 = array();
for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j < $cols; $j++) {
        $arr2[$i][$j] = 0;
        for ($k = 0; $k < $depth; $k++) {
            $arr2[$i][$j] += $arr[$k][$i][$j];
        }
    }
}

// Display result
for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j < $cols; $j++) {
        echo $arr2[$i][$j] . " ";
    }
    echo "<br>";
}
?>
