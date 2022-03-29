<?php
    session_start();
    session_unset();
    setcookie(session_name() , "" , time() - 500000 , "/");
    session_destroy();
    header("Location: ../Views/HTML/belepesmint.php");
    exit;
