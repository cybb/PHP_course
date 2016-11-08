 <?php $id_status = select($edit['id_status']);?>

 <form name="edit" action="" class="edit">
  
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
<!--			<?= $id_status ?>-->
		</select>
		
		<input name="image" class="load_img" type="text"  id="" placeholder="картинка" value="<?= $edit['thumbnails']?>">
		
 	</div>
 	
 	
 	
 	
 	<div>
		<input type="submit" name="" id="">
		<input type="reset" name="" id="">
 	</div>
 	 
 	
 	
 	
 	
 	
 	
 </form>
        


 

 