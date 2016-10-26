<?php 

defined ('ACCESS') or die ('Попыка обратиться к файлу напрямую !'); // проверка ЗАКЛАДКИ

// адрес фронтальной части сайта
define ( 'PATH' , 'index.php');

//адрес к файлу КОНТРОЛЛЕРА
define ( 'CONTROLLER' , 'controller/controller.php');

//адрес к файлу МОДЕЛИ
define ('MODEL' , 'model/model.php');

//адрес к папке ВИД
define ('VIEW' , 'view/theme_1/');

// путь к ГЛАВНОМУ файлу ТЕМЫ ОФОРМЛЕНИЯ
define('LINK_INDEX' , VIEW . 'index.php');

//путь к СТИЛЯМ
define ('LINK_CSS' , VIEW . 'styles/style.css');

// путь к БУТСТРАПУ
define ('LINK_BOOTSTRAP', VIEW . 'styles/bootstrap-grid-3.3.1.min.css');

// путь к МЕДИА
define ('LINK_MEDIA' , VIEW . 'styles/media.css');

 



//\\ -----------  СЕРВЕР БАЗЫ ДАННЫХ И ПОДКЛЮЧЕНИЕ  ------------- //\\



define ('HOST' , 'localhost');

define('USER' , 'root');

define ('PASSWORD' , '');

define ('DB' , 'travel');

mysql_connect(HOST , USER , PASSWORD) or die ('Подключение к базе данных не удалось');

mysql_select_db(DB) or die ('Подключение к базе данных не удалось');

mysql_query(' SET NAMES "UTF8" ') or die ('Неверная кодировка');



//------------------------------------------------------//

define ('AUTHOR' , 'DS_Karpenko');

define ('TITLE' , 'Туристическое агенство "4 сезона"');







?>