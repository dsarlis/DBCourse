<?
        include "../../database.php";
        include "../../models/EMPLOYEE/functions.php";

        $SSN = $_POST[ "SSN" ];
        $modeButton = "Ενημέρωση";

        $res = getFields( $SSN );


        foreach ($res as $row) {
                $name = $row[ 'name' ];
                $surname = $row[ 'surname' ];
		$street = $row[ 'street' ];
		$number = $row[ 'number' ];
		$PC = $row[ 'PC' ];
		$specialization = $row[ 'specialization' ];
		$education_level = $row[ 'education_level' ];
		$marital_status = $row[ 'marital_status' ];
		$children_no = $row[ 'children_no' ];
		$pid = $row[ 'pid' ];
		$from_date = $row[ 'from_date' ];
		$to_date = $row[ 'to_date' ];
        }

	$parts = explode('-', $from_date);
	
	$day_start = $parts[2];
	$month_start = $parts[1];
	$year_start = $parts[0];

	if ($to_date != NULL) {
		$parts = explode('-', $to_date);
		$day_final = $parts[2];
        	$month_final = $parts[1];
        	$year_final = $parts[0];
	}
	else {
		$day_final = "";
                $month_final = "";
                $year_final = "";
	}

        include "../../views/EMPLOYEE/update.php";
?>
