<?
        include "../../database.php";
        include "../../models/POSITION/functions.php";

        $pid = $_POST[ "pid" ];
        $dep = $_POST[ "department" ];
        $role = $_POST[ "role" ];
        $number = $_POST[ "number" ];
	$is_empty = $_POST[ "is_empty" ];
	$sal_id = $_POST[ "sal_id" ];
	$ben_id = $_POST[ "ben_id" ];


        $key = $_GET[ "pid" ];

        $res = update($pid, $dep, $role, $number, $is_empty, $sal_id, $ben_id, $key );

       include "../upd_footer.php";
 
?>

