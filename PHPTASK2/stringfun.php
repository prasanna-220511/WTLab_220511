<?php
echo "<h2>String Functions</h2>";

$str = "  hello world from php  ";

echo "Length: " . strlen($str) . "<br>";
echo "Word Count: " . str_word_count($str) . "<br>";
echo "Reverse: " . strrev($str) . "<br>";

echo "Upper: " . strtoupper($str) . "<br>";
echo "Lower: " . strtolower($str) . "<br>";
echo "Ucfirst: " . ucfirst(trim($str)) . "<br>";
echo "Ucwords: " . ucwords(trim($str)) . "<br>";

echo "Position of 'world': " . strpos($str, "world") . "<br>";
echo "Replace: " . str_replace("world", "PHP", $str) . "<br>";

echo "Substring: " . substr($str, 2, 5) . "<br>";
echo "Trim: '" . trim($str) . "'<br>";
echo "LTrim: '" . ltrim($str) . "'<br>";
echo "RTrim: '" . rtrim($str) . "'<br>";

$str1 = "Hello";
$str2 = "hello";

echo "strcmp: " . strcmp($str1, $str2) . "<br>";
echo "strcasecmp: " . strcasecmp($str1, $str2) . "<br>";

echo "HTML Safe: " . htmlspecialchars("<h1>Hello</h1>") . "<br>";
echo "Add Slashes: " . addslashes("It's PHP") . "<br>";
?>