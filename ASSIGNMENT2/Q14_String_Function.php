<?php 
$name1 = "Apple";
$name2 = "Banana";
$name3 = "banana is Banana Apple";
$name4 = "Mango";
$name5 = "is";
$name6 = "Apple";
$name7 = "****";
$count = 0;

$no1 = 65;

// ❖ print() Function
echo "<h2>1. print()</h2>";
echo "❖ Display message on screen...<br>";
print "<b>Ex:</b> print(".$name3.") => ".$name3."<br>";

// ❖ chr() Function
echo "<h2>2. chr()</h2>";
echo "❖ Returns character from ASCII code...<br>";
echo "chr(".$no1.") => ".chr($no1)."<br>";

// ❖ echo() Function
echo "<h2>3. echo()</h2>";
echo "❖ Display message on screen...<br>";
echo "echo(".$name3.") => ".$name3."<br>";

// ❖ strlen() Function
echo "<h2>4. strlen()</h2>";
echo "❖ Returns length of the string...<br>";
echo "strlen(".$name3.") => ".strlen($name3)."<br>";

// ❖ str_word_count() Function
echo "<h2>5. str_word_count()</h2>";
echo "❖ Returns number of words in the string...<br>";
echo "str_word_count(".$name3.") => ".str_word_count($name3)."<br>";

// ❖ strrev() Function
echo "<h2>6. strrev()</h2>";
echo "❖ Returns reverse of the string...<br>";
echo "strrev(".$name3.") => ".strrev($name3)."<br>";

// ❖ strpos() Function
echo "<h2>7. strpos()</h2>";
echo "❖ Returns index of first occurrence of substring...<br>";
echo "strpos(".$name3.", ".$name1.") => ".strpos($name3, $name1)."<br>";

// ❖ str_replace() Function
echo "<h2>8. str_replace()</h2>";
echo "❖ Replaces all occurrences of search string with replacement...<br>";
echo "str_replace(".$name1.", ".$name4.", ".$name3.") => ".str_replace($name1, $name4, $name3, $count)."<br>";
echo "Total replacements = ".$count."<br>";

// ❖ ltrim() Function
echo "<h2>9. ltrim()</h2>";
echo "❖ Removes characters from beginning of the string...<br>";
echo "ltrim(".$name3.", ".$name5.") => ".ltrim($name3, $name5)."<br>";

// ❖ rtrim() Function
echo "<h2>10. rtrim()</h2>";
echo "❖ Removes characters from end of the string...<br>";
echo "rtrim(".$name3.", ".$name1.") => ".rtrim($name3, $name1)."<br>";

// ❖ trim() Function
echo "<h2>11. trim()</h2>";
echo "❖ Removes characters from both ends of the string...<br>";
echo "trim(".$name3.", ".$name5.$name1.") => ".trim($name3, $name5.$name1)."<br>";

// ❖ strcmp() Function
echo "<h2>12. strcmp()</h2>";
echo "❖ Compares two strings (case-sensitive). Returns 0 if equal...<br>";
echo "strcmp(".$name1.", ".$name6.") => ".strcmp($name1, $name6)."<br>";

// ❖ substr_replace() Function
echo "<h2>13. substr_replace()</h2>";
echo "❖ Replaces part of a string starting at a given index...<br>";
echo "substr_replace(".$name3.", ".$name7.", 3, 4) => ".substr_replace($name3, $name7, 3, 4)."<br>";

// ❖ stristr() Function
echo "<h2>14. stristr()</h2>";
echo "❖ Case-insensitive search for substring...<br>";
echo "stristr(".$name3.", ".$name2.") => ".stristr($name3, $name2)."<br>";
echo "stristr(".$name3.", ".$name2.", true) => ".stristr($name3, $name2, true)."<br>";

// ❖ strstr() Function
echo "<h2>15. strstr()</h2>";
echo "❖ Case-sensitive search for substring...<br>";
echo "strstr(".$name3.", ".$name2.") => ".strstr($name3, $name2)."<br>";
echo "strstr(".$name3.", ".$name2.", true) => ".strstr($name3, $name2, true)."<br>";

// ❖ substr() Function
echo "<h2>16. substr()</h2>";
echo "❖ Extracts portion of string...<br>";
echo "substr(".$name3.", 3) => ".substr($name3, 3)."<br>";
echo "substr(".$name3.", 3, 7) => ".substr($name3, 3, 7)."<br>";
echo "substr(".$name3.", -3) => ".substr($name3, -3)."<br>";
echo "substr(".$name3.", 0, -8) => ".substr($name3, 0, -8)."<br>";

// ❖ ucwords() Function
echo "<h2>17. ucwords()</h2>";
echo "❖ Converts first character of each word to uppercase...<br>";
echo "ucwords(".$name3.") => ".ucwords($name3)."<br>";

// ❖ ucfirst() Function
echo "<h2>18. ucfirst()</h2>";
echo "❖ Converts first character of string to uppercase...<br>";
echo "ucfirst(".$name3.") => ".ucfirst($name3)."<br>";

// ❖ strtoupper() Function
echo "<h2>19. strtoupper()</h2>";
echo "❖ Converts entire string to uppercase...<br>";
echo "strtoupper(".$name3.") => ".strtoupper($name3)."<br>";

// ❖ strtolower() Function
echo "<h2>20. strtolower()</h2>";
echo "❖ Converts entire string to lowercase...<br>";
echo "strtolower(".$name3.") => ".strtolower($name3)."<br>";

// ❖ lcfirst() Function
echo "<h2>21. lcfirst()</h2>";
echo "❖ Converts first character to lowercase...<br>";
echo "lcfirst(".$name1.") => ".lcfirst($name1)."<br>";

?>
