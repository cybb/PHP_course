  <?php include "header.php";?>
	<?php include "content.php";?>
             
             
 						 	<?php 
		
		$queryArt = mysql_query("select * from articles" , $db);
		while($row1 = mysql_fetch_array($queryArt)){ 
			
			 echo "<article>
                  <h1>" . $row1[article_name] . "</h1>
                  <div class='photo'>
                      <img src='images/" . $row1[article_image] . "'> .
                  </div>
                  <div class='text'>
                      <p>" . $row1[article_text] . "                          
                      </p>
                  </div>
				  <div class='separator'></div>
                  <div class=\"more\">ReadMore</div>
              </article>";  
		}
		
		
		
		?>

  
             
             
 
             
 
             
	<?php include "footer.php";?>