<?php
    require __DIR__ . '/vendor/autoload.php';
    //mysqlデータベースへの接続
    try {
        $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
        $dotenv->load();

        $dbHost = $_ENV['DB_HOST'];
        $dbUsername = $_ENV['DB_USERNAME'];
        $dbPassword = $_ENV['DB_PASSWORD'];
        $dbDatabase = $_ENV['DB_DATABASE'];

        $dsn = "mysql:host={$dbHost};dbname={$dbDatabase};charset=utf8";

        $db = new PDO( $dsn, $dbUsername, $dbPassword );
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $Exception) {
        die('DB接続エラー: ' . $Exception->getMessage());
    }
    return $db;
