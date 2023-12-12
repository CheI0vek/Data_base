<?php 
	session_start();
	if (!$_SESSION['user']){
		include ("header.php");
	}else{
		include("profile_header.php");
	}
	require_once ('include/connect.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel = "stylesheet" href = "assets/css/style.css">
		<title>SCHOOL</title>
	</head>
	<body>

		<div class="intro">
			<center class="intro_title"><h4>Наша школа</h4></center>

			<p><h3 class="intro_inner"> School_base - это уникальная образовательная площадка, на которой педагоги, 
				специалисты качественно ведут учебно-воспитательный процесс. Это школа, в которой тебе все рады! 
				Вас всегда ждут грамотные и добрые учителя, предметные классы, отличное питание и теплая дружеская атмосфера.
			</h3></p>
		
		</div>
		
		<img scr='assets/Images/school.jpg'>
		
		<!--footer-->
		<footer>
    		<div class="copyright">
        		2023 © Belova Anastasia & Popkova Dariya (group 438)
    		</div>
		</footer>
	</body>
</html>