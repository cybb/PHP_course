  <?php include "header.php";?>
	<?php include "content.php";?>
             
             
 	<?php 
		
		$query_articles = mysql_query("select * from articles" , $db);//запрос на выборку всех данных из таблицы АРТИКЛЬ

		while($array_articles = mysql_fetch_array($query_articles)){ //преобразуем в массив и записыв в переменную array_Art
			
			
			//выводим циклом построчно данные из массива и подставляем в нужные области 
			 echo "<article>
                  <h1>" . $array_articles[article_name] . "</h1>
                  <div class='photo'>
                      <img src='images/" . $array_articles[article_image] . "'> .
                  </div>
                  <div class='text'>
                      <p>" . $array_articles[article_text] . "                          
                      </p>
                  </div>
				  <div class='separator'></div>
                 <div class='more'><a href='more.php?article_id=" . $array_articles[id] . "'>Подробнее...</a></div>
              </article>";  // в ссылку подставляем ID  записиси которой соответствует ее ID в таблице через выборку из массива
		} 
		
		?> 
             
	<?php include "footer.php";?>