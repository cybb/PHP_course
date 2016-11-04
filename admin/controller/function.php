<?php
 
function data_format($date_string){ 
	$date = date_create($date_string); 
	$rezult = date_format($date , 'd.m.Y г'); 
	return $rezult; 
}

 function content_format($value, $element){
	 
	 $delete = 2;
	 $redact = 3;
	 
	  if ($element == 'class')
		{
			if($value == 2)
			{
						$stroka = 'cart';
			} 
			if($value == 3){
						$stroka = 'exclamation';
			}  
		}
	 
	 if ($element == 'icon') {
		 
		 if($value == 2) {
			 
						$stroka = 'fa-times-circle';
			 
			} else if($value == 3){
			 
						$stroka = 'fa-exclamation-circle';
			 
			} else {
			 
			 			$stroka = 'fa-check-circle';
		 }
	 }
		 
	 return $stroka;
	 
 }


?>