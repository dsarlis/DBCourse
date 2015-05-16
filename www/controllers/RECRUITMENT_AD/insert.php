<? 	include "../../database.php";
	include "../../models/RECRUITMENT_AD/functions.php";
	
	$array =$_GET['array'];
	$pid = $_POST[ 'pid'];
	$media_id = $_POST[ 'media_id'];
	$duration = $_POST['duration'];
	$year= $_POST['year'];
	$day= $_POST['day'];
	$month= $_POST['month'];

	$date = fix_date($day,$month,$year);
	$test = valid($pid,$media_id,$duration,$date);

	if ($test){
		$suc =	insert(intval($pid),intval($media_id),intval($duration),$date);
		if ($suc){
			include "../../views/inserted.php";
		}	
		else {
			include "../../views/error_db.php";
		}		
	}
	else {	
		 include "../../views/error.php";
	}

?>
