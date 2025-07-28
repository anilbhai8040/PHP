<?php

$arr1 = array(
             array(1, 2, 3),
             array(3, 4, 5),
             array(5, 6, 7));

$arr2 = array(
             array(1, 2, 3),
             array(3, 4, 5),
             array(5, 6, 7));

    echo "---Array 1---<br><br>";
    for($i=0; $i<count($arr1); $i++){
        for($j=0; $j<count($arr1[$i]); $j++){
            echo $arr1[$i][$j]." ";
        }
        echo "<br>";
    }

    echo "---Array 2---<br><br>";
    for($i=0; $i<count($arr2); $i++){
        for($j=0; $j<count($arr2[$i]); $j++){
            echo $arr2[$i][$j]." ";
        }
        echo "<br>";
    }

    echo "---Sum of Array1 and Array2---<br><br>";
    for($i=0; $i<count($arr1); $i++){
        for($j=0; $j<count($arr1[$i]); $j++){
            echo ($arr1[$i][$j]+$arr2[$i][$j])." ";
        }
        echo "<br>";
    }
?>