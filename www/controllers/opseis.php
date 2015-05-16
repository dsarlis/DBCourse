<?	
	include "../database.php";
	include "../models/functions.php";

	$view = $_POST[ "view" ];

	if ($view == "employees2012") {
		$res = employees2012();
		if (!empty($res))
			include "../views/employees2012.php";
		else 
		   	include "../views/empty_view.php";
		
	}
	else {
		$res = wage_stats();
		include "../views/wage_stats.php";
	}
?>
