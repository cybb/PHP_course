<?php  

echo alert_message($_SESSION['message']);

?>
 
 
 

 <form name="edit" action="" class="edit" method="post">
  
  <div> 
		<input name="title" type="text"  id="title" placeholder="ЗАГОЛОВОК" value="<?= $edit['title'] ?>">
 	</div>
 	
 	<div>
		<textarea name="description" id="" cols="20" rows="5" placeholder="текст"><?= $edit['description'] ?></textarea>
		<textarea name="full_text" id="" cols="20" rows="5" placeholder="текст"><?= $edit['full_text'] ?></textarea>
 	</div>
 	
 	<div>
 	
		<input name="date" class="datte" type="date"  id="" value="<?= $edit['date']?>"> 
		
		<select name="status" class="status"  id="">
    <?= $id_status ?>
		</select>
		
		<input name="thumbnails" class="load_img" type="text"  id="" placeholder="картинка" value="<?= $edit['thumbnails']?>">
		
 	</div>
 	
 	<select name="categories">
 	
 	<?php foreach($select_cat as $value) {  
 		if($value['id'] == $edit['id']){ 
			$selected = 'selected'; 
		} else{ 
			$selected=''; 
		}?> 
 		<option value="<?= $value['id']?>" <?= $selected; ?>><?= $value[name_category]?></option>  
 	<?php } ?> 
 		
 	</select>
 	
 	
 	<div>
		<input type="submit" name="" id="">
		<input type="reset" name="" id="">
 	</div>
 	 
 	
 	
 	
 	
 	
 	
 </form>
        


 

 