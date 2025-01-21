<?php

$dsn = "mysql:host=localhost;port=3307;dbname=laracast;charset=utf8mb4";
$pdo = new PDO($dsn, 'root');

$id = $_GET['id'];

$statement = $pdo->query("select * from users where id = {$id}");
$result = $statement->fetchAll(PDO::FETCH_ASSOC);

$url = "http://localhost/sql-injection?id=1 OR 1=1";
$url2 = "http://localhost/sql-injection?id=1; drop table users";

//poprawnie:
$statement = $pdo->query("select * from users where id = :id");
$statement->execute([':id' => $id]);
$result = $statement->fetchAll(PDO::FETCH_ASSOC);