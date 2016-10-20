<?php // добавление записи в таблицу SQL
include "header.php";
include "../config.php"; // подключае конфиг с ID подключением
 
 
$catch_id_edit = $_POST['id']; 
echo $catch_id_edit;

if ($catch_id_edit == 'categories'){
	 
	echo "Пытаемся отредактировать категорию";
	$cat_name = $_POST[cat_name]; //отлавливаем из формы данные из поля name="cat_name"
	$cat_desc = $_POST[cat_desc]; //отлавливаем из формы данные из поля name="cat_desc"
	$cat_id = $_POST[cat_id];  
	$cat_art = $_POST[cat_img][name];
	
	 $cat_edit = "UPDATE `categories` 
	 							SET `category_name`='$cat_name' 
								WHERE (`id`='$cat_id')";	           
				 
	mysql_query($cat_edit , $db);
	
	echo "<div class='alert'>	Данные успешно отредактированы ! <br> <br> 
	<a href ='category_view.php' class='linkss'>Вернутся к списку обзора категорий</a></div>" ; 
	
	
	
} else 
{
	
	echo "Пытаемся отредактировать статью"; 
	
	echo $art_name = $_POST[art_name]; //отлавливаем из формы данные из поля name="cat_name"
	echo $art_desc = $_POST[art_desc]; //отлавливаем из формы данные из поля name="cat_desc"
	echo $art_id = $_POST[art_id];  
	echo $img_art = $_FILES[art_img][name];
	
	
	
	
	 $art_edit = "UPDATE `articles` 
					 SET `id_category` = 'NULL', 
					     `article_name` = '$art_name', 
						 `article_text` = 'NULL', 
						 `article_keywords` = 'Null',
						 `article_description` = '$art_desc',
						 `article_image` = 	'$img_art'	
				   WHERE `id` = $art_id";

	echo $art_edit;	           
				 
	$r = mysql_query($art_edit , $db);
	
	if ($r==true) {
	echo "<div class='alert'>	Данные успешно отредактированы ! <br> <br> 
	<a href ='article_view.php' class='linkss'>Вернутся к списку обзора статей</a></div>" ; 
	
	
	
} else {
	
	echo "Ошибка редактирования !";
}
}




























//----------------     ЗАГРУЗКА ФАЙЛА    -----------------------
//	$file_name = $_FILES[loads][name]; // ОТОБРАЛИ ИМЯ ФАЙЛА	
//	$file_type = $_FILES[loads][type]; // ОТОБРАЛИ ТИП ФАЙЛА
//	$url = '../images/';               // ОТОБРАЛИ АДРЕС ПАПКИ  
//	
//
//	move_uploaded_file( $_FILES[loads][tmp_name] , $url.$file_name );
//  // С ПОМОЩЬЮ ФУНКЦИИ ПЕРЕМЕСТИЛИ ЗАГРУЖЕННЫЙ ФАЙЛ В УКАЗАННУЮ ПАПКУ 
//
//		if ($file_type !== 'image/jpeg'){ // ПРОВЕРКА НА ЗАГРУЖЕННЫЙ ТИП ФАЙЛА
//		echo 'Данный тип файла загружать нельзя';
//		exit;
//	} 



	
// ---------------------      ВСТАВКА В ТАБЛИЦУ БАЗЫ ДАННЫХ    -------------------------------------

//$ins_query = "INSERT INTO 
//												`categories` (`id`, `category_name`, `category_description`, `category_image`)
//							VALUES (NULL, '$title_cat', '$desc_cat', '$file_name')";
//
//
//// создаем переменную в которую помещаем текст запроса sql INSERT - вставить INTO - в таблицу 'имя таблицы' , далее открываем скобки и прописываем В КАВЫЧКАХ имена ПОЛЕЙ,
////затем через VALUES - значения тех полей из формы которые мы хоти добавить в новую строку. Открываем скобки и в качестве параметров прописываем запись в ТО ПОЛЕ КОТОРОЕ ЕМУ СООТВЕТСТВУЕТ. если это поле не используется то указываем служебное слово NULL, БЕЗ КАВЫЧЕК  
//
// 
//$update = mysql_query($ins_query, $db); // обновляем таблицу 
//
//
//
//
//if($update){
//	
//	echo "Данные успешно занесены ! <br> <a href ='category_view.php' class='linkss'>Вернутся к списку обзора категорий</a>";
//	
//} 
//	else{
//	
//	echo "ERROR";
//	
//}
//



?>
