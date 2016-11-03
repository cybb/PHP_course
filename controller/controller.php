<?php

defined ('ACCESS') or die ('Попыка обратиться к файлу напрямую !'); // проверка ЗАКЛАДКИ

require_once (MODEL);
include_once 'function.php';
 
$navigation = viborka('category', NULL , NULL ); // переменная содержащая функцию с параметром ИМЯ ТАБЛИЦЫ _ КАТЕГОРИИ
 
 
// ПЕРЕКЛЮЧАТЕЛЬ ШАБЛОНОВ

if(empty($_GET)){
	
	$view = 'one';
	$content = viborka('content' , NULL , NULL);
	
} else {
	
	$view = $_GET['view'];
	
	$catch_id = $_GET['id'];

  $category = viborka('content', 'id_categories' ,  $catch_id);
	
	$single = viborka('content' , 'id' , $catch_id);
	
	$bread = viboka_bread($view , $catch_id);

	
}
 


require_once (LINK_INDEX);

?>