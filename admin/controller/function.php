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


function crumbs($a , $b){
	
	$wrapper_start = '<ul class="bread">  
										 <li>
											 <a href="' .PATH.'">ГЛАВНАЯ</a>
										 </li>';
	
	$category_id = $b[id];
	
	$category_name = $b[name_category];
	
	$content_title = $b[title];
	
	$wrapper_end = ' </ul>';  
	
	
	
	if($a == 'category'){
		
		$li_cat = '<li>'.$category_name.'</li>';
		
	} else {
		$li_cat = '<li><a href="?view=category&id='.$category_id.'">'.$category_name.'</a></li>';
		$li_title = '<li>'.$content_title.'</li>'; 
	}
	
	$crumbs_str = $wrapper_start . $li_cat . $li_title . $wrapper_end;
	
	return $crumbs_str; 
	
}
 

 









?>