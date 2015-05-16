<?	
	include "../../database.php";
	include "../../models/AGGREGATED_FINANCIAL_DATA/functions.php";

	$SSN = $_POST[ "SSN" ];
	$year = $_POST[ "year" ];

		
	$modeButton = "Ενημέρωση";

	$res = getFields( $SSN, $year);
	
	foreach ($res as $row) {
		$gross_year_earnings = $row[ 'gross_year_earnings' ];
		$total_year_holdings = $row[ 'total_year_holdings' ];
	}

	include "../../views/AGGREGATED_FINANCIAL_DATA/update.php";
?>
