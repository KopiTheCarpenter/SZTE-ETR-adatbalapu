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
	<title>Adataim</title>
	<link rel="stylesheet" href="../CSS/menu.css">
	<link rel="stylesheet" href="../CSS/tablazat.css">
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
			<li><a class="active" href="adataim_diak.php">Adataim</a></li>
			<li><a class="active" href="forum_diak.php">Fórum</a></li>
			<li><a class="active" href="diakok_diak.php">Diákok</a></li>
			<li><a class="active" href="oktatok_diak.php">Oktatók</a></li>
			<li><a class="active" href="jegyek_diak.php">Jegyeim</a></li>
			<li><a class="active" href="hianyzasok_diak.php">Hiányzásaim</a></li>
			<li><a class="active" href="penzugyek_diak.php">Pénzügyeim</a></li>
            <li><a class="active" href="../../Controllers/sessionHandler.php">Ki</a></li>
		</ul>
	</nav>
	
	<h1>Adataim</h1>
	<table class="content-table">
		<thead>
			<tr>
				<th>Név</th>
				<th>Születési dátum</th>
				<th>Szülő neve</th>
				<th>Osztály</th>
			</tr>
		</thead>
        <?php
            $var = $controller->listDatas();
            $controller->listingMyDatas($var);
        ?>
	</table>
	<!--
	</br> + jelszó módosítás
	-->
</body>
</html>