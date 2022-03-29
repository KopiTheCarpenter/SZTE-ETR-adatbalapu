<?php
    include_once "../../Controllers/forumController.php";
    $controller = new Forumcontroller();
    error_reporting(E_ERROR | E_PARSE);
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Forum</title>
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
			<li><a class="active" href="adataim_oktato.php">Adataim</a></li>
			<li><a class="active" href="forum_oktato.php">Fórum</a></li>
			<li><a class="active" href="diakok_oktato.php">Diákok</a></li>
			<li><a class="active" href="oktatok_oktato.php">Oktatók</a></li>
			<li><a class="active" href="jegyek_oktato.php">Jegyek</a></li>
			<li><a class="active" href="hianyzasok_oktato.php">Hiányzások</a></li>
			<li><a class="active" href="penzugyek_oktato.php">Pénzügyek</a></li>
            <li><a class="active" href="../../Controllers/sessionHandler.php">Ki</a></li>
		</ul>
	</nav>
	
	<h1>Fórum</h1>
    <table class="content-table">
        <thead>
        <tr>
            <th>Mit</th>
            <th>Mikor</th>
        </tr>
        </thead>
        <?php
            $var = $controller->list_all();
            $controller->listingAllContent($var);
        ?>
    </table>
	
</body>
</html>