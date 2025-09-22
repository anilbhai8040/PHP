<?php 
    // Index array
    $arr = array(10,12,11,9,7,23);

    echo "Original Index Array : ".implode(" ",$arr);

    sort($arr);
    echo "<br><br>Ascending Order : ".implode(" ",$arr);

    rsort($arr);
    echo "<br><br>Descending Order : ".implode(" ",$arr);

    // Associative array
    $arr1 = array("Anil" => 10, "Kalpesh" => 12, "Dhruv" => 11, "Darshan" => 18);

    echo "<br><br>Original Associative Array : ";
    foreach ($arr1 as $key => $value) {
        echo "$key => $value ";
    }

    // Sort in ascending order by value (preserving keys)
    asort($arr1);
    echo "<br><br>Ascending Order (by value) : ";
    foreach ($arr1 as $key => $value) {
        echo "$key => $value ";
    }

    // Sort in descending order by value (preserving keys)
    arsort($arr1);
    echo "<br><br>Descending Order (by value) : ";
    foreach ($arr1 as $key => $value) {
        echo "$key => $value ";
    }
?>