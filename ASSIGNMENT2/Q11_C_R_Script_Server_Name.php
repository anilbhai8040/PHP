<?php

// ❖ $_SERVER Superglobal - Server & Execution Environment Information

// 1. PHP_SELF
echo "<h2>1. \$_SERVER['PHP_SELF']</h2>";
echo "❖ Returns the filename of the currently executing script.<br>";
echo "\$_SERVER['PHP_SELF'] => " . $_SERVER['PHP_SELF'] . "<br>";

// 2. SERVER_NAME
echo "<h2>2. \$_SERVER['SERVER_NAME']</h2>";
echo "❖ Returns the name of the server host.<br>";
echo "\$_SERVER['SERVER_NAME'] => " . $_SERVER['SERVER_NAME'] . "<br>";

// 3. SERVER_ADDR
echo "<h2>3. \$_SERVER['SERVER_ADDR']</h2>";
echo "❖ Returns the IP address of the server.<br>";
echo "\$_SERVER['SERVER_ADDR'] => " . $_SERVER['SERVER_ADDR'] . "<br>";

// 4. SERVER_PORT
echo "<h2>4. \$_SERVER['SERVER_PORT']</h2>";
echo "❖ Returns the port number used by the server for communication.<br>";
echo "\$_SERVER['SERVER_PORT'] => " . $_SERVER['SERVER_PORT'] . "<br>";

// 5. REQUEST_METHOD
echo "<h2>5. \$_SERVER['REQUEST_METHOD']</h2>";
echo "❖ Returns the request method used to access the page (GET, POST, etc.).<br>";
echo "\$_SERVER['REQUEST_METHOD'] => " . $_SERVER['REQUEST_METHOD'] . "<br>";

// 6. REQUEST_URI
echo "<h2>6. \$_SERVER['REQUEST_URI']</h2>";
echo "❖ Returns the URI that was given to access the page.<br>";
echo "\$_SERVER['REQUEST_URI'] => " . $_SERVER['REQUEST_URI'] . "<br>";

// 7. QUERY_STRING
echo "<h2>7. \$_SERVER['QUERY_STRING']</h2>";
echo "❖ Returns the query string if it exists.<br>";
echo "\$_SERVER['QUERY_STRING'] => " . $_SERVER['QUERY_STRING'] . "<br>";

// 8. HTTP_HOST
echo "<h2>8. \$_SERVER['HTTP_HOST']</h2>";
echo "❖ Returns the Host header from the request.<br>";
echo "\$_SERVER['HTTP_HOST'] => " . $_SERVER['HTTP_HOST'] . "<br>";

// 9. HTTP_USER_AGENT
echo "<h2>9. \$_SERVER['HTTP_USER_AGENT']</h2>";
echo "❖ Returns the browser and system information of the user.<br>";
echo "\$_SERVER['HTTP_USER_AGENT'] => " . $_SERVER['HTTP_USER_AGENT'] . "<br>";

// 10. SCRIPT_NAME
echo "<h2>10. \$_SERVER['SCRIPT_NAME']</h2>";
echo "❖ Returns the path of the current script.<br>";
echo "\$_SERVER['SCRIPT_NAME'] => " . $_SERVER['SCRIPT_NAME'] . "<br>";

// 11. DOCUMENT_ROOT
echo "<h2>11. \$_SERVER['DOCUMENT_ROOT']</h2>";
echo "❖ Returns the document root directory under which the script is executing.<br>";
echo "\$_SERVER['DOCUMENT_ROOT'] => " . $_SERVER['DOCUMENT_ROOT'] . "<br>";

// 12. REMOTE_ADDR
echo "<h2>12. \$_SERVER['REMOTE_ADDR']</h2>";
echo "❖ Returns the IP address of the user viewing the current page.<br>";
echo "\$_SERVER['REMOTE_ADDR'] => " . $_SERVER['REMOTE_ADDR'] . "<br>";

// 13. REMOTE_PORT
echo "<h2>13. \$_SERVER['REMOTE_PORT']</h2>";
echo "❖ Returns the port being used on the user's machine to communicate with the server.<br>";
echo "\$_SERVER['REMOTE_PORT'] => " . $_SERVER['REMOTE_PORT'] . "<br>";

// 14. SCRIPT_FILENAME
echo "<h2>14. \$_SERVER['SCRIPT_FILENAME']</h2>";
echo "❖ Returns the absolute path of the current script.<br>";
echo "\$_SERVER['SCRIPT_FILENAME'] => " . $_SERVER['SCRIPT_FILENAME'] . "<br>";

// 15. SERVER_PROTOCOL
echo "<h2>15. \$_SERVER['SERVER_PROTOCOL']</h2>";
echo "❖ Returns the name and version of the information protocol.<br>";
echo "\$_SERVER['SERVER_PROTOCOL'] => " . $_SERVER['SERVER_PROTOCOL'] . "<br>";

// 16. REQUEST_TIME
echo "<h2>16. \$_SERVER['REQUEST_TIME']</h2>";
echo "❖ Returns the timestamp of the start of the request.<br>";
echo "\$_SERVER['REQUEST_TIME'] => " . $_SERVER['REQUEST_TIME'] . "<br>";

?>
