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
			<div class="list_name">
				<label for="honap">Hónap:</label>
				<select>
					<option>Január</option>
				</select>
			</div>
			<div class="list_name">
				<label for="osztaly">Osztály:</label>
				<select>
					<option>5a</option>
				</select>
			</div>
			<div class="list_name">
				<label for="diak">Diák:</label>
				<select>
					<option>Kiss Pista</option>
				</select>
			</div>
			<div class="list_name">
				<label for="tantargy">Tantárgy:</label>
				<select>
					<option>Matek</option>
				</select>				
			</div>
			<div>
				<input type="submit" value="Mutat">
			</div>
			<div class="list_name">
				<label for="jegy">Jegyek:</label>
				<input type="text">
			</div>
			<input type="submit" value="Módosít">	
		</form>
	</div>	

</body>
</html>