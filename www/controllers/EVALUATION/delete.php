<?
        include "../../database.php";
        include "../../models/EVALUATION/functions.php";
	$array =$_GET['array'];
        $SSN = $_POST[ "SSN" ];
        $day = $_POST[ "day" ];
	$month = $_POST[ "month" ];
	$year = $_POST[ "year" ];

	$date = fix_date($day, $month, $year);


        $res = deleteFrom($SSN, $date);
	 if ($res){
                include "../../views/deleted.php";
        }
        else {
          include "../../views/del_error.php";
        }
?>

