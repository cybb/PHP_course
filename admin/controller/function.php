<?php
 
function data_format($date_string){ 
	$date = date_create($date_string); 
	$rezult = date_format($date , 'd.m.Y г'); 
	return $rezult; 
}

 function content_format($value, $element){
	 
	 
	  if ($element == 'class'){
			
					if($value == 2){
						
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

function alert_message($a){
	
	if ($a == 'succes'){
		
		$class = ' 
		<div class="right col-lg-9 col-md-9">
  				<div class="succes" style="background:green;"> 
      		<p>SUCCES</p>
      		<i class="fa fa-times-circle close" aria-hidden="true"></i>
      </div> 
  </div>'; 
		
	}else if ($a == 'fail'){
		
		$class = 
			'<div class="right col-lg-9 col-md-9">
  				<div class="error" style="background:red;> 
      		<p>FAIL</p>
      		<i class="fa fa-times-circle close" aria-hidden="true"></i>
      </div> 
  </div>'; 
		
	}
	
	
	unset($_SESSION['message']);
	
	return $class;
	
}



?>