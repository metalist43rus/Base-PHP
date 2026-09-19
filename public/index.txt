<?php

 $host = 'mysql-8.4';
 $port = 3306;
 $database = 'todo_app';
 $username = 'root';
 $password = '';

 $text = 'Моя первая задача';

 try {
    $pdo = new PDO(
        "mysql:host=$host;port=$port;dbname=$database;charset=utf8mb4",
        $username,
        $password,
        [
            PDO::ATTR_ERRMODE             =>PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE  =>PDO::FETCH_ASSOC,
        ]
    );


    $stmt = $pdo ->prepare("INSERT INTO tasks (text) VALUES (:text)");
    $stmt -> execute([':text' => $text]);

    $id = $pdo->lastInsertId();

    echo "Задача успешно создана. ID: $id"  .  PHP_EOL;

 } catch (PDOException $e) {
    echo "Ошибка подключения или запроса: "  . $e->getMessage(). PHP_EOL;
    exit(1);
 }