<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Mozanapló</title>
    <link rel="stylesheet" href="../CSS/loginStudentStyleSheet.css?v=<?php echo time(); ?>"/>
</head>
<body>
    <div id="container">
        <div>
            <img src="../Pictures/logo.jpg" alt="Mozanapló logo">
        </div>
        <div id="heading">
            <h2>MOZANAPLÓ</h2>
        </div>
    </div>
    <br>
    <br>
    <div class="container">
        <label for="uname"><b>Felhasználónév</b></label>
        <input type="text" placeholder="Felhasználónév" name="uname" required>

        <label for="psw"><b>Jelszó</b></label>
        <input type="password" placeholder="Jelszó" name="psw" required>

        <button type="submit">Bejelentkezés</button>
        <label>
            <input type="checkbox" checked="checked" name="remember"> Emlékezz rám
        </label>
    </div>
</body>