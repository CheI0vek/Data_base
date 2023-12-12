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
        <!--Форма регистрации-->
		<form class="global_form" action="include/register.php" method="post" enctype="multipart/form-data">
            <label>ФИО</label>
			<input type="text" placeholder="Введите свои ФИО" name="user_full_name">
			<label>Логин</label>
			<input type="text" placeholder="Введите свой логин" name="login">
			<label>Фото</label>
			<input type="file" name = "avatar">
			<label>Введите почту</label>
			<input type="email" placeholder="Почта" name="email">
			<label>Выберите вашу роль в учебном заведении</label>
				<select name="user_post_id" size="1" required="required">
					<option value="" selected></option>
					<option value="6">Обучающийся</option>
					<option value="5">Учитель</option>
					<option value="1">Директор</option>
					<option value="2">Заместитель директора по УВР</option>
					<option value="3">Заместитель директора по внеучебной деятельности</option>
					<option value="4">Секретарь</option>
					<option value="7">Родитель</option>
					<option value="8">Завхоз</option>
				</select>
			<label>Пароль</label>
			<input type="password" placeholder="Введите пароль" name="pass">
			<label>Повторите пароль</label>
			<input type="password" placeholder="Повторите пароль" name="repeatpass">
			<button type="submit">Зарегистрироваться</button>
            <p>
				Если у вас уже есть аккаунт - <a href="autorisation.php">авторизируйтесь</a>.
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