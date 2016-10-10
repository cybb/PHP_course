<?php include "header.php";?>
<?php include "content.php";?>

 <?php 
 
   $article_id=$_GET[article_id];//в переменную записываем значение ключа article_id, который привязан к ссылке 

   $query_article = mysql_query("SELECT * FROM articles WHERE id= $article_id", $db);
		//запрос на получение всех строк из таблицы АРТИКЛь где ID равен отловленному $article_id
		

	$array_article = mysql_fetch_array($query_article);//записываем в переменную массив из полученных данных 
			
		echo 
			"<article>
                  <h1>" . $array_article[article_name] . "</h1>
                  <div class='photo'>
                      <img src='images/" . $array_article[article_image] . "'> .
                  </div>
                  <div class='text'>
                      <p>" . $array_article[article_text] . "                          
                      </p>
                  </div>
				  <div class='separator'></div>
                 
              </article>";  
		
					
					

    ?>        
		 


	<?php include "footer.php";?>