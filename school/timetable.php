<?php 
	session_start();
	if (!$_SESSION['user']){
		include ("header.php");
	}else{
		include("profile_header.php");
	}
	require_once ('include/connect.php');

	$sql = "SELECT `class`.`Class_name`, `subjects`.`Subject_name` FROM `subjects` INNER JOIN `class` ON `subjects`.`ID_subjects` = `class`.`Monday_lessons` ORDER BY Class_name";
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
	
		<div>
			<center class="intro_title" style="padding-top: 150px;"><h5>Расписание</h5></center>
			<table align="center" border = "2" cellpadding="10">
			<caption><h3>Понедельник<h3></caption>
			<tr>
				<th>Класс</th>
				<th>Уроки</th>
			</tr>	

			<?php 
				while($subjects=$result->fetch_assoc())
				{
			?>
			
			<tr>
				<td><?php echo $subjects['Class_name'] ?></td>
				<td><?php echo $subjects['Subject_name'] ?></td>
			</tr>
					
			<?php 
				}
			?>

			</table>

		</div>

		<?php 
				$sql = "SELECT `class`.`Class_name`, `subjects`.`Subject_name` FROM `subjects` INNER JOIN `class` ON `subjects`.`ID_subjects` = `class`.`Tuesday_lessons` ORDER BY Class_name";
				$result = $connect->query($sql);
		?>

		<div>
			</br>
			<table align="center" border = "2" cellpadding="10">
			<caption><h3>Вторник</h3></caption>
			<tr>
				<th>Класс</th>
				<th>Уроки</th>
			</tr>	

			<?php 
				while($subjects=$result->fetch_assoc())
				{
			?>
			
			<tr>
				<td><?php echo $subjects['Class_name'] ?></td>
				<td><?php echo $subjects['Subject_name'] ?></td>
			</tr>
					
			<?php 
				}
			?>

			</table>
		</div>

		<?php 
				$sql = "SELECT `class`.`Class_name`, `subjects`.`Subject_name` FROM `subjects` INNER JOIN `class` ON `subjects`.`ID_subjects` = `class`.`Wednesday_lessons` ORDER BY Class_name";
				$result = $connect->query($sql);
		?>

		<div>
			</br>
			<table align="center" border = "2" cellpadding="10">
			<caption><h3>Среда</h3></caption>
			<tr>
				<th>Класс</th>
				<th>Уроки</th>
			</tr>	

			<?php 
				while($subjects=$result->fetch_assoc())
				{
			?>
			
			<tr>
				<td><?php echo $subjects['Class_name'] ?></td>
				<td><?php echo $subjects['Subject_name'] ?></td>
			</tr>
					
			<?php 
				}
			?>

			</table>
		</div>

		<?php 
				$sql = "SELECT `class`.`Class_name`, `subjects`.`Subject_name` FROM `subjects` INNER JOIN `class` ON `subjects`.`ID_subjects` = `class`.`Thursday_lessons` ORDER BY Class_name";
				$result = $connect->query($sql);
		?>

		<div>
			</br>
			<table align="center" border = "2" cellpadding="10">
			<caption><h3>Четверг</h3></caption>
			<tr>
				<th>Класс</th>
				<th>Уроки</th>
			</tr>	

			<?php 
				while($subjects=$result->fetch_assoc())
				{
			?>
			
			<tr>
				<td><?php echo $subjects['Class_name'] ?></td>
				<td><?php echo $subjects['Subject_name'] ?></td>
			</tr>
					
			<?php 
				}
			?>

			</table>
		</div>

		<?php 
				$sql = "SELECT `class`.`Class_name`, `subjects`.`Subject_name` FROM `subjects` INNER JOIN `class` ON `subjects`.`ID_subjects` = `class`.`Friday_lessons` ORDER BY Class_name";
				$result = $connect->query($sql);
		?>

		<div>
			</br>
			<table align="center" border = "2" cellpadding="10">
			<caption><h3>Пятница</h3></caption>
			<tr>
				<th>Класс</th>
				<th>Уроки</th>
			</tr>	

			<?php 
				while($subjects=$result->fetch_assoc())
				{
			?>
			
			<tr>
				<td><?php echo $subjects['Class_name'] ?></td>
				<td><?php echo $subjects['Subject_name'] ?></td>
			</tr>
					
			<?php 
				}
			?>

			</table>
		</div>

		<!--footer-->
		<footer>
    		<div class="copyright">
        		2023 © Belova Anastasia & Popkova Dariya (group 438)
    		</div>
		</footer>

</html>