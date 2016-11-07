<?php 
 
echo 
	
  '<div class="tables"> 
	
     <table>
         <tr>
            <th class="numbers">№пп</th> 
            <th class="rubricators">Рубрика</th> 
            <th class="rubricators">Количество статей</th> 
						
         </tr>';

 				$count=1;
				 

				
        foreach($for_category as $value){ 
					 
echo 
		   '<tr >
           <td>'.$count.'</td>  
	         <td><a href="#">'.$value['name_category'].'</a></td>
					 <td>'. $value['col'].'</td> 
				</tr>';
			
					
				$count++; 
					
				}   

            
echo   
		'</table>
		
	</div>';

 
						 
						 
						 
						 
						 

?>