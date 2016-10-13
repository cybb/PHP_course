 
<div class="row content">
<div class="left col-lg-3 col-md-3 col-sm-4 col-xs-12">
	<ul class="menu">
               
		<?php 
		
			$query_Category = mysql_query("select id , category_name from categories" , $db); 
		//в переменную $query_Category записываем данные запроса из таблицы ?>
		
			<li><a href="index.php">Главная админ панели</a></li> <!-- создаем ссылку на главную -->
			<li><a href="category_view.php">Категории</a></li> <!-- создаем ссылку на категории -->
			<li><a href="article_view.php">Статьи</a></li> <!-- создаем ссылку на статьи -->
			 
		 
		 
	</ul>
</div>
                          
<div class="right col-lg-9 col-md-9 col-sm-8 col-xs-12">
             