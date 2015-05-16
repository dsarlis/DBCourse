<?
        include "../../database.php";
        include "../../models/RECRUITMENT_AD/functions.php";

        $pid = $_POST[ "pid" ];
        $media_id = $_POST[ "media_id" ];
	$day = $_POST[ "day" ];
        $month = $_POST["month"];
        $year = $_POST["year"];
        $pub_date = fix_date($day, $month, $year);
        $duration = $_POST[ "duration" ];


        $key1 = $_GET[ "pid" ];
        $key2 = $_GET[ "media_id" ];
	$key3 = $_GET[ "publication_date" ];

        $res = update($pid, $media_id, $pub_date, $duration, $key1, $key2, $key3 );

        include "../upd_footer.php";

?>
