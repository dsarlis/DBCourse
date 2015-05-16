<?
        include "../../database.php";
        include "../../models/PROMOTION/functions.php";

	$day = $_POST[ "day" ];
        $month = $_POST["month"];
        $year = $_POST["year"];
        $date = fix_date($day, $month, $year);

        $SSN = $_POST[ "ssn" ];
        $new_pos = $_POST[ "new_pos" ];


        $key1 = $_GET[ "date" ];
        $key2 = $_GET[ "SSN" ];

        $res = update($date, $SSN, $new_pos, $key1, $key2 );

        include "../upd_footer.php";

?>

