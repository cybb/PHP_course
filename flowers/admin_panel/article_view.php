  <?php include "header.php";?>
  <?php include "content.php";
        include "functions.php";
    

 $sort = $_GET['sort']; ?> 

    
			
		  
 <?php 

	$click = " <ul class='sort'>
							<li><a href='?sort=1'> по дате</a></li>							
							<li><a href='?sort=2'>по категории</a>  </li>
							<li><a href='?sort=3'>по алфавиту</a></li>
			      </ul> ";

 

		switch($sort){
			 
		 case 1 :  $click = "<ul class='sort'>
																<li style='background:red;padding:10px;'>  по дате</li>							
																<li><a href='?sort=2'>по категории</a>  </li>
																<li><a href='?sort=3'>по алфавиту</a></li>
			        							</ul> ";break;
			 
		 case 2 : $click = "<ul class='sort'>
		 										<li><a href='?sort=1'> по дате</a></li>
		 								   <li style='background:red;padding:10px;'>по категории</li>
										   <li><a href='?sort=3'>по алфавиту</a></li></ul>";break;
			 
		 case 3 : $click = "<ul class='sort'>
		 									 <li><a href='?sort=1'> по дате</a></li>
		 								   <li><a href='?sort=2'>по категории</a>  </li>
										   <li style='background:red;padding:10px;'> по алфавиту </li></ul>";break; 
			 
    }  

 echo $click;

 ?>  
   
				
	<?php 
 
  echo "<a href='new.php?new=2' class='new__art'> + Новая статья</a>"

?>			
	     
    
	
	 <table class="table_adm">
			<thead>
				<tr>
					<td rowspan="2">№</td>
					<td rowspan="2">Название статьи</td>
					<td rowspan="2">Категории</td>
					<td colspan="2">Операции</td> 
				</tr> 
				
				<tr>
					<td>редактировать</td>
					<td>удалить</td> 
				</tr>
			</thead>
			
			
			
	<?php 
		
			$query_articles ="SELECT
												articles.article_name,
												categories.category_name,
												articles.id
												FROM
												articles ,
												categories
												WHERE
												articles.id_category = categories.id";
		
		
		
		
		switch($sort){
				
			case 1 : $query_articles = "SELECT
												articles.article_name,
												categories.category_name,
												articles.id
												FROM
												articles ,
												categories
												WHERE
												articles.id_category = categories.id
												ORDER BY
												articles.id ASC"  ; break;
				
			case 2 : $query_articles =  " SELECT
												articles.article_name,
												categories.category_name,
												articles.id
												FROM
												articles ,
												categories
												WHERE
												articles.id_category = categories.id
												ORDER BY
												categories.category_name ASC" ;break;
				
			case 3 :  $query_articles =  "SELECT
												articles.article_name,
												categories.category_name,
												articles.id
												FROM
												articles ,
												categories
												WHERE
												articles.id_category = categories.id
												ORDER BY
												articles.article_name DESC" ;break; 
		}
		
	   $query_art = mysql_query($query_articles , $db);

  
		$num =1;		

		while($array_table3 = mysql_fetch_array($query_art)){ 
			
			echo   "<tbody>
								<tr>
									<td>" . $num . "</td>
									
									<td> <a href='#'>". $array_table3['article_name'] . "</a></td>
									
									<td>" . $array_table3['category_name'] . "</td> 
									
									<td><a href='edit.php?id=2&&id_edit=" . $array_table3['id'] . "'>редактировать</a></td>
									
										<td><a href='delete.php?del=2&&id_zapisi=". $array_table3[id] ."'>удалить</a></td>
								</tr>
							</tbody>"; 
		  $num++;
		} 
	?>		 
		 
		 
	</table>   
	
	 
	
         



		   
	 