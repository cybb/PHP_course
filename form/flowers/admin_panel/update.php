<?php // добавление записи в таблицу SQL
 
include "../config.php"; // подключае конфиг с ID подключением
 
 
$title_cat = $_POST[cat_name]; //отлавливаем из формы данные из поля name="cat_name"
$desc_cat = $_POST[cat_desc]; //отлавливаем из формы данные из поля name="cat_desc"



////----------------     ЗАГРУЗКА ФАЙЛА    -----------------------
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



	
// ---------------------      ВСТАВКА В ТАБЛИЦУ БАЗЫ ДАННЫХ КАТЕГОРИИ   -------------------------------------

$ins_mysql_cat = "INSERT INTO 
												`categories` (`id`, `category_name`, `category_description`, `category_image`)
							VALUES (NULL, '$title_cat', '$desc_cat', '$file_name')";


// создаем переменную в которую помещаем текст запроса sql INSERT - вставить INTO - в таблицу 'имя таблицы' , далее открываем скобки и прописываем В КАВЫЧКАХ имена ПОЛЕЙ,
//затем через VALUES - значения тех полей из формы которые мы хоти добавить в новую строку. Открываем скобки и в качестве параметров прописываем запись в ТО ПОЛЕ КОТОРОЕ ЕМУ СООТВЕТСТВУЕТ. если это поле не используется то указываем служебное слово NULL, БЕЗ КАВЫЧЕК  

 
$update_cat = mysql_query($ins_mysql_cat, $db); // обновляем таблицу  

if($update_cat){
	
	echo "Данные успешно занесены ! <br> <a href ='category_view.php' class='linkss'>Вернутся к списку обзора категорий</a>";
	
} 
	else{
	
	echo "ERROR";
	
}
// ---------------------      ВСТАВКА В ТАБЛИЦУ БАЗЫ ДАННЫХ СТАТЬИ   -------------------------------------

$art_name =$_POST[art_name];
$art_desc =$_POST[art_desc];
$art_text =$_POST[art_text];
$art_img =$_POST[art_img];
 

$ins_mysql_art = "INSERT INTO 
												`articles` (`id`, `id_category`, `article_name`, `article-text`, 'article_keywords' , 'article_description' , 'article_image')
							VALUES (NULL, NULL , '$art_name', '$art_text', NULL , '$art_desc' , '$art_img')";


UPDATE `articles` SET `article_name`='$art_name', `article_text`='$art_text',   `article_description`='$art_desc', `article_image`='$art_img' WHERE (`id`='1')


$update_art = mysql_query($ins_mysql_art, $db); // обновляем таблицу  


if($update_art){
	
	echo "Данные успешно занесены ! <br> <a href ='article_view.php' class='linkss'>Вернутся к списку обзора статей</a>";
	
} 
	else{
	
	echo "ERROR";
	
}


?>
