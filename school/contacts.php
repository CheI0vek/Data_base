<?php 
	session_start();
	if (!$_SESSION['user']){
		include ("header.php");
	}else{
		include("profile_header.php");
	}
	require_once ('include/connect.php');

	$sql = "SELECT * FROM `teachers` INNER JOIN `school_administration` ON `teachers`.`Post_ID` = `school_administration`.`id_post` WHERE Post_ID = 1 OR Post_ID = 2 OR Post_ID = 3 OR Post_ID = 4 OR Post_ID=8";
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
			<center class="intro_title" style="padding-top: 120px;"><h5>Администрация школы</h5></center>


			<table align="center" border = "2" cellpadding="10">
			
				<tr>
					<th>Должность</th>
					<th>ФИО</th>
					<th>Контакты</th>
				</tr>	

				<?php 
					while($posts=$result->fetch_assoc())
					{
				?>
				
				<tr>
					<td><?php echo $posts['post'] ?></td>
					<td><?php echo $posts['Teacher_name'] ?></td>
					<td><?php echo $posts['Teacher_contacts'] ?></td>
				</tr>
						
				<?php 
					}
				?>

			</table>
		
			<p><center>
			При возникновении каких-либо вопросов, можете 
			обращаться по телефонам </br> приведенным в таблице, 
			либо написать на почту школы School_base@school.base
			</center></p>
		</div>
		
		<!--footer-->
		<footer>
    		<div class="copyright">
        		2023 © Belova Anastasia & Popkova Dariya (group 438)
    		</div>
		</footer>
	</body>
</html>