<center><?php
        session_start();
        if (!isset($_SESSION['id'])) {
            header('Location: login.php');
            exit();
        }


        ?>
    <br>
    <a href="kutubxona/index.html"><button style="border-radius: 15px; padding: 15px; color: red;">Go to main</button></a>
    <br>
    <!-- <a href="my_site/index.html">Anvariddin.uz</a> -->

    <br>
    <a href="index.html">LOGUOT</a>
</center>