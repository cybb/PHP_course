  <?php include "header.php";?>
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
		 $query_table_cat = mysql_query('SELECT
																			categories.category_name
																			FROM
																			categories
																			', $db);
		$num =1;								
		while($array_table2 = mysql_fetch_array($query_table_cat)){ 
			
			echo   "<tbody>
								<tr>
									<td>" . $num . "</td>
									<td>". $array_table2[category_name] . "</td>
									<td><a href='#'>править</a></td>
									<td><a href='#'>удалить</a></td>
								</tr>
							</tbody>"; 
		  $num++;
		} 
	?>		 
		 
		 
	</table>   
	
	 
	
         



		   
	 