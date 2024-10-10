<?php
// Sessiyani boshlash
session_start();

// Sessiyaga ma'lumot yozish
$_SESSION['username'] = "Anvariddin";
$_SESSION['loggedin'] = true;

// Sessiyadan ma'lumot o'qish
echo "Foydalanuvchi nomi: " . $_SESSION['username'] . "<br>";
echo "Tizimga kirganmi? " . ($_SESSION['loggedin'] ? "Ha" : "Yo'q");

// Sessiyani tugatish (ixtiyoriy, agar kerak bo'lsa)
session_destroy();
