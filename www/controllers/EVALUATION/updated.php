<?
        include "../../database.php";
        include "../../models/EVALUATION/functions.php";

        $SSN = $_POST[ "ssn" ];
        $day = $_POST[ "day" ];
	$month = $_POST["month"];
	$year = $_POST["year"];
	$date = fix_date($day, $month, $year);
        $score = $_POST[ "score" ];


        $key1 = $_GET[ "SSN" ];
        $key2 = $_GET[ "date" ];

        $res = update($SSN, $date, $score, $key1, $key2 );

        include "../upd_footer.php";

?>
