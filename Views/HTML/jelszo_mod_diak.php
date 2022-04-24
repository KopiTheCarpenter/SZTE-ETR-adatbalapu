<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>jelszo_mod</title>
	<link rel="stylesheet" href="../CSS/menu.css">
	<link rel="stylesheet" href="../CSS/tablazat.css">
	<link rel="stylesheet" href="../CSS/jelszo.css">
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
            <li><a class="active" href="../../Controllers/sessionHandler.php">Kijelentkezés</a></li>
		</ul>
	</nav>
	<div class="center">
		<h1 class="white">Jelszó módosítása</h1>
		<form method="post">
			<div class="txt_field">
				<label for="username" class="white">Felhasználónév</label>
				<input type="text" id="username" name="username" required>
				</p>
			</div>
			<div class="txt_field">
				<label for="password" class="white">Jelszó</label>
				<input type="password" id="password" name="password" required>
				</p>
			</div>
			</br>
			<input type="submit" value="Módosít">	
		</form>
	</div>	
	
</body>
</html>