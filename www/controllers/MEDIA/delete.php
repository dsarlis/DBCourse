<?
        include "../../database.php";
        include "../../models/MEDIA/functions.php";
	$array = $_GET['array'];
        $med_id = $_POST[ "media_id" ];

        $res = deleteFrom($med_id);

         if ($res){
                include "../../views/deleted.php";
        }
        else {
          include "../../views/del_error.php";
        }

?>

