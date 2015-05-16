<? include "../../database.php";
   include "../../models/SALARY/functions.php";
$array =$_GET['array'];
$sal_id = $_POST[ 'sal_id'];
$wage = $_POST[ 'wage'];
$workdays = $_POST['workdays'];
$tax= $_POST['tax'];
$stamp= $_POST['stamp'];
//echo $sal_id,$wage,$workdays,$tax,$stamp;
$test = valid($sal_id,$wage,$workdays,$tax,$stamp);

if ($test){
	$suc =	insert(intval($sal_id),floatval($wage),intval($workdays),floatval($tax),floatval($stamp));
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
