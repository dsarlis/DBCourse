<?
        include "../../database.php";
        include "../../models/SALARY/functions.php";
	$array = $_GET['array'];
        $sal_id = $_POST[ "sal_id" ];

        $res = deleteFrom($sal_id);

         if ($res){
                include "../../views/deleted.php";
        }
        else {
          include "../../views/del_error.php";
        }

?>

