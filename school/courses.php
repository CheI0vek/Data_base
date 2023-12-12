<?php 
	session_start();
	if (!$_SESSION['user']){
		include ("header.php");
	}else{
		include("profile_header.php");
	}
	require_once ('include/connect.php');

	$sql = "SELECT * FROM `courses` INNER JOIN `teachers` ON `teachers`.`ID_Teacher` = `courses`.`teacher_id`";
	$result = $connect->query($sql);
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
			<center class="intro_title" style="padding-top: 210px;"><h5>Внеучебная деятельность</h5></center>
			<table align="center" border = "2" cellpadding="10">
			
			<tr>
				<th>Название</th>
				<th>Стоимость в час</th>
				<th>Кол-во занятий</th>
				<th>Цена</th>
				<th>Преподаватель</th>
			</tr>	

			<?php 
				while($courses=$result->fetch_assoc())
				{
			?>
			
			<tr>
				<td><?php echo $courses['course_name'] ?></td>
				<td><?php echo $courses['hourly_pay'] ?></td>
				<td><?php echo $courses['course_count'] ?></td>
				<td><?php echo $courses['salary'] ?></td>
				<td><?php echo $courses['Teacher_name'] ?></td>
			</tr>
					
			<?php 
				}
			?>

		</table>

		<p><center>
			* Цены в таблице преведены за 1 академический час (40 минут). </br>
			  Полная стоимость занятий (цена) и количество занятий указаны за 1 месяц.
		</center></p>
		
		<!--footer-->
		<footer>
    		<div class="copyright">
        		2023 © Belova Anastasia & Popkova Dariya (group 438)
    		</div>
		</footer>

		</div>

</html>