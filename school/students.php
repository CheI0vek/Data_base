<?php 
	session_start();
	if (!$_SESSION['user']){
		include ("header.php");
	}else{
		include("profile_header.php");
	}
	require_once ('include/connect.php');

	$sql = "SELECT `class`.Class_name,  `students`.Student_FIO FROM class, students Where ID_class = class_ID ORDER BY Class_name";
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
			<center class="intro_title" style="padding-top: 780px;"><h5>Наши ученики</h5></center>
			<table align="center" border = "2" cellpadding="10">
				
				<tr>
					<th>Класс</th>
					<th>ФИО ученика</th>
				</tr>	

				<?php 
					while($students=$result->fetch_assoc())
					{
				?>
				
				<tr>
					<td><?php echo $students['Class_name'] ?></td>
					<td><?php echo $students['Student_FIO'] ?></td>
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