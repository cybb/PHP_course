<?php include "header.php";?>
<?php include "content.php";?>
		

		<?php
			echo "<form action='update.php' name='myform' class='form_adm'   	method='post' enctype='multipart/form-data'>
				<label for='name_cat'>Название категории
					<input type='text' name='cat_name' id='name_cat' value=' '>
				</label>
				<label for='desc'>Описание категории
					<textarea name='cat_desc' id='desc' cols='30' rows='10'></textarea>
				</label> 
				<label for='u'>Выбрать изображение</label> 
				<input type='file' name='loads' id='u'>
				
				<div class='control'>
					<input type='submit' name='sub' id='' value='ОБНОВИТЬ'>
					<input type='reset' name='res' id='' value='ОЧИСТИТЬ'>
				</div>
				
			</form>" 
				
	?>
	
<?php include "../footer.php";?>