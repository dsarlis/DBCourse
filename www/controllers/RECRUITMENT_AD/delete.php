<?
	include "../../database.php";
        include "../../models/RECRUITMENT_AD/functions.php";
	
	$array = $_GET['array'];
        $pid = $_POST[ "pid" ];
        $med_id = $_POST[ "media_id" ];
	$day = $_POST[ "day" ];
	$month = $_POST[ "month" ];
	$year = $_POST[ "year" ];


        $publication_date = fix_date($day, $month, $year);


        $res = deleteFrom($pid, $med_id, $publication_date);

	 if ($res){
                include "../../views/deleted.php";
        }
        else {
          include "../../views/del_error.php";
        }


?>
