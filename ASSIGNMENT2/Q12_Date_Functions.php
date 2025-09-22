<?php

// ❖ date() Function
echo "<h2>1. date()</h2>";
echo "❖ Returns formatted current date and time...<br>";
echo 'date("Y-m-d") => '.date("Y-m-d")."<br>";
echo 'date("Y-m-d H:i:s") => '.date("Y-m-d H:i:s")."<br>";
echo 'date("l, F j, Y") => '.date("l, F j, Y")."<br>";
echo 'date("h:i A") => '.date("h:i A")."<br>";

// ❖ time() Function
echo "<h2>2. time()</h2>";
echo "❖ Returns current Unix timestamp...<br>";
echo 'date("Y-m-d", time()) => '.date("Y-m-d", time())."<br>";
echo 'date("Y-m-d", strtotime("+1 day")) => '.date("Y-m-d", strtotime("+1 day"))."<br>";

// ❖ getdate() Function
echo "<h2>3. getdate()</h2>";
echo "❖ Returns date/time information as an associative array...<br>";
$date = getdate();
echo "getdate() => <br>";
foreach ($date as $key => $value) {
    echo "[".$key."] = ".$value." , ";
}
echo "<br>";

// ❖ gettimeofday() Function
echo "<h2>4. gettimeofday()</h2>";
echo "❖ Returns current time with microseconds...<br>";
$time = gettimeofday();
echo "gettimeofday() => <br>";
foreach ($time as $key => $value) {
    echo "[".$key."] = ".$value." , ";
}
echo "<br>";

// ❖ localtime() Function
echo "<h2>5. localtime()</h2>";
echo "❖ Returns an associative array of local time...<br>";
echo "localtime(time(), true) => <br>";
print_r(localtime(time(), true));
echo "<br>";

// ❖ checkdate() Function
echo "<h2>6. checkdate()</h2>";
echo "❖ Validates a Gregorian date (month, day, year)...<br>";
echo "checkdate(2, 29, 2024) => ";
if (checkdate(2, 29, 2024)) {
    echo "✅ Valid Date<br>";
} else {
    echo "❌ Invalid Date<br>";
}
?>
