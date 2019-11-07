<?php

// DBに接続
$host = "localhost";
$dbname = "contact_form";
$charset ="utf8mb4";
$user = 'root';
$password = '';
          // 変数５つ

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

    // DBを使うときはPDOを利用する。
    // 上の最後の行がSOL-injectionから守るためのmの。


//DBへの接続設定
$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
try {
    //DBへ接続
    $dbh = new PDO($dsn, $user, $password, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}


