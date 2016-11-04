<?php


// функция для форматирования и вывода ДАТЫ

function data_format($date_string){
	// передаваемый ПАРАМЕТР -- ИЗВЛЕЧЕННАЯ ДАТА В ВИДЕ СТРОКИ
 
	
	$date = date_create($date_string); // функция date_string ПРЕОБРАЗУЕТ СТРОКУ В ДАТУ (ЧИСЛО)
	 
	 
		
		$rezult = date_format($date , 'd.m.Yг');  
				
 
	
	return $rezult; // возвращаем значение $rezult в функцию
	
}

 


?>