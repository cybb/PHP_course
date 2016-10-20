  <?php include "../config.php";


$id_zapisi = $_GET[id_zapisi];

$query = "DELETE FROM categories
						WHERE id = $id_zapisi ";


$delete_str = mysql_query ($query , $db);


if($delete_str){
	
	echo "Данные успешно удалены ! <br> <a href ='category_view.php' class='linkss'>Вернутся к списку обзора категорий</a>";
	
} 
	else{
	
	echo "ERROR";
	
}













?>
   