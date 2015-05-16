<? include "../../database.php";
   include "../../models/MEDIA/functions.php";

$array = $_GET['array'];
$media_id = $_POST[ 'media_id'];
$name = $_POST[ 'name'];
$kind = $_POST['kind'];
$test = valid($media_id,$name,$kind);
if ($test){
	$suc =	insert(intval($media_id),$name,$kind);
	if ($suc){
		include "../../views/inserted.php";
	}	
	else {
		include "../../views/error_db.php";
	}		
}
else {	
	 include "../../views/error.php";
}

?>
