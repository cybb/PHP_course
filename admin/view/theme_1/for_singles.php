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
					
					$data=data_format($value['date']);
					
					if($value['id_status'] == 2){
						$bg = '<tr class="cart">';
						$icon='<i class="fa fa-times-circle" aria-hidden="true" title="В корзине"></i>';
						
					} 
					
					else if($value['id_status'] == 3){
						$bg = '<tr class="exclamation">';
						$icon='<i class="fa fa-exclamation-circle" aria-hidden="true" title="черновик"></i>';
					}  
					
					else{
						$bg='<tr>';
						$icon = '<i class="fa fa-check-circle" aria-hidden="true" title="Опубликовано"></i>';
					}
					
					
					echo 
											 $bg.
                        '<td>'.$count.'</td>  
                        <td>
                            <a href="#">'.$value['title']. '</a>
                        </td>  
                        <td>'.$value['name_category'].'</td>  
                        <td>'.$data.'</td>  
                        <td>'.$icon.'
                        </td>  
                        <td>
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </td>  
                    </tr>';
					
					 $count++;
					
					 
				}              
                    
                   
           echo       '</table></div>'

?>