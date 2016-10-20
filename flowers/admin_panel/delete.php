  <?php 
include "header.php";
include "../config.php";

$del_cat = $_GET['del']; 

if($del_cat==1){
	
	$id_zapisi = $_GET['id_zapisi'];

  $query = "DELETE FROM categories
						WHERE id = $id_zapisi "; 

  $delete_str = mysql_query ($query , $db); 

		if($delete_str){
	
			echo "<div class='alert'> Данные из таблицы Категории успешно удалены ! <br> <br> 
			<a href ='category_view.php' class='linkss'>Вернутся к списку обзора категорий</a></div>";

		}  
	
} else if($del_cat==2){ 
	
			$id_zapisi = $_GET['id_zapisi'];

			$query = "DELETE FROM articles
								WHERE id = $id_zapisi "; 

			$delete_str = mysql_query ($query , $db); 

				if($delete_str){

					echo "<div class='alert'> 
			Данные из таблицы Статьи успешно удалены ! <br> <br>
			<a href ='article_view.php' class='linkss'>Вернутся к списку обзора Статей</a>
			</div>"; 
					
				}  
	
	
	
} else {
	
	echo " Ошибка удаления ! ";
	
}




























?>
   