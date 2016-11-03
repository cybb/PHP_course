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
					
					
					echo 
											'<tr>
                        <td>'.$count.'</td>  
                        <td>
                            <a href="#">'.$value['title']. '</a>
                        </td>  
                        <td>'.$value['name_category'].'</td>  
                        <td>'.$value['date'].'</td>  
                        <td>
                            <i class="fa fa-check-circle" aria-hidden="true" title="Опубликовано"></i>
                        </td>  
                        <td>
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </td>  
                    </tr>';
					
					 $count++;
				}              
                    
                   
           echo       '</table></div>'

?>