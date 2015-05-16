<?
        include "../../database.php";
        include "../../models/SALARY/functions.php";

        $sal_id = $_POST[ "sal_id" ];
        $modeButton = "Ενημέρωση";

        $res = getFields( $sal_id);


        foreach ($res as $row) {
                $wage = $row[ 'wage' ];
                $work_days = $row[ 'work_days' ];
		$tax = $row[ 'tax' ];
		$stamp = $row[ 'stamp' ];
        }

        include "../../views/SALARY/update.php";
?>
