<?php

include_once 'header.php';// подключаем вырезанную шапку
include_once 'sidebar.php'; // подключаем вырезанный сайдбар

 
            
 foreach($content as $value){ ?>
	 
	 
            
             
              <article>
                  <div class="photo">
                      <img src="<?= VIEW .'images/' . $value[thumbnails];  ?>" alt="">
                      <div class="date">
                          <span class="day">15</span>
                          <span class="mon">авг</span>
                      </div>
                  </div>
                  <div class="text">
                     <h1> 
                     			<a href="?view=single&id=<?=$value[id]?>"> 
										 					<?= $value[title];?>  
												  </a>
                     </h1>
                      
                          <?= $value[description];?> 
                  </div>
                  <div class="more"><a href="?view=single&id=<?=$value[id]?>">Читать полностью</a></div>
              </article>
            
              
                  
 <?php }

	include_once 'footer.php';// подключаем вырезанный футер

?>                    
         