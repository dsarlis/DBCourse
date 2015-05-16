<?
        include "../../database.php";
        include "../../models/PROMOTION/functions.php";

        $SSN = $_POST[ "SSN" ];
	$day = $_POST[ "day" ];
        $month = $_POST[ "month" ];
        $year = $_POST[ "year" ];

        $date = fix_date($day, $month, $year);
        $modeButton = "Ενημέρωση";

        $res = getFields( $date, $SSN);


        foreach ($res as $row) {
                $new_pos = $row[ 'new_pos' ];
        }

	

        include "../../views/PROMOTION/update.php";
?>
