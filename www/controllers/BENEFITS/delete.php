<?
        include "../../database.php";
        include "../../models/BENEFITS/functions.php";

	$array = $_GET['array'];
        $ben_id = $_POST[ "ben_id" ];
        $res = deleteFrom( $ben_id );

         if ($res){
                include "../../views/deleted.php";
        }
        else {
          include "../../views/del_error.php";
        }

?>

