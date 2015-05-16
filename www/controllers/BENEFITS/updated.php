<?
        include "../../database.php";
        include "../../models/BENEFITS/functions.php";

        $ben_id = $_POST[ "ben_id" ];
        $fund_ben = $_POST[ "fund" ];
        $health_con = $_POST[ "health_con" ];
        $pension_con = $_POST[ "pension_con" ];
	$lump_sum_con = $_POST["lump"];
	$health_tax = $_POST["health_tax"];
	$pension_tax = $_POST["pension_tax"];


        $key = $_GET[ "ben_id" ];

        $res = update($ben_id, $fund_ben, $health_con, $pension_con, $lump_sum_con, $health_tax, $pension_tax, $key );

        include "../upd_footer.php";
?>

