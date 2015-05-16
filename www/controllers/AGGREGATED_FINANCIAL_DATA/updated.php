<?
	include "../../database.php";
	include "../../models/AGGREGATED_FINANCIAL_DATA/functions.php";
 
	$SSN = $_POST[ "SSN" ];
	$year = $_POST[ "year" ];
	$gross_year_earnings = $_POST[ "gross_year_earnings" ];
	$total_year_holdings = $_POST[ "total_year_holdings" ];
	

	$key1 = $_GET[ "SSN" ];
	$key2 = $_GET[ "year" ];

	$res = update($SSN, $year, $gross_year_earnings, $total_year_holdings, $key1, $key2 );
	include "../upd_footer.php";

