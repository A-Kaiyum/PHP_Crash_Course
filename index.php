<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
// what is a variable
// variable is a container which is store values
// Declare variable
$name = 'mac';
$age = 28;
$isMale = true;
$height = 1.85;
$salary = null;

// Print the variable
echo $name.'<br>';
echo $age.'<br>';
echo $isMale.'<br>';
echo $height.'<br>';
echo $salary.'<br>';
//Print the whole variable
var_dump($name,$age,$isMale,$height,$salary);
// change the value of variable
$name = false;
// Print type of variable
echo gettype($name);
// Variable checking function
is_string($name);
is_int($age);
//checking variable is define
isset($name);
isset($address);
// Define constant
define('PI',3.1416);
echo PI;
// Using PHP Built in function
echo SORT_ASC;
echo PHP_INT_MAX;
?>
</body>
</html>
