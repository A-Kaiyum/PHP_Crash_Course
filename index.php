<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP</title>
</head>
<body>
<?php
// Conditional statement
$age = 0;
$salary = 30000;
$name = 'Jhon';
// ternary operator
echo $age < 30 ? 'Young': 'Old';
//short ternary

$myAge = $age ?: 30;
var_dump($myAge);
// Null coalescing operator
 $myName = isset($name) ? $name : 'jak';
 var_dump($myName);
 $myName = $name ?? 'Jak';
 var_dump($myName);
 // switch operator
$authorRole = 'Admin';
switch ($authorRole){
    case 'Admin':
        echo "I am Admin";
        break;
    case 'Editor':
        echo "Editor";
        break;
    case 'Author':
        echo "Author";
        break;
    default:
        echo "Invalid Credintial";
}
?>
</body>
</html>
