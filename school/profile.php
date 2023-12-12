<?php 
	session_start();
	if (!$_SESSION['user']){
		header('Location: autorisation.php');
		include ("header.php");
	} else{
		include("profile_header.php");
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
			<!--Профиль-->
			<div class="profile">	
				<img src="<?php echo $_SESSION['user']['avatar'] ?>" width="300" alt="">
				<h2 style="margin: 8px 0;"><?php echo $_SESSION['user']['user_full_name'] ?></h2>
				<a href="#"><?php echo $_SESSION['user']['email'] ?></a>
				
				<?php 
					if ($_SESSION['user']['user_post_id'] == 1) {
						echo "Директор";
					} elseif ($_SESSION['user']['user_post_id'] == 2) {
						echo "Заместитель директора по учебно-воспитательной работе";
					} elseif ($_SESSION['user']['user_post_id'] == 3) {
						echo "Заместитель директора по внеучебной деятельности";
					} elseif ($_SESSION['user']['user_post_id'] == 4) {
						echo "Секретарь";
					} elseif ($_SESSION['user']['user_post_id'] == 5) {
						echo "Учитель";
					} elseif ($_SESSION['user']['user_post_id'] == 6) {
						echo "Обучающийся";
					} elseif ($_SESSION['user']['user_post_id'] == 7){
						echo "Родитель";
					} else{
						echo "Завхоз";
					}
				?>
				
				<a href="include/logout.php">Выход (в окно)</a>
			</div>

	</body>
</html>