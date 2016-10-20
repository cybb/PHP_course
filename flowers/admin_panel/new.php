<?php include "header.php";?>
<?php include "content.php";?>
		

		<?php

    $cath_new_id = $_GET['new'];

		switch ($cath_new_id){
				
			case 1 :  echo 
									"<form action='new_sign.php?id=cat' name='myform' class='form_adm' method='POST' enctype='multipart/form-data'>

									<label for='name_cat'>Название категории
										<input type='text' name='cat_name' id='name_cat' value=' '>
									</label>

									<label for='desc'>Описание категории
										<textarea name='cat_desc' id='desc' cols='30' rows='10'></textarea>
									</label> 
									
									<label for='img'>Иллюстрация к категории
										<input name='cat_img' type='file' id='img'> 
									</label>  

									<div class='control'>
										<input type='submit' name='sub' id='' value='ОБНОВИТЬ'>
										<input type='reset' name='res' id='' value='ОЧИСТИТЬ'>
									</div>

								 </form>"; break ;
				
			case 2 :  echo 
									"<form action='new_sign.php?id=art' name='myform' class='form_adm' method='POST' enctype='multipart/form-data'>

									<label for='name_art'>Название статьи
										<input type='text' name='art_name' id='name_art' value=' '>
									</label>

									<label for='desc'>Описание статьи
										<textarea name='art_desc' id='desc' cols='30' rows='10'></textarea>
									</label>  
									
									<label for='select' style='color:#000;'> Категория 
										<select name='categ_id' id='select'>   
											<option value='1'>Кактусы</option>
											<option value='2'>Папоротники</option>
											<option value='3'>Традесканции</option>
											<option value='4'>Фиалки</option> 
										</select> 
									</label>  
									
									<label for='img'>Иллюстрация к статье
										<input name='art_img' type='file' id='img'> 
									</label>  
									
									<div class='control'>
										<input type='submit' name='sub' id='' value='ОБНОВИТЬ'>
										<input type='reset' name='res' id='' value='ОЧИСТИТЬ'>
									</div>

								</form>"; break ; 
				
		} 
	?>
	
<?php include "../footer.php";?>