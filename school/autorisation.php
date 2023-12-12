<?php 
	session_start();
	if ($_SESSION['user']){
		header('Location: profile.php');
		include("profile_header.php");
	}else{
		include ("header.php");
	}
?>

<!DOCTYPE html>
</html>
	<head>
		<meta charset="UTF-8">
		<link rel = "stylesheet" href = "assets/css/style.css">
		<link rel = "stylesheet" href = "assets/css/autorisation.css">
		<title>SCHOOL</title>
	</head>
	<body>
			<!--Форма авторизации-->
			<form class=".global_form" action="include/login.php" method="post">
				<label>Логин</label>
				<input type="text" placeholder="Логин" name="login">
				<label>Пароль</label>
				<input type="password" placeholder="Пароль" name="pass">
				<button type="submit">Войти</button>
				<p>
					Если у вас нет аккаунта - <a href="registration.php">зарегистрируйтесь</a>.
				</p>
				
				<?php
					if ($_SESSION['message']) {
						echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
					}
					unset($_SESSION['message']);
				?>
			</form>

	</body>
</html>