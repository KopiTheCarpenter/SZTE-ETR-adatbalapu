<?php
    include_once "../../Controllers/oktatokController.php";
    $controller = new Oktatokcontroller();
    error_reporting(E_ERROR | E_PARSE);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bejelentkezes</title>
	<link rel="stylesheet" href="../CSS/login.css">
</head>
<body>
	<div class="center">
		<h1>MozaNapló (Oktató)</h1>
		<form method="post">
			<div class="txt_field">
				<label for="username">Felhasználónév</label>
				<input type="text" id="username" name="username" required>
				</p>
			</div>
			<div class="txt_field">
				<label for="password">Jelszó</label>
				<input type="password" id="password" name="password" required>
				</p>
			</div>
			</p>
			<input type="submit" value="Belépés">	
		</form>
	</div>
    <?php
        $usernameVar = $_POST['username'];
        $passwordVar = $_POST['password'];
        $var = $controller->validateTeacher($usernameVar, $passwordVar);
        $controller->renderNewView($usernameVar, $passwordVar, $var);
    ?>
</body>
</html>