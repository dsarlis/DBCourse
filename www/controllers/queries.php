<?	
	include "../database.php";
	include "../models/functions.php";

	$query = $_POST[ "query" ];

	if ($query == "sort") {
		include "../views/sort.php";
	}
	else if ($query == "query1") {
	     	$res = query1();
		include "../views/query1_result.php";
	}
	else if ($query == "query2") {
		$res = query2();
		include "../views/query2_result.php";
        }
	else if ($query == "query3") {
		$res = query3();
		include "../views/query3_result.php";
        }
	else if ($query == "query4") {
		$res = query4();
		include "../views/query4_result.php";
        }
	else if ($query == "query5") {
		$res = query5();
		include "../views/query5_result.php";
        }  
	else if ($query == "query6") {
		$res = query6();
		include "../views/query6_result.php";
        }
	else if ($query == "query7") {
		$res = query7();
		include "../views/query7_result.php";
        }
	else if ($query == "query8") {
		$res = query8();
		include "../views/query8_result.php";
        }
	else {
		$res = query9();
		include "../views/query9_result.php";
  	}

?>
