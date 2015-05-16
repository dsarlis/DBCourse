<?
        include "../../database.php";
        include "../../models/EMPLOYEE/functions.php";

        $SSN = $_POST[ "ssn" ];
        $name = $_POST[ "name" ];
        $surname = $_POST[ "surname" ];
        $street = $_POST[ "street" ];
	$number = $_POST[ "number" ];
	$PC = $_POST[ "PC" ];
	$spec = $_POST[ "spec" ];
	$edu_level = $_POST[ "education" ];
	$marital_status = $_POST[ "marital_status" ];
	$children_no = $_POST[ "children_no" ];
	$pid = $_POST[ "pid" ];
	$day_start = $_POST[ 'day_start' ];
	$month_start = $_POST['month_start'];
	$year_start = $_POST['year_start'];
	$day_final = $_POST['day_final'];
	$month_final = $_POST['month_final'];
	$year_final = $_POST['year_final'];

	$sdate = fix_date($day_start,$month_start,$year_start);
	$fdate = fix_date($day_final,$month_final,$year_final);


        $key = $_GET[ "SSN" ];

        $res = update($SSN, $name, $surname, $street, $number, $PC, $spec, $edu_level, $marital_status, $children_no, $pid, $sdate, $fdate, $key );

        include "../upd_footer.php";

?>
