<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    $a="apple";
    $color="red";

    echo  "$a";
    ECHO "Hello World!<br>";
echo "Hello World!<br>";
EcHo "Hello World!<br>";
echo "my favourite color is .$color.";
    echo "nilam Surve $a";
    $x=10;
    $y=5;
    echo $x;
    echo "the value of variable is " .$x. "and addtion is" .$y;
    echo $x + $y;
   
$u= 5; // global scope

function myTest() {
  echo "<p>Variable x inside function is: </p>" .$u;
}
myTest();

echo "<p>Variable x outside function is: $u</p>";
?>
<?php
$x = 5985;
var_dump($x);
?>
<?php
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
?>


</body>
</html>