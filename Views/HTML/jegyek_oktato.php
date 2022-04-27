<?php
    include_once "../../Controllers/jegyekController.php";
    $controller = new Jegyekcontroller();
    error_reporting(E_ERROR | E_PARSE);
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Jegyek</title>
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
		<h1>Jegyek <h1>
		<form method="post">
            <?php
                $months = $controller->getAllMonths();
                $students = $controller->getAllStudents();
                $classes = $controller->getAllClasses();
                $controller->renderView($months, $students, $classes );
            ?>
            <div>
                <input type='submit' name = 'button1' value='Mutat'>
            </div>
            <div class='list_name'>
                <label for='jegy'> Jegyek: </label>
                <input type='text' name='ertek'>
            </div>
            <input type='submit' name = 'button2' value='Felvesz'>
		</form>
	</div>
        <?php
            if(array_key_exists('button1', $_POST) && isset($_POST["honap"])  && isset($_POST["oktatasiazon"]) && isset($_POST["tantargynev"])){
                $var2 = $controller->chosenStudent($_POST["honap"], $_POST["oktatasiazon"], $_POST["tantargynev"]);
                $controller->listSelectedDatas($var2);
            }
            else if(array_key_exists('button2', $_POST) && isset($_POST["honap"]) && isset($_POST["oktatasiazon"]) && isset($_POST["tantargynev"]) && !empty($_POST["ertek"])){
                $controller->createNewMark($_POST["ertek"], $_POST["honap"]);
                $help = $controller->helpQuery($_POST["tantargynev"]);
                $help2 = oci_execute($help);
                $controller->createWho($_POST["oktatasiazon"], $help2);
            }
        ?>
</body>
</html>