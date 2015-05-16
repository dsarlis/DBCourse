<?
	include "../../database.php";
	include "../../models/AGGREGATED_FINANCIAL_DATA/functions.php";
	$array = $_GET['array'];
	$SSN = $_POST[ "SSN" ];
	$year = $_POST[ "year" ];

	$res = deleteFrom($SSN, $year);
	if ($res){
                include "../../views/deleted.php";
	}
	else {
	  include "../../views/del_error.php";
	}
        
       
?>

