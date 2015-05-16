<? include "../../database.php";
   include "../../models/BENEFITS/functions.php";
$array =$_GET['array'];	
$ben = $_POST[ 'ben'];
$fund = $_POST[ 'fund'];
$health_con = $_POST['health_con'];
$pension_con = $_POST['pension_con'];
$lump = $_POST['lump'];
$health_tax = $_POST['health_tax'];
$pension_tax = $_POST['pension_tax'];
$test = valid($ben , $fund,$health_con, $pension_con,$lump,$health_tax,$pension_tax);

if ($test){
	$suc =  insert(intval($ben),$fund,floatval($health_con), floatval($pension_con),floatval($lump),floatval($health_tax),floatval($pension_tax));
 	if ($suc){ 
   		include "../../views/inserted.php";
 	}
	else {
   		include "../../views/error_db.php";
	}
}
else{	
	include "../../views/error.php";
}

?>
