<? include "../../database.php";
   include "../../models/EMPLOYEE/functions.php";

$array =$_GET['array'];
$ssn = $_POST[ 'ssn'];
$name = $_POST[ 'name'];
$surname = $_POST[ 'surname'];
$street = $_POST[ 'street'];
$number = $_POST[ 'number'];
$PC = $_POST[ 'PC'];
$marital_status = $_POST[ 'marital_status'];
$children_no = $_POST[ 'children_no'];
$special = $_POST[ 'spec'];
$education = $_POST[ 'education'];
$day_start = $_POST['day_start'];
$pid = $_POST['pid'];
$month_start = $_POST['month_start'];
$year_start = $_POST['year_start'];
$day_final = $_POST['day_final'];
$month_final = $_POST['month_final'];
$year_final = $_POST['year_final'];

$sdate = fix_date($day_start,$month_start,$year_start);
$fdate = fix_date($day_final,$month_final,$year_final);

$test = valid($ssn,$name,$surname, $street,$number,$PC,$marital_status,$children_no,$special,$education,$pid,$sdate);

if ($test){
	$suc =	insert(intval($ssn),$name,$surname,$street,$number,intval($PC),$specialization,$education,$marital_status,intval($children_no),intval($pid),$sdate,$fdate);
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
