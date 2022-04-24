<?php
    include_once "../../Controllers/diakokController.php";
    $controller = new Diakokcontroller();
    error_reporting(E_ERROR | E_PARSE);
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Diakok</title>
	<link rel="stylesheet" href="../CSS/menu.css">
	<link rel="stylesheet" href="../CSS/tablazat.css">
	<link rel="stylesheet" href="../CSS/uj.css">
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
</br></br>
	<button class="psw"><a href="uj_diak.php">Új diák hozzáadása</a></button>
	<h1>Diákok</h1>
	<table class="content-table">
		<thead>
			<tr>
				<th>O.Azonosító</th>
				<th>Név</th>
				<th>Születési dátum</th>
				<th>Szülő neve</th>
				<th>Osztály</th>
				<th>(Módosít)</th>
				<th>(Töröl)</th>
			</tr>
		</thead>
        <?php
            $var = $controller->list_all();
            $controller->listingAllStudent($var);
        ?>
	</table>
</body>
</html>