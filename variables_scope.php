<?php 
echo "<h2>PHP Variables & Scopes </h2>";
$name="Rehana";
$age=20;
$height=5.4;
$isStudent=true;
$subjects=array("PHP","DBMS","CN");

echo "Name:$name <br>";
echo "Age:$age<br>";
echo "Height:$height<br>";
echo "Student:$isStudent<br>";
echo "Subjects:";
print_r($subjects);
echo "<br><br>";

function localScope(){
    $localVar="I am Local Variable";
    echo $localVar."<br>";
}
localScope();

$globalVar="I am Global Variable";
function globalScope(){
    global $globalVar;
    echo $globalVar."<br>";
}
globalScope();

function staticScope(){
    static $count=0;
    $count++;
    echo "Static count:$count <br>";
}

staticScope();
staticScope();
staticScope();
?>
