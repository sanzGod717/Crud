<?php
try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=test', 'root', 'root');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'Erro ao conectar com o banco de dados: ' . $e->getMessage();
}
?>