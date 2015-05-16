<?
        include "../../database.php";
        include "../../models/SALARY/functions.php";

        $sal_id = $_POST[ "sal_id" ];
        $wage = $_POST[ "wage" ];
        $work_days = $_POST[ "work_days" ];
        $tax = $_POST[ "tax" ];
	$stamp = $_POST[ "stamp" ];


        $key = $_GET[ "sal_id" ];

        $res = update($sal_id, $wage, $work_days, $tax, $stamp, $key );

        include "../upd_footer.php";

?>

