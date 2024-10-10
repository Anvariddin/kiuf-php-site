<?php
// Ma'lumotlar bazasi uchun kerakli ma'lumotlar
$servername = "localhost";    // Server nomi
$username = "user1";           // MySQL foydalanuvchi nomi
$password = "12345";               // MySQL foydalanuvchi paroli
$dbname = "kiuf"; // Ma'lumotlar bazangiz nomi

// MySQL bilan ulanish
$conn = new mysqli($servername, $username, $password, $dbname);

// Ulanishni tekshirish
if ($conn->connect_error) {
    die("Ma'lumotlar bazasi bilan ulanishda xatolik: " . $conn->connect_error);
}

// Jadvaldan ma'lumotlarni olish uchun SQL so'rov
$sql = "SELECT id, username, password FROM users"; // users jadvalidan ma'lumotlarni olish
$result = $conn->query($sql);

// Ma'lumotlar mavjudligini tekshirish va ularni chiqarish
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Foydalanuvchi nomi: " . $row["username"] . " - Parol: " . $row["password"] . "<br>";
    }
} else {
    echo "Jadval bo'sh!";
}

// Ulanishni yopish
$conn->close();
