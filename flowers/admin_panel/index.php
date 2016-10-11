  <?php include "header.php";?>
  <?php include "content.php";?>
             
             
 	<?php  
	$count_category = mysql_query('SELECT
										Count(categories.id) 
								   AS  colichestvo
									FROM
									categories',$db);
	$array_count_categories = mysql_fetch_array($count_category); 
	echo "Количество записей в таблице Категории -- " . $array_count_categories[colichestvo] . "<br>". "<br>";
	
	$count_articles = mysql_query('SELECT
									Count(articles.id)
									AS coli4estvo
										FROM
										articles
										',$db);
	$array_count_articles = mysql_fetch_array($count_articles); 
	echo "Количество записей в таблице Статьи -- " . $array_count_articles[coli4estvo]; 
	?> 
	
	 <table class="table_adm">
			<thead>
				<tr>
					<td>№</td>
					<td>Название категории</td>
					<td>К-во Статей</td>
				</tr> 
			</thead>
			
	<?php
		 $query_table = mysql_query('SELECT
											categories.category_name,
											Count(articles.id) AS colvo
									FROM
											articles ,
											categories
									WHERE
											articles.id_category = categories.id
									GROUP BY
											categories.id', $db);
		$num =1;								
		while($array_table = mysql_fetch_array($query_table)){ 
			echo "<tbody>
				<tr>
					<td>" . $num . "</td>
					<td>" . $array_table[category_name]. "</td>
					<td>" . $array_table[colvo]. "</td>
			     </tr>
				 </tbody>"; 
		  $num++;
		} 
	?>		 
		 
		 
	</table>   
	
	 
	
         



		   
	 