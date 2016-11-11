<?php


 
// функция преобразовния даты
function data_format($date_string){ 
	$date = date_create($date_string); 
	$rezult = date_format($date , 'd.m.Y г'); 
	return $rezult;  
}
 




// функция для вывода иконок
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







// -- функция вывода сообщения о редактировании статьи
// -- параметром функции будет значение ключа message А/М $_SESSION
function alert_message($a){
	
	if ($a == 'succes'){
		
		$class = ' 
		<div class="right col-lg-9 col-md-9">
			<div class="massage">
  			<div class="success"> 
      		<p>Данные успено обновлены и занесены !! </p>
      		<i class="fa fa-times-circle close" aria-hidden="true"></i>
      	</div>
			</div>
		</div>'; 
		
	}else if ($a == 'fail'){
		
		$class = 
			'<div class="right col-lg-9 col-md-9">
			 <div class="massage">
  			<div class="error"> 
      		<p>Ошибка обновления данных. Ведите данные !! </p>
      		<i class="fa fa-times-circle close" aria-hidden="true"></i>
      	</div>
			</div>
		</div'; 
		
	}
	
	
	unset($_SESSION['message']); // открепили ключ от массива так как он свое отработал и больше нам не нужен
	
	return $class;
	
}



?>