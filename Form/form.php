<!DOCTYPE html>
<html lang="en">
    <head>
</head>
    <body>
        <?php
        $ad = $_POST['ad'];
        $soyad = $_POST['soyad'];
        $email = $_POST['email'];

        echo "<p>Adiniz: $ad</p>";
        echo "<p>Soyad: $soyad</p>";
        echo "<p>Email: $email</p>";
        ?>
</body>
</html>