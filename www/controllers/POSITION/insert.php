<? include "../../database.php";
   include "../../models/POSITION/functions.php";

$array =$_GET['array'];
$pid = $_POST[ 'pid'];
$department = $_POST[ 'department'];
$role = $_POST['role'];
$number = $_POST['number'];
$is_empty = $_POST['is_empty'];
$sal_id = $_POST['sal_id'];
$ben_id = $_POST['ben_id'];

$test = valid($pid,$department,$role,$number,$is_empty,$sal_id,$ben_id);


if ($test){
	$suc =	insert(intval($pid),$department,$role,intval($number),intval($is_empty),intval($sal_id),intval($ben_id));
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
