<?php
include "header.php"; 
include "../config.php";

	$catch_id_new = $_GET['id'];



if($catch_id_new == "cat") {
	
	$title_cat = $_POST['cat_name']; //отлавливаем из формы данные из поля name="cat_name"
	$desc_cat = $_POST['cat_desc']; //отлавливаем из формы данные из поля name="cat_desc"  
	$img_cat = $_FILES['cat_img']['name'];

	$ins_query_cat = "INSERT INTO `flowers`.`categories` (
															`id`, `category_name`, `category_description`, `category_image`) 
															
															VALUES (NULL, '$title_cat', '$desc_cat', '$img_cat')";
	$update_cat = mysql_query($ins_query_cat , $db) ;
	

				if($update_cat){ 

					echo "<div class='alert'> Данные успешно занесены ! <br> <br> 
					<a href ='category_view.php' class='linkss'>Вернутся к списку обзора категорий</a></div>" ; 

				} 
					else{

					echo "ERROR";

				}  
	
} else if($catch_id_new == 'art') {
	
	
	$art_name = $_POST['art_name'];
	$art_desc = $_POST['art_desc'];
	$category_id = $_POST['categ_id'];
	$art_img = $_FILES['art_img']['name'];
 

	$ins_query_art = "INSERT INTO  `flowers`.`articles` ( `id`, `id_category` , `article_name` , 																			`article_text` , `article_keywords` , `article_description` , 																		`article_image` )
															VALUES 
															( NULL , '$category_id' ,  '$art_name', NULL , NULL ,  '$art_desc',  '$art_img'
															)";
	$update_art = mysql_query($ins_query_art , $db) ;

			if($update_art){ 

				echo "<div class='alert'> Данные успешно занесены ! <br> <br> 
				<a href ='article_view.php' class='linkss'>Вернутся к списку обзора статей</a></div>" ; 

			} else{ 
				
				echo "ERROR"; 
				
				}   
	
} else {
	
	echo "Ошибка создания ! ";
	
}















?>