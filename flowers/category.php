  <?php include "header.php";?>
	<?php include "content.php";?>
	
  <?php 
 $category_id=$_GET[cat];
	
	$query = mysql_query("
							select category_name, category_description, category_image
								from categories
									where id =".  $category_id , $db);

	$rez = mysql_fetch_array($query);

?>          
              
              <article>
                  <h1>категория: <?php echo $rez[category_name];?></h1>
                  <div class="photo">
                      <img src="images/<?= $rez[category_image]; ?>" alt="">
                  </div>
                  <div class="text">
                      <p><?php echo $rez[category_description];?></p>
                  </div>
                 
              </article>
<h2>Статьи данного раздела: </h2>            
    <?php
 
			
			$queryIdArt = mysql_query("SELECT * FROM articles WHERE id_category=  $category_id", $db);
		
				while($rezz = mysql_fetch_array($queryIdArt)){
					
					
					 echo "<article>
                  <h1>" . $rezz[article_name] . "</h1>
                  <div class='photo'>
                      <img src='images/" . $rezz[article_image] . "'> .
                  </div>
                  <div class='text'>
                      <p>" . $rezz[article_text] . "                          
                      </p>
                  </div>
				  <div class='separator'></div>
                  <div class='more'><a href='more.php'>ReadMore</a></div>
              </article>";  
		}
					
					

    ?>        
	 
             
 
	<?php include "footer.php";?>
	