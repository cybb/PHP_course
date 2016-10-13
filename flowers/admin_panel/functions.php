<?php
function cons($pole, $order) {

	if ($pole!="" or  $order!="") {
		$stroka='SELECT	articles.article_name, categories.category_name FROM articles, categories WHERE articles.id_category = categories.id ORDER BY '.$pole.' '.$order;
	}
	else 
	{
		$stroka = "SELECT 	
		 																	articles.article_name, 								categories.category_name	
																		FROM 
																			articles ,categories	
																		WHERE						
																			articles.id_category = categories.id";
	}

	
	
$query_table = mysql_query($stroka);	
	 
return $query_table;	
}
?>