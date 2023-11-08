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
				<h5 style="margin: 8px 0;"><?php echo $_SESSION['user']['user_post_id'] ?></h5>

			</div>

		<!--footer-->
		<footer>
    		<div class="copyright">
        		2023 © Belova Anastasia & Popkova Dariya (group 438)
    		</div>
		</footer>
	</body>
</html>