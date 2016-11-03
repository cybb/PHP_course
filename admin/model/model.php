<?php

defined ('ACCESS') or die ('Попыка обратиться к файлу напрямую !'); // проверка ЗАКЛАДКИ



 

function string_query($table, $pole , $elem){
	
	if(isset($pole) and isset($elem)){ 
		$str = 'SELECT *
						FROM ' . $table .
					' WHERE  ' .$pole . '=' .$elem; 
	}else{
		$str='SELECT * FROM '.$table;
	}
		 
	return $str; 
}
 


// универсальная функция. АРГУМЕНТ - ИМЯ НУЖНОЙ ТАБЛИЦЫ
function viborka($table, $pole , $elem){
	
	$str = string_query($table, $pole , $elem ); // вызвали функцию которая формирует запрос, где в строке запроса нет только имени таблицы, которое мы зададим АРГУМЕНТОМ этой функции
	
	$query = mysql_query($str); // функция запроса на выборку из базы данных. В качестве аргумента передаем переменную $str которая содержит в себе строку запроса
	
	$rezult = array(); // определили НОВУЮ ПЕРЕМЕННУЮ которая будет являться МАССИВОМ
	
	while( $rez = mysql_fetch_array($query) ){
		
		$rezult[] = $rez;  
		
	}//end while
	
	return $rezult; 
	
} // end F
 


?>