<?php include "header.php";?>
<?php include "content.php";?>
<?php

$catch_art=$_GET[art_id];
 
$query_art = mysql_query("SELECT
									*
									FROM
									articles
									WHERE articles.id = " . $catch_art );

$array_art = mysql_fetch_array($query_art);

echo "<form action='update.php' name='myform' class='form_adm' method='POST' enctype='multipart/form-data' >

				<label for='name_art'>Название статьи
					<input type='text' name='art_name' id='name_art' value='".$array_art[article_name]. "'>
				</label>
				
				<label for='desc'>Описание статьи
					<textarea name='art_desc' id='desc' cols='30' rows='10'>" .$array_art[article_description]."</textarea>
				</label> 	
				
				<label for='desc'>Текст статьи
					<textarea name='art_text' id='desc' cols='30' rows='10'>" .$array_art[article_text]."</textarea>
				</label> 
				
				<label for='img_art'>Иллюстрация к  статье
					<input type='file' name='art_img' id='img_art' value='".$array_art[article_image]. "'>
				</label>
				
				<div class='control'>
					<input type='submit' name='sub' id='' value='ОБНОВИТЬ'>
					<input type='reset' name='res' id='' value='ОЧИСТИТЬ'>
				</div>
				
			</form>" 

?>
