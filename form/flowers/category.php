  <?php include "header.php";?>
	<?php include "content.php";?>
	
  <?php 
  
 $category_id=$_GET[cat_id];//в переменную отлавливаем ID записи записи из таблицы КАТЕГОРИИ, которое будет соответствовать значению ключа cat_id который мы прописали в фйле контент у ссылке, после знака ?
	
	$query_category_content = mysql_query("
							select category_name, category_description, category_image
								from categories
									where id = $category_id ", $db);
// запрос на получение названия категории, описания категории, изображения категории из таблицы КАТЕГОРИИ, где ID равен отловленному значению ID категории/, тоесть  соответсьвующему отловленному ID будет соответствовать остальные данные записи этого ID 

	$array_category_content = mysql_fetch_array($query_category_content); // создаем  ассоциативный массив из полученных данных запроса 

?>          
              
		<article>
			<h1>категория: <?php echo $array_category_content[category_name];?></h1><!-- выбираем из массива имя категории-->
			
			<div class="photo">
				<img src="images/<?= $array_category_content[category_image]; ?>" alt=""><!-- выбираем из массива имя картинки-->
			</div>
			
			<div class="text">
				<p><?php echo $array_category_content[category_description];?></p><!-- выбираем из массива описание категории-->
			</div> 
		</article>
		
		<h2>Статьи данного раздела: </h2>  
		
    <?php 
			
			$query_articles = mysql_query("SELECT * FROM articles WHERE id_category =  $category_id", $db);
		//запрос на получение всех строк из таблицы АРТИКЛь где ID равен отловленному ID
		
			while($array_articles = mysql_fetch_array($query_articles)){//записываем в переменную массив из полученных данных 
				echo 
				"<article>
                  <h1>" . $array_articles[article_name] . "</h1> 
                  <div class='photo'>
                      <img src='images/" . $array_articles[article_image] . "'> .
                  </div>
                  <div class='text'>
                      <p>" . $array_articles[article_text] . "                          
                      </p>
                  </div>
				  <div class='separator'></div>
                  <div class='more'><a href='more.php?article_id=" . $array_articles[id] ."'>Подробнее...</a></div>
              </article>";  
		}
					
					

    ?>        
	 
             
 
	<?php include "footer.php";?>
	