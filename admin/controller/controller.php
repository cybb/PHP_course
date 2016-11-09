<?php

defined ('ACCESS') or die ('Попыка обратиться к файлу напрямую !'); // проверка ЗАКЛАДКИ

require_once (MODEL_);
include_once('function.php');
  
 
	$catch_id = $_GET['id'];
	$catch_type = $_GET['type'];	

 
if(empty($_GET)){
	
	$view = 'for_index';
 
	
} else {
	
	$view = $_GET['view'];
}


switch ($view)
{
	case "for_index":
	//Модели для построения главной страницы
	break;
		
	case "for_settings":
	//Модели для построения страницы настроек
	break;
		
	//Модели для построения страницы категорий	
	case "for_category": $for_category = viborka_category() ; break;	
		
		
		
	//Модели для построения страницы со списком статей 	
	case "for_singles": $for_single = articles(); break;	
		
	//Модели для построения стнаицы редактирования\создания новой записи	
	case "edit": 									
		$edit = edit($catch_id);  
		$select_cat = select_category(); 
		$id_status = select($edit['id_status']); 
		
		if($_POST){ 
			$edit2=update($catch_id); 
		}
	 
	break;
		
		
}// end switch
	



 


 




require_once (LINK_INDEX_ADMIN);

?>