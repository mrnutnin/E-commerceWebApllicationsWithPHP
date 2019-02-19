<?php
try {
$pdo = new PDO("mysql:host=localhost;dbname=photostore;charset=utf8", "root", "");
} catch (PDOException $e) {
echo "เกดิขอ้ผดิพลาด : " . $e->getMessage();
}
?>