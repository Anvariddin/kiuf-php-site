<?php
session_start();
$conn = new mysqli('localhost', 'user1', '12345', 'kiuf');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $password = $_POST['password'];

    // Foydalanuvchini bazadan qidirish
    $query = "SELECT username FROM users WHERE id='$id' AND password='$password'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // Foydalanuvchi topildi, asosiy sahifaga o'tish
        $_SESSION['id'] = $id;
        // <form action="main.php" method="post"></form>
        header('Location: main.php');
    } else {
        // Foydalanuvchi topilmadi, yangi foydalanuvchini qo'shish
        // $insert = "INSERT INTO users (id, password) VALUES ('$id', '$password')";
        // if ($conn->query($insert)) {
        //     $_SESSION['id'] = $id;
        //     header('Location: login.html');
        // } else {
            echo "Xatolik yuz berdi!";
            header('Location: login.html');

        // }
    }
}
?>

<!-- HTML form -->
<!-- <form method="post">
    id: <input type="text" name="id" required>
    Password: <input type="password" name="password" required>
    <button type="submit">Login</button>
</form> -->