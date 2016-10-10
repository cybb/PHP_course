<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"> 
    <title>Test PHP</title>
    <link rel="stylesheet" href="css/style.css">
	<style>
		.alert{
			color:#c6ff0a;
			font-weight:800;
			display: block;
			width: 40%;
			background-color: #fd4343;
			text-align: center;
			padding: 10px;
			box-shadow: 0 0 2px 3px #ccc;
		}
		 
	</style>
</head>
<body>
    <h1>Basis PHP</h1>
    
    <?php

	 

//	
//	$circle=5;
//	$row=4;
//	$i=0;
//	$ii=0;
//	$number=0;
//	
//	
//	while ($i<$row){
//		
//		echo "<div class='row'>";
//		
//			while($ii<$circle){
//				$number++;
//				echo "<div class='circle'>" . $number . "</div>";
//				$ii++;
//			}
//		  $ii=0;
//		echo "</div>";
//		$i++;
	
	
	$a=0;
	$month=array("jan","feb","march","apr","may","jun","jul","aug","sept","nov","dec","okt");
  $data=array(1,2,3,4,5,6,7,8,9,10,11,12);
	
	$m= array_slice($month,4,5);
	$d= array_slice($data,4,5);
	
	$full=array_merge($m,$d);
	$size_full=count($full);
	
	while($a<$size_full){
		
		echo $full[$a] . "<br>";
		$a++;
		
	}
	
//	$slice= array_slice($month,5,3);
//	$num_slice=count($slice);
//	
//	 while($a<=$num_slice){
//		 
//		 echo $slice[$a] . "<br>";
//		 $a++;
//		 
//	 }
//		
//	 
 
			
		 
	 
	 
	
	?>
     
</body>
</html>