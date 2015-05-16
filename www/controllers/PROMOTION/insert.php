<? include "../../database.php";
   include "../../models/PROMOTION/functions.php";
$array =$_GET['array'];
$ssn = $_POST[ 'ssn'];
$new_pos = $_POST[ 'new_pos'];
$year= $_POST['year'];
$day= $_POST['day'];
$month= $_POST['month'];

$date = fix_date($day,$month,$year);
$test = valid($ssn,$new_pos,$date);
if ($test){
	$suc =	insert(intval($ssn),intval($new_pos),$date);
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
