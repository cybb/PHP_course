<?php

defined ('ACCESS') or die ('Попыка обратиться к файлу напрямую !'); // проверка ЗАКЛАДКИ

require_once (MODEL_);
include_once('function.php');
  
 


 
if(empty($_GET)){
	
	$view = 'for_index.php';
 
	
} else {
	
	$view = $_GET['view'];
	
	$catch_id = $_GET['id']; 
	
	$for_single = viborka('content ,
category' , 'category.id' , 'content.id_categories');
	
}

 




require_once (LINK_INDEX_ADMIN);

?>