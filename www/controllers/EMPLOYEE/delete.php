<?
        include "../../database.php";
        include "../../models/EMPLOYEE/functions.php";
	$array = $_GET['array'];
        $SSN = $_POST[ "SSN" ];

        $res = deleteFrom($SSN);

         if ($res){
                include "../../views/deleted.php";
        }
        else {
          include "../../views/del_error.php";
        }

?>

