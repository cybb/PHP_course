<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<?php
	
	$fName=$_POST["f-name"];
	$lName=$_POST["l-name"];
	$pol=$_POST["pol"];
	$c = ucfirst($fName) . " " . ucfirst($lName);
	if($fName  == "" || $lName == ""){
		echo "Vvedite dannie";
		 
	}
	

	else if($pol=="m"){
		 
		 echo "Hello uvajaemiy !! " .$c;
	 }
	else {
		 
		 echo "Hello uvajaemaya !! " . $c;
	 }
	 
	
	?> 
	
</body>
</html>