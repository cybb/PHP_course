<?php

defined ('ACCESS') or die ('Попыка обратиться к файлу напрямую !'); // проверка ЗАКЛАДКИ

require_once (MODEL_);
include_once('function.php');
  
 


 
if(empty($_GET)){
	
	$view = 'for_index';
 
	
} else {
	
	$view = $_GET['view'];
	
	$catch_id = $_GET['id'];
	
	$catch_type = $_GET['type'];
	
	$for_single = viborka('content ,
category' , 'category.id' , 'content.id_categories' , $catch_type);
	
	$for_category = viborka_category() ;
	
	$edit = edit($catch_id); 
	
}


 




require_once (LINK_INDEX_ADMIN);

?>