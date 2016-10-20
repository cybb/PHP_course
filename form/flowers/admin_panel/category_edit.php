<?php include "header.php";?>
<?php include "content.php";?>
<?php

$catch=$_GET[cat_id];
 
$query_form = mysql_query("SELECT
									categories.category_name,
									categories.category_description,
									categories.id
									FROM
									categories
									WHERE categories.id = " . $catch );

$array_form = mysql_fetch_array($query_form);

echo "<form action='update.php' name='myform' class='form_adm'>
				<label for='name_cat'>Название категории
					<input type='text' name='cat_name' id='name_cat' value='".$array_form[category_name]. "'>
				</label>
				<label for='desc'>Описание категории
					<textarea name='cat_desc' id='desc' cols='30' rows='10'>" .$array_form[category_description]."</textarea>
				</label> 
				
				<div class='control'>
					<input type='submit' name='sub' id='' value='ОБНОВИТЬ'>
					<input type='reset' name='res' id='' value='ОЧИСТИТЬ'>
				</div>
				
			</form>" 

?>


 