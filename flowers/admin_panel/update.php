<?php // добавление записи в таблицу SQL
 
include "../config.php"; // подключае конфиг с ID подключением
 
 
$title_cat = $_GET[cat_name]; //отлавливаем из формы данные из поля name="cat_name"
$desc_cat = $_GET[cat_desc]; //отлавливаем из формы данные из поля name="cat_desc"

$ins_query = "INSERT INTO 
												`categories` (`id`, `category_name`, `category_description`, `category_image`)
							VALUES (NULL, '$title_cat', '$desc_cat', NULL)";


// создаем переменную в которую помещаем текст запроса sql INSERT - вставить INTO - в таблицу 'имя таблицы' , далее открываем скобки и прописываем В КАВЫЧКАХ имена ПОЛЕЙ,
//затем через VALUES - значения тех полей из формы которые мы хоти добавить в новую строку. Открываем скобки и в качестве параметров прописываем запись в ТО ПОЛЕ КОТОРОЕ ЕМУ СООТВЕТСТВУЕТ. если это поле не используется то указываем служебное слово NULL, БЕЗ КАВЫЧЕК  

 
$update = mysql_query($ins_query, $db); // обновляем таблицу 




if($update){
	
	echo "Данные успешно занесены ! <br> <a href ='category_view.php' class='linkss'>Вернутся к списку обзора категорий</a>";
	
} 
	else{
	
	echo "ERROR";
	
}





?>
