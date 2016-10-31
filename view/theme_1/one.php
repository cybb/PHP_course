<?php

foreach($content as $value){ ?>
	 
	 
            
             
              <article>
                  <div class="photo">
                      <img src="<?= VIEW .'images/' . $value[thumbnails];  ?>" alt="">
                      <div class="date">
                          <span class="day"><?= data_formatting($value['date'],'d')  ?></span>
                          <span class="mon"><?= data_formatting($value['date'],'m')  ?></span>
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

?>                    
         