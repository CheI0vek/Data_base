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
			<center class="intro_title" style="padding-top: 200px;" ><h5>Наши ученики</h5></center>
            <center><form method="post">
					<input  type="text" required="required" placeholder="Введите запрос" name="search" >
					<input type="submit" value='Поиск' name="submit" >
			</form></center><br>

			<?php
				if(isset($_POST['submit'])){
					$search = explode(" ", $_POST['search']);
					$count = count($search);
					$array = array();
					$i = 0;
					foreach($search as $key){
						$i++;
						if($i < $count) $array[] = "CONCAT (`Student_FIO`) LIKE '%".$key."%' OR ";
						else $array[] = "CONCAT (`Student_FIO`) LIKE '%".$key."%'";
					}

					$sql = "SELECT * FROM `students` WHERE ".implode("", $array);
					$result = $connect->query($sql);

			?>

				<table align="center" border = "2" cellpadding="10">
				
				<tr>
					<th>Класс</th>
					<th>ФИО ученика</th>
				</tr>	

				<?php

						while($row = $result->fetch_assoc()){

							$sql2 = "SELECT DISTINCT Class_name, ID_Class FROM `class`, `students` Where ID_Class = Class_ID ORDER BY Class_name;";
							$result2 = $connect->query($sql2);
							/* echo "<center><p>".$row['Student_FIO']."</p><br></center>"; */
							
							while($row2 = $result2->fetch_assoc()){
								if($row['Class_ID'] == $row2['ID_Class']){
									
								?>

									<tr>
										<td><?php echo $row2['Class_name'] ?></td>
										<td><?php echo $row['Student_FIO'] ?></td>
									</tr>

								<?php
								
							}
						}
					}	
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

    </body>
</html>
			