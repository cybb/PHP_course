
             <div class="block menu">
                 <h3>Рубрики</h3>
                 <ul>
                   
                    <?php 
									 
									 foreach($navigation as $value){ 
										 
										 echo '<li><a href="?view=category&id=' .$value[id].'">' . $value[name_category] . '</a></li>'; 
										 
									 } 
									 
									 ?> 
                    	 
                 </ul>
             </div>
             
          </div>
                          
          <div class="right col-lg-9 col-md-9 col-sm-9">