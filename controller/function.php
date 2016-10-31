<?php


// функция для форматирования и вывода ДАТЫ
function data_formatting($date_string , $parametr){
	// ПЕРВЫЙ ПАРАМЕТР -- ИЗВЛЕЧЕННАЯ ДАТА В ВИДЕ СТРОКИ
	// ВТОРОЙ ПАРАМЕТР -- ПАРАМЕТР ДАТЫ 
	
	$date = date_create($date_string); // функция date_string ПРЕОБРАЗУЕТ СТРОКУ В ДАТУ (ЧИСЛО)
	 
	
	if ($parametr == 'd'){ // ЕСЛИ ПАРАМЕТР БУДЕТ РАВЕН 'd'
		
		$rezult = date_format($date , $parametr); // то с помощью функции date_format  извлекаем из даты только ДЕНЬ
				
	}
	
	if($parametr == 'm'){
		
		switch(date_format($date , $parametr)){ 
			case '01': $rezult = 'янв'; break;
			case '02': $rezult = 'фев'; break;
			case '03': $rezult = 'мар'; break;
			case '04': $rezult = 'апр'; break;
			case '05': $rezult = 'май'; break;
			case '06': $rezult = 'июн'; break;
			case '07': $rezult = 'июл'; break;
			case '08': $rezult = 'авг'; break;
			case '09': $rezult = 'сен'; break;
			case '10': $rezult = 'окт'; break;
			case '11': $rezult = 'ноя'; break;
			case '12': $rezult = 'дек'; break; 
		}
		
		
	}
	
	return $rezult; // возвращаем значение $rezult в функцию
	
}



 









?>