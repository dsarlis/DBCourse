<?
        include "../../database.php";
        include "../../models/POSITION/functions.php";
	$array = $_GET['array'];
        $pid = $_POST[ "pid" ];

        $res = deleteFrom($pid);

         if ($res){
                include "../../views/deleted.php";
        }
        else {
          include "../../views/del_error.php";
        }

?>

