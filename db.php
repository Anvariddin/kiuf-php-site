<?php
$host = 'localhost';  // Server nomi
$dbname = 'kiuf';  // Bazaning nomi
$username = 'user1';  // MySQL foydalanuvchi nomi
$password = '12345';  // MySQL paroli

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Bazaga ulanishda xatolik: " . $e->getMessage());
}
