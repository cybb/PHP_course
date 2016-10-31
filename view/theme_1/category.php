						
           		
           		<ul style="list-style: none; display:flex;">
            		
             		<li style="margin:10px;"><a href="index.php">ГЛАВНАЯ ></a></li>
             		<li style="margin:10px;font-style:italic;">
             					<?php  
												$for_categories = viborka('category' , 'id' , $catch_id);
											 		foreach($for_categories as $vall)
													echo $vall[name_category]; 
											?>
								</li> 
             </ul>
<?php 
foreach($for_one as $value){ ?>  
             
            
              
             
             
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
                  
                  <div class="more">
                  	<a href="?view=single&id=<?=$value[id]?>">Читать полностью</a>
                  </div
										
              </article>
            
              
                  
 <?php 
													 } // end foreach







?>                    
         