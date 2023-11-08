<?php 
	session_start();
	if (!$_SESSION['user']){
		include ("header.php");
	}else{
		include("profile_header.php");
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel = "stylesheet" href = "assets/css/style.css">
		<title>SCHOOL</title>
	</head>
	<body>
		
		<?php 
			include 'header.php';
		?>
		
		<!-- Список учителей с фото и контактами -->
		<div class="intro" id="intro">
			<table align="center" border = "2" cellpadding="10">
				<caption>Кружки<caption>
				<tr><td>#картинка</td><td>название</td>
				<tr><td>#картинка</td><td>название</td>
				<tr><td>#картинка</td><td>название</td>
				<tr><td>#картинка</td><td>название</td>
			</table>
		</div>

</html>