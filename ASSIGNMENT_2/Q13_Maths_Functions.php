<?php
$arr = array(10, 18, 8, 17, 4, 23);

$no1 = 9;
$no2 = -8;
$no3 = 3.4;
$no4 = -0.4;
$no5 = 4;

// ❖ abs() Function
echo "<h2>1. abs()</h2>";
echo "❖ Returns absolute (positive) value...<br>";
echo "abs(".$no1.") => ".abs($no1)."<br>";
echo "abs(".$no2.") => ".abs($no2)."<br>";
echo "abs(".$no3.") => ".abs($no3)."<br>";
echo "abs(".$no4.") => ".abs($no4)."<br>";

// ❖ ceil() Function
echo "<h2>2. ceil()</h2>";
echo "❖ Returns the nearest integer greater than or equal to the number...<br>";
echo "ceil(".$no1.") => ".ceil($no1)."<br>";
echo "ceil(".$no2.") => ".ceil($no2)."<br>";
echo "ceil(".$no3.") => ".ceil($no3)."<br>";
echo "ceil(".$no4.") => ".ceil($no4)."<br>";

// ❖ floor() Function
echo "<h2>3. floor()</h2>";
echo "❖ Returns the nearest integer less than or equal to the number...<br>";
echo "floor(".$no1.") => ".floor($no1)."<br>";
echo "floor(".$no2.") => ".floor($no2)."<br>";
echo "floor(".$no3.") => ".floor($no3)."<br>";
echo "floor(".$no4.") => ".floor($no4)."<br>";

// ❖ sqrt() Function
echo "<h2>4. sqrt()</h2>";
echo "❖ Returns the square root of a number...<br>";
echo "sqrt(".$no1.") => ".sqrt($no1)."<br>";
echo "sqrt(".$no2.") => ".sqrt($no2)."<br>"; // May return NaN
echo "sqrt(".$no3.") => ".sqrt($no3)."<br>";
echo "sqrt(".$no5.") => ".sqrt($no5)."<br>";

// ❖ log() Function
echo "<h2>5. log()</h2>";
echo "❖ Returns the natural logarithm (base e) of a number...<br>";
echo "log(".$no1.") => ".log($no1)."<br>";
echo "log(".$no2.") => ".log($no2)."<br>"; // May return NaN
echo "log(".$no3.") => ".log($no3)."<br>";
echo "log(".$no5.") => ".log($no5)."<br>";

// ❖ pow() Function
echo "<h2>6. pow()</h2>";
echo "❖ Returns x raised to the power of y...<br>";
echo "pow(".$no1."<sup>".$no5."</sup>) => ".pow($no1, $no5)."<br>";
echo "pow(".$no2."<sup>".$no5."</sup>) => ".pow($no2, $no5)."<br>";
echo "pow(".$no3."<sup>".$no5."</sup>) => ".pow($no3, $no5)."<br>";
echo "pow(".$no4."<sup>".$no4."</sup>) => ".pow($no4, $no5)."<br>";

// ❖ max() Function
echo "<h2>7. max()</h2>";
echo "❖ Returns the largest value in an array or list...<br>";
echo "max(".implode(" , ", $arr).") => ".max($arr)."<br>";

// ❖ min() Function
echo "<h2>8. min()</h2>";
echo "❖ Returns the smallest value in an array or list...<br>";
echo "min(".implode(" , ", $arr).") => ".min($arr)."<br>";
?>
