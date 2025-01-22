<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database connection</title>
</head>
<body>
<?php

require("class.Database.php");
require("functions.php");

$dataBase = new Database("localhost", "3306", "laracast", "root");

echo '<h3>selectAll:</h3>';
printTable($dataBase->selectAll("users"));

echo '<h3>select:</h3>';
printTable($dataBase->select("firstname, lastname", "users"));

echo '<h3>alter:</h3>';
$dataBase->alter("users", "DROP COLUMN age");
$dataBase->alter("users", "ADD COLUMN age INT DEFAULT 0");
printTable($dataBase->selectAll("users"));

echo '<h3>update:</h3>';
$where = ['id' => '002'];
$dataBase->update("users", ['age' => 55], $where);
printTable($dataBase->select("firstname, lastname, age", "users", $where));

echo '<h3>delete:</h3>';
$dataBase->delete("users", '003');
printTable($dataBase->selectAll("users"));

?>

</body>
</html>



