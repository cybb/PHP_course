<?php
 
 foreach($single as $value){
 
 
  echo    
              '<article>
                 
                  <div class="photo">
                      <img src="view/theme_1/images/' . $value[thumbnails] . '" alt="">
                      
                      <div class="date">
                          <span class="day">'. data_formatting($value['date'],'d').'</span>
                          <span class="mon">'. data_formatting($value['date'],'m').'</span>
                      </div>
                  </div>
                  
                  <div class="text">
                     <h1> 
                     			<a href="?view=single&id=' .$value[id].  '">' 
										 					 .$value[title] .  
												  '</a>
                     </h1>'
                      
                         . $value[full_text] .
                 ' </div> 
                  
              </article>' ;            
              
                  
  
	 			 

 }




?>                               
         