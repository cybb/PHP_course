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
	
	echo $str;
	return $str; 
	
} 

// универсальная функция.  
function viborka($table, $pole , $elem , $type){
	
	$str = string_query($table, $pole , $elem, $type); // вызвали функцию которая формирует запрос, где в строке запроса нет только имени таблицы, которое мы зададим АРГУМЕНТОМ этой функции
 
	$query = mysql_query($str); // функция запроса на выборку из базы данных. В качестве аргумента передаем переменную $str которая содержит в себе строку запроса
	
	$rezult = array(); // определили НОВУЮ ПЕРЕМЕННУЮ которая будет являться МАССИВОМ
	
	while( $rez = mysql_fetch_array($query) ){
		
		$rezult[] = $rez;  
		
	}//end while
	
	return $rezult; 
	
} // end F






// ---------------- FOR_CATEGORIES.PHP ---------------------------

// функция для вывода ВСЕХ категорий в for_cateories.php
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


// ------------------ FOR_SINGLES.PHP ---------------------

// функция для вывода ВСЕХ статей в for_singles.php
function articles(){
	
	$query = mysql_query('SELECT
														category.name_category,
														content.id,
														content.id_categories,
														content.title,
														content.description,
														content.full_text,
														content.thumbnails,
														content.date,
														content.id_status
												FROM
														category ,
														content
												WHERE
														category.id = content.id_categories
														');

	$rezult = array(); // определили НОВУЮ ПЕРЕМЕННУЮ которая будет являться МАССИВОМ
	
	while( $rez = mysql_fetch_array($query) ){
		
		$rezult[] = $rez;  
		
	}//end while
	
	return $rezult;  
	
}


// -------------------- EDIT.PHP -----------------------------------

//функция для вывода нужных данных из таблицы КОНТЕНТ для вствки в поля редактирования
function edit($id){
	
	$query = mysql_query('SELECT *
														FROM
														content
														WHERE
														id = ' .$id); 
	
	$rezult = mysql_fetch_array($query) ;
	
	return $rezult;  
	
}


// -- функция формирующая статус статьи -- OPTION у тега SELECT
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






//данные из таблицы КАТЕГОРИИ 
function select_category(){
	
	$query = mysql_query('SELECT *
											FROM 
											category');

	$rezult = array(); // определили НОВУЮ ПЕРЕМЕННУЮ которая будет являться МАССИВОМ
	
	while( $rez = mysql_fetch_array($query) ){
		
		$rezult[] = $rez;  
		
	}//end while
	
	return $rezult; 
	
}





 
//-------------- функция ОБНОВЛЕНИЯ -------------
function update($id){
	
$title = $_POST['title'];
$description = $_POST['description'];
$full_text = $_POST['full_text'];
$date = $_POST['date'];
$status = $_POST['status'];
$categories = $_POST['categories'];
$thumbnails = $_POST['thumbnails'];

	
	$str = 'UPDATE  `content` 
						 SET  
										`title`   = "'.$title.'",
										`description`   = "'.$description.'",
										`full_text`   = "'.$full_text. '",
										`thumbnails`   = "'.$thumbnails.'", 
										`date`   = "'.$date.'",
										`id_status`   = '.$status.'  ,
										`id_categories` = '.$categories.' 
						 WHERE  `id`  = '.$id.' ';
	
 
$rez = mysql_query ($str) or die( mysql_error() );
	
// функция СЕССИИ 
//mysql_affected_rows()  
//Возвращает количество измененных записей в случае успеха,
//и -1 в случае если последний запрос не удался
	if(mysql_affected_rows() >= 1){
		
	 $_SESSION['message'] = 'succes'; 
		return true;
		
	} else {
		
		$_SESSION['message'] = 'fail';
		return false;
		
	}
	
	
 
}

 
?>