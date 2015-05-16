<?
	include "../../database.php";
        include "../../models/RECRUITMENT_AD/functions.php";

        $pid = $_POST[ "pid" ];
        $media_id = $_POST[ "media_id" ];
	$day = $_POST[ "day" ];
        $month = $_POST[ "month" ];
        $year = $_POST[ "year" ];
	$publication_date = fix_date($day, $month, $year);


        $modeButton = "Ενημέρωση";

        $res = getFields( $pid, $media_id, $publication_date);
        foreach ($res as $row) {
                $duration = $row[ 'duration' ];
        }
        include "../../views/RECRUITMENT_AD/update.php";

?>
