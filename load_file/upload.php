<?php

	$file_name = $_FILES[load][name];// ключ [name] дает возможность вытянуть имя файла
	echo $file_name . ' - имя файла <br><br>';

	$file_type = $_FILES[load][type];// ключ [type] показывает тип файла и его расширение. например image/jpeg
	echo $file_type . ' - тип файла <br><br>';
  
  $file_size = $_FILES[load][size]/1024;
  echo  $file_size . ' Kb - размер файла <br><br>';

	$file_name_tmp = $_FILES[load][tmp_name];
	echo $file_name_tmp . ' - имя файла и адрес в папке tmp <br><br>';

	$file_error = $_FILES[load][error]; // ключ error возвращает код ошибки :
  echo $file_error . ' - цифра от 1 до 6 обозначает тип ошибки <br><br>';
  
  // 0 - ошибок не обнаружено. файл загружен 

	// 1 - размер принятого файла превышает максимально допустимые размеры заданные в PHPini. параметр размера устанавливается администратором сервера

	// 2- размер загружаемого файла превысил значение указанное в HTML-коде (атрибут size=" " у тега <input>)
  
	// 3 - файл получен сервером частично

	// 4 - файл вообще не был загружен. Глобальный массивсодержит пустые знаяения

	// 6 - отсутствует временная папка tmp на сервере




 

//------------------------------------------------------------------------


// проверка на загружаемый тип файла

		if ($file_type !== 'image/jpeg' && $file_type !== 'image/png' ){
		echo 'Данный тип файла загружать нельзя';
		exit;
	} 
		

//---------------------------------------------------------------------------

	$url = 'img/';
	
	move_uploaded_file( $_FILES[load][tmp_name] , $url.$file_name );// функция перемещения загруженного файла. 
	// В качестве параметров указываем:
	// ПЕРВОЕ - это отловленный из массива адрес и имя файла во временной папке. 
	// ВТОРОЕ - это папка и имя файла. Создали переменную в которую поместили имя папки где будет находится файл и склеили его с отобранным ранее из масиива в переменную именем файла.





?>