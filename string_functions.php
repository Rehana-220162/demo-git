<?php
echo "<h2>PHP String Functions</h2>";

$str = "  welcome to php lab  ";

echo "Original String: '$str'<br><br>";

echo "Length: " . strlen($str) . "<br>";
echo "Word Count: " . str_word_count($str) . "<br>";
echo "Reverse: " . strrev($str) . "<br><br>";

echo "Uppercase: " . strtoupper($str) . "<br>";
echo "Lowercase: " . strtolower($str) . "<br>";
echo "Ucfirst: " . ucfirst(trim($str)) . "<br>";
echo "Ucwords: " . ucwords(trim($str)) . "<br><br>";


echo "Position of php: " . strpos($str, "php") . "<br>";
echo "Replace php with PHP: " . str_replace("php", "PHP", $str) . "<br><br>";

echo "Substring: " . substr($str, 0, 10) . "<br>";
echo "Trim: '" . trim($str) . "'<br>";
echo "Ltrim: '" . ltrim($str) . "'<br>";
echo "Rtrim: '" . rtrim($str) . "'<br><br>";

echo "strcmp(PHP, php): " . strcmp("PHP", "php") . "<br>";
echo "strcasecmp(PHP, php): " . strcasecmp("PHP", "php") . "<br><br>";

$special = "<script>alert('Hi')</script>";
echo "htmlspecialchars: " . htmlspecialchars($special) . "<br>";

$text = "Rehana's Book";
echo "addslashes: " . addslashes($text) . "<br>";
?>

