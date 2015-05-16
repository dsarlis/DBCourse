<?
        include "../../database.php";
        include "../../models/POSITION/functions.php";

        $pid = $_POST[ "pid" ];
        $modeButton = "Ενημέρωση";

        $res = getFields( $pid );


        foreach ($res as $row) {
                $department = $row[ 'department' ];
                $role = $row[ 'role' ];
		$number = $row[ 'number' ];
		$is_empty = $row[ 'is_empty' ];
		$sal_id = $row[ 'sal_id' ];
		$ben_id = $row[ 'ben_id' ];
        }

        include "../../views/POSITION/update.php";
?>

