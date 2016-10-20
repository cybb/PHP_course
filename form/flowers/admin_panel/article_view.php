  <?php include "header.php";?>
  <?php include "content.php";
        include "functions.php";
         $sort = $_GET['sort'];?>

    
			
		  
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

   
   
				
				
	     
    
	echo "
	 <table class='table_adm'>
			<thead>
				<tr>
					<td rowspan='2'>№</td>
					<td rowspan='2'>Название статьи</td>
					<td rowspan='2'>Категории</td>
					<td colspan='2'>Операции</td> 
				</tr> 
				
				<tr>
					<td>редактировать</td>
					<td>удалить</td> 
				</tr>
			</thead>";
			
			
			
	 
//		 $query_table_art = cons("","");
//		 
//		 
//		 
//		 
//		 switch($sort){
//			 case 1 : $query_table_art = cons ("articles.id", "ASC");             break;
//			 case 2 : $query_table_art = cons ("categories.category_name", "ASC");break;
//			 case 3 : $query_table_art = cons ("articles.article_name", "DESC");  break;
//		 }


		$query_id_art = mysql_query("SELECT
																		*
																		FROM
																		articles", $db);


		 



		$num =1;								
		while($array_table3 = mysql_fetch_array($query_id_art)){ 
			
			echo   "<tbody>
								<tr>
									<td>" . $num . "</td>
									<td> <a href='#'>". $array_table3[article_name] . "</a></td>
									<td>" . $array_table3[id_category] . "</td> 
									<td><a href='article_edit.php?art_id=" . $array_table3[id]  .  "'>править</a></td>
									<td><a href='#'>удалить</a></td>
								</tr>
							</tbody>"; 
		  $num++;
		} 
			 
		 
		 
	echo "</table>"  
		
	?>	
	
	 
	
         



		   
	 