<?php

defined ('ACCESS') or die ('Попыка обратиться к файлу напрямую !'); // проверка ЗАКЛАДКИ



 

function string_query($table, $pole , $elem , $type){
	
	if($type !== 'all'){
		
	$str = 'SELECT *
						FROM ' . $table .
					' WHERE  ' .$pole . '=' .$elem .' AND content.id_status = ' . $type; 
		
	} else if (isset($pole) and isset($elem)){ 
		
		$str = 'SELECT *
						FROM ' . $table .
					' WHERE  ' .$pole . '=' .$elem; 
		
	} 
	else{
		$str='SELECT * FROM '.$table;
	}
		 
	return $str; 
} 

// универсальная функция. АРГУМЕНТ - ИМЯ НУЖНОЙ ТАБЛИЦЫ
function viborka($table, $pole , $elem , $type){
	
	$str = string_query($table, $pole , $elem, $type); // вызвали функцию которая формирует запрос, где в строке запроса нет только имени таблицы, которое мы зададим АРГУМЕНТОМ этой функции
 
	$query = mysql_query($str); // функция запроса на выборку из базы данных. В качестве аргумента передаем переменную $str которая содержит в себе строку запроса
	
	$rezult = array(); // определили НОВУЮ ПЕРЕМЕННУЮ которая будет являться МАССИВОМ
	
	while( $rez = mysql_fetch_array($query) ){
		
		$rezult[] = $rez;  
		
	}//end while
	
	return $rezult; 
	
} // end F


function viborka_category(){
	
	
	$query = mysql_query('SELECT
											category.id,
											category.name_category,
											Count(content.id_categories) AS col
											FROM
											content ,
											category
											WHERE
											content.id_categories = category.id
											GROUP BY
											category.id,
											category.name_category');

	$rezult = array(); // определили НОВУЮ ПЕРЕМЕННУЮ которая будет являться МАССИВОМ
	
	while( $rez = mysql_fetch_array($query) ){
		
		$rezult[] = $rez;  
		
	}//end while
	
	return $rezult; 
}


function edit($id){
	
	$query = mysql_query('SELECT *
														FROM
														content
														WHERE
														content.id = ' .$id); 
	$rezult = mysql_fetch_array($query) ;
	
	return $rezult;  
	
}

function select($b){
	
	 
	
	switch($b){ 
		case 1: $c= '<option value="1" selected > ОПУБЛИКОВАННЫЕ </option>
								<option value="2"> УДАЛЕННЫЕ </option>
								<option value="3"> ЧEРНОВИКИ </option>';break;
			
		case 2: $c= '<option value="1"> ОПУБЛИКОВАННЫЕ </option>
								<option value="2" selected> УДАЛЕННЫЕ </option>
								<option value="3"> ЧEРНОВИКИ </option>';break;
			
		case 3: $c= '<option value="1"> ОПУБЛИКОВАННЫЕ </option>
								<option value="2"> УДАЛЕННЫЕ </option>
								<option value="3" selected> ЧEРНОВИКИ </option>';break; 
	}
	    
	return $c;
	
}
 
 
?>