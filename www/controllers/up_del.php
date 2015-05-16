<?	
	include "../database.php";
	include "../models/functions.php";

	$array = $_GET[ "array" ];
	$mode = $_GET[ "mode" ];

	$res = present( $array );

	if ($mode == 'update') 
		$modeButton = 'Ενημέρωση';
	else $modeButton = 'Διαγραφή';

	include "../views/".$array."/up_del.php";
	
?>
