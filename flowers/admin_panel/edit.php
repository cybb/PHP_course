<?php include "header.php";?>
<?php include "content.php";?>
<?php

$catch_id = $_GET['id_edit'];
$id = $_GET['id'];


 if($id == 1){  
 
$query_cat = mysql_query("SELECT
									*
									FROM
									categories
									WHERE categories.id = " . $catch_id );

$array_cat = mysql_fetch_array($query_cat);

	 echo 	"<form action='update.php' name='myform' class='form_adm' method='POST' enctype='multipart/form-data'>
									<input type='hidden' value='categories' name='id'>
									<label for='name_cat'>Название категории
										<input type='text' name='cat_name' id='name_cat' value='" . $array_cat['category_name']." '>
									</label>

									<label for='desc'>Описание категории
										<textarea name='cat_desc' id='desc' cols='30' rows='10'>" . $array_cat['category_description']."</textarea>
									</label> 
									
									<label for='img'>Иллюстрация к категории
										<input name='cat_img' type='file' id='img'> 
									</label>  
									
									<div class='control'>
										<input type='submit' name='sub' id='' value='редактировать'>
										<input type='reset' name='res' id='' value='ОЧИСТИТЬ'>
									</div>
									
									<input type='text' style='visibility:hidden' name='cat_id' value='" . $array_cat['id']." '>
								 </form>";
	
 }  else if ($id == 2) {
	  $query_art = mysql_query("SELECT
									*
									FROM
									articles
									WHERE articles.id = " . $catch_id );

    $array_art = mysql_fetch_array($query_art);
	 
	 
	 
	 
	 echo  			"<form action='update.php' name='myform' class='form_adm' method='POST' enctype='multipart/form-data'>
									<input type='hidden' value='articles' name='id'>
									<label for='name_art'>Название статьи
										<input type='text' name='art_name' id='name_art' value='".$array_art['article_name']."'>
									</label>

									<label for='desc'>Описание статьи
										<textarea name='art_desc' id='desc' cols='30' rows='10'>" . $array_art['article_description']."</textarea>
									</label>  
									
									<label for='img'>Иллюстрация к статье
										<input name='art_img' type='file' id='img'> 
									</label>  
									
									<div class='control'>
										<input type='submit' name='sub' id='' value='редактировать'>
										<input type='reset' name='res' id='' value='ОЧИСТИТЬ'>
									</div>

										<input type='text' style='visibility:hidden' name='art_id' value='" . $array_art['id']." '>
										
								</form>";  
	 
 }
 

?>


 