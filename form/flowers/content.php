 
<div class="row content">
<div class="left col-lg-3 col-md-3 col-sm-4 col-xs-12">
	<ul class="menu">
               
		<?php 
		
			$query_Category = mysql_query("select id , category_name from categories" , $db); 
		//в переменную $query_Category записываем данные запроса из таблицы ?>
		
			<li><a href="index.php">Главная</a></li> <!-- создаем ссылку на главную -->
			 
		<?php
			while($array_Category = mysql_fetch_array($query_Category)){// создаем переменную $array_Category в которую записываем массив из одной строчки, которая состоит из данных которые мы запросили из таблицы БД (в переменной $query_Category) 
			
			echo "<li><a href='category.php?cat_id=" . $array_Category[id] . " '> ";//эта ссылка создаст запрос методом GET в результате чего сервер создаст глобальный массив $_GET где один из его ключей будет "cat" а значение будет соответствовать ID записи таблицы КАТЕГОРИИ
			
			echo $array_Category[category_name] . "</a></li>";// здесь в ссылке выводим имя категории
			
				// вывели одну строчку. цикл заходит на новый круг. 
			} 
		?> 
		 
	</ul>
</div>
                          
<div class="right col-lg-9 col-md-9 col-sm-8 col-xs-12">
             