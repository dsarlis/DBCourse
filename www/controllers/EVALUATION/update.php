<?
        include "../../database.php";
        include "../../models/EVALUATION/functions.php";
	$array = $_GET['array'];
        $SSN = $_POST[ "SSN" ];
        $day = $_POST[ "day" ];
	$month = $_POST[ "month" ];
	$year = $_POST[ "year" ];


	$date = fix_date($day, $month, $year);
        $modeButton = "Ενημέρωση";

        $res = getFields( $SSN, $date);


        foreach ($res as $row) {
                $score = $row[ 'score' ];
        }
	
        include "../../views/EVALUATION/update.php";
?>
