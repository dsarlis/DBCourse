<?
        include "../../database.php";
        include "../../models/BENEFITS/functions.php";

        $ben_id = $_POST[ "ben_id" ];
        $modeButton = "Ενημέρωση";

        $res = getFields( $ben_id );


        foreach ($res as $row) {
                $fund_benefits = $row[ 'fund_benefits' ];
                $health_contribution = $row[ 'health_contribution' ];
		$pension_contribution = $row[ 'pension_contribution' ];
		$lump_sum_contribution = $row[ 'lump_sum_contribution' ];
		$health_tax = $row[ 'health_tax' ];
		$pension_tax = $row[ 'pension_tax' ];
        }

        include "../../views/BENEFITS/update.php";
?>

