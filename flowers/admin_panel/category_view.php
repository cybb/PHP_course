﻿  <?php include "header.php";?>
  <?php include "content.php";?>
     
	
	 <table class="table_adm">
			<thead>
				<tr>
					<td rowspan="2">№</td>
					<td rowspan="2">Название категории</td>
					<td colspan="2">Операции</td>
				</tr> 
				<tr>
					<td>редактировать</td>
					<td>удалить</td> 
				</tr>
			</thead>
			
			
			
	<?php
			 
       $query_table_cat = mysql_query('SELECT  * 	FROM  categories ', $db);
			 
			 
       $num =1;								
		while($array_table2 = mysql_fetch_array($query_table_cat)){ 
			
			echo   "<tbody>
								<tr>
									<td>" . $num . "</td>
									<td>". $array_table2[category_name] . "</td>
									<td><a href='edit.php?id=1&&id_edit=" . $array_table2[id] . "'>редактировать</a></td>
									<td><a href='delete.php?del=1&&id_zapisi=". $array_table2[id] ."'>удалить</a></td>
								</tr>
							</tbody>"; 
		  $num++;
		} 
		 
		 echo "<a href='new.php?new=1' class='new__art'> + Новая категория</a>"
	?>		 
		 
		 
	</table>   
	
	 
	
         



		   
	 