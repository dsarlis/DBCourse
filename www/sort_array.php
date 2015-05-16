<?
	include "database.php";
	include "models/functions.php";

        $array = $_GET[ "array" ];

	$res = sortArray( $array, $_POST[ "field" ], $_POST[ "order" ] );

	include "views/" . $array . "/sorted.php";
?>
