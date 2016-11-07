<?php 
 
echo 
  '<div class="table"> 
                  <table>
                    <tr>
                        <th class="number">№пп</th>
                        <th class="title">Заголовок статьи</th>
                        <th class="rubricator">Рубрика</th>
                        <th class="datepub">Дата публикации</th>
                        <th class="status"></th>
                        <th class="delete"></th>
                    </tr>';

 				$count=1;

				
        foreach($for_single as $value){
					
					$data = data_format($value['date']);
					$bg = content_format($value['id_status'],'class');
				  $icon = content_format($value['id_status'],'icon');
					echo 
											  '<tr class="'.$bg.'">
                        <td>'.$count.'</td>  
                        <td>
                            <a href="#">'.$value['title']. '</a>
                        </td>  
                        <td>'.$value['name_category'].'</td>  
                        <td>'.$data.'</td>  
                        <td><i class="fa '.$icon.'" aria-hidden="true"></i>
                        </td>  
                        <td>
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </td>  
                    </tr>';
					
					 $count++; 
					 
				}              
                    
                   
           echo  '</table></div>';

 
						 
						 
						 
						 
						 

?>