<?php
echo "<h2>PHP Datatypes</h2>";

$stringVar = "Hello PHP";
$intVar = 100;
$floatVar = 10.5;
$boolVar = true;
$arrayVar = array("HTML", "CSS", "PHP");

echo "String: $stringVar <br>";
echo "Integer: $intVar <br>";
echo "Float: $floatVar <br>";
echo "Boolean: " . ($boolVar ? "True" : "False") . "<br>";
echo "Array: ";
print_r($arrayVar);

echo "<hr><h2>Variable Scope</h2>";

function localScope() {
    $localVar = "I am Local";
    echo "Local Scope: $localVar <br>";
}
localScope();


$globalVar = "I am Global";

function globalScope() {
    global $globalVar;
    echo "Global Scope: $globalVar <br>";
}
globalScope();

function staticScope() {
    static $count = 0;
    $count++;
    echo "Static Count: $count <br>";
}

staticScope();
staticScope();
staticScope();
staticScope();
?>