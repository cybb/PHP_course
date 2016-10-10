 
<div class="row content">
<div class="left col-lg-3 col-md-3 col-sm-4 col-xs-12">
	<ul class="menu">
               
		<?php 
			$query = mysql_query("select id , category_name from categories" , $db); 
		//в переменную $qury записываем SQl запрос из таблицы ?>

		<?php
			while($row = mysql_fetch_array($query)){// создаем переменную $row в которую записываем массив из одной строчки, которая состоит из данных которые мы запросили из таблицы БД (в переменной $query) 
			
			echo "<li><a href='category.php?cat=" . $row[id] . " '>";//эта ссылка создаст запрос методом GET в результате чего сервер создаст глобальный массив $_GET где один из его ключей будет "cat" а значение будет ID  
			echo $row[category_name] . "</a></li>";// здесь выводим имя категории
				// вывели одну строчку. цикл заходит на новый круг. 
			} 
		?> 
		
	
		
	</ul>
</div>
                          
<div class="right col-lg-9 col-md-9 col-sm-8 col-xs-12">
             