<?php

$username = "root";
$password = "";

try {
    if (empty($_GET['id'])) throw new Exception('ID不正');
    $id = (int) $_GET['id'];
   
    $database = new PDO('mysql:host=localhost;databasename=recipelist;charset=utf8', $username, $password);
    $database->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM recipes WHERE id = ?";
    $statement = $database->prepare($sql);
    $statement->bindValue(1, $id, PDO::PARAM_INT);
    $statement->evecute();
    $result = $statement->fetch(PDO::FETCH_ASSOC);
    print_r($result);
    $database = null;
}

catch (Exception $e) {
    echo "エラー発生: " . htmlspecialcharts($e->getMessage(), ENT_QUOTES, 'UTF-8') . "<br>";
    die();
}

?>