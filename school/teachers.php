<?php 
	session_start();
	if (!$_SESSION['user']){
		include ("header.php");
	}else{
		include("profile_header.php");
	}
	require_once ('include/connect.php');

	$sql = "SELECT `teachers`.*, `class`.`Class_name` FROM `teachers` INNER JOIN `school_administration` ON `teachers`.`Post_ID` = `school_administration`.`id_post` INNER JOIN `class` ON `teachers`.`ID_Teacher` = `class`.`Teacher_ID` WHERE Post_ID = 5 ORDER BY Class_name";
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
		
		<!-- Список учителей с фото и контактами -->
		<div class="intro">
			<center class="intro_title" style="padding-top: 210px;"><h5>Наши учителя</h5></center>
			<table align="center" border = "2" cellpadding="10">
			
			<tr>
				<th>Класс</th>
				<th>ФИО классного руководителя</th>
				<th>Контакты</th>
			</tr>	

			<?php 
				while($teachers=$result->fetch_assoc())
				{
			?>
			
			<tr>
				<td><?php echo $teachers['Class_name'] ?></td>
				<td><?php echo $teachers['Teacher_name'] ?></td>
				<td><?php echo $teachers['Teacher_contacts'] ?></td>
			</tr>
					
			<?php 
				}
			?>

		</table>
		
		<!--footer-->
		<footer>
    		<div class="copyright">
        		2023 © Belova Anastasia & Popkova Dariya (group 438)
    		</div>
		</footer>

		</div>

</html>