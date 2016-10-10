<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title> 
	<?php 
	include "config.php";
	
	$query = "SELECT * FROM Training";//запрос на выборку данных
	$content = mysql_query($query, $dataBase);//записываемв переменную результат запроса


	?>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
 
 <?php
	
	while($myRow = mysql_fetch_array($content)){
		
		echo "<h1>" . $myRow["Title"] . "</h1>";
		echo "<p>" . $myRow["Text"] . "</p>";
		
	}
	
	
	?>
 
  
 
</body>
</html>