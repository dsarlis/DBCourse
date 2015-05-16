<? include "../../database.php";
   include "../../models/EVALUATION/functions.php";
$array =$_GET['array'];
$ssn = $_POST[ 'ssn'];
$score = $_POST[ 'score'];
$year= $_POST['year'];
$day= $_POST['day'];
$month= $_POST['month'];

$date = fix_date($day,$month,$year);
$test = valid($ssn,$score,$date);
if ($test){
	$suc =	insert(intval($ssn),intval($score),$date);
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
