<? include "../../database.php";
   include "../../models/AGGREGATED_FINANCIAL_DATA/functions.php";
$array= $_GET['array'];
$ssn = $_POST[ 'ssn'];
$year = $_POST[ 'year'];
$gross_year_earnings = $_POST['gross_year_earnings'];
$total_year_holdings = $_POST['total_year_holdings'];
$test = valid($ssn , $year, $gross_year_earnings, $total_year_holdings);
if ($test){
	$suc =  insert(intval($ssn) , intval($year), floatval($gross_year_earnings), floatval($total_year_holdings));
 	if ($suc){
                include "../../views/inserted.php";
        }
        else {
                include "../../views/error_db.php";
        }
}
else{
        include "../../views/error.php";
}
?>
