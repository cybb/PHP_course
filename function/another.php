<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<?php
	 
	$ch1 = $_POST ["chislo1"];
	$ch2 = $_POST ["chislo2"];  
	$rezultat = $_POST["matematika"];
	
	
	switch($rezultat){
		 case 1:$rezultat= sum($ch1,$ch2);break;
		 case 2:$rezultat= raz($ch1,$ch2);break;
		 case 3:$rezultat= umn($ch1,$ch2);break;
		 case 4:
			 if($ch2==0){
				 echo "Na 0 delit nelzya";
				 exit;
			 }else{
				  $rezultat= del($ch1,$ch2);};break; 
	 }
			
	 
 
	
	if (is_numeric($ch1)==false || is_numeric($ch2)==false){
		
		echo "VVedite chislo";
		exit;
		
	} else {
		
		echo  "Rezultat deistvia " . $rezultat; 
		
	}
	 
	
	
	//служебные функции
	
	function sum($ch1, $ch2){ 
		$a = $ch1 + $ch2;
		return $a; 
	}
	function raz($ch1, $ch2){ 
		$a = $ch1 - $ch2;
		return $a; 
	}
	function umn($ch1, $ch2){ 
		$a = $ch1 * $ch2;
		return $a; 
	}
	function del($ch1, $ch2){ 
		$a = $ch1 / $ch2;
		//return $a;
		return floor($a); 
	}
	  
	
	 
	?> 
	
</body>
</html>