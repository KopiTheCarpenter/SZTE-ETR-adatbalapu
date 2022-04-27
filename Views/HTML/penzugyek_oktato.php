<?php
    include_once "../../Controllers/penzugyController.php";
    $controller = new Penzugycontroller();
    error_reporting(E_ERROR | E_PARSE);
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Penzugy</title>
	<link rel="stylesheet" href="../CSS/lista.css">
	<link rel="stylesheet" href="../CSS/menu.css">
	<script src="https://kit.fontawesome.com/9808ff4ccd.js" crossorigin="anonymous"></script>

</head>
<body>
	<nav>
		<input type="checkbox" id="check">
		<label for="check" class="checkbtn">
			<i class="fa-solid fa-align-justify"></i>
		</label>
		<label class="logo"> MozaNapló </label>
		<ul>
			<li><a class="active" href="adataim_oktato.php">Adataim</a></li>
			<li><a class="active" href="forum_oktato.php">Fórum</a></li>
			<li><a class="active" href="diakok_oktato.php">Diákok</a></li>
			<li><a class="active" href="oktatok_oktato.php">Oktatók</a></li>
			<li><a class="active" href="jegyek_oktato.php">Jegyek</a></li>
			<li><a class="active" href="hianyzasok_oktato.php">Hiányzások</a></li>
			<li><a class="active" href="penzugyek_oktato.php">Pénzügyek</a></li>
            <li><a class="active" href="../../Controllers/sessionHandler.php">Kijelentkezés</a></li>
		</ul>
	</nav>

	<div class="center">
		<h1>Pénzügyek <h1>
		<form method="post">
            <?php
                $names = $controller->getAllNames();
                $controller->renderView($names);
            ?>
                <input type='submit' name="list" value='Mutat'>
            <div class='list_name'>
                <label for='jegy'>Befizetés:</label>
                <input type='text' name="ertek">
            </div>
            </br>
                <input type='submit' name='create' value='Felvesz'>
		</form>
	</div>
    <?php
        if(array_key_exists("list" , $_POST) && isset($_POST["nev"])){
            $var = $controller->select($_POST["nev"]);
            $controller->listSelectedData($var);
        }
        else if(array_key_exists("create", $_POST) && isset($_POST["nev"]) && !empty($_POST["ertek"])){
            $controller->update($_POST["nev"], $_POST["ertek"]);
        }
    ?>

</body>
</html>