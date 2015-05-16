<?	
	function valid($ssn,$year,$gross_year_earnings,$total_year_holdings){
		if((is_numeric($ssn) && $ssn >= 100000000 && $ssn <= 999999999)
			&& (is_numeric($year) && $year>= 2010 && $year <= intval(date('Y')))
				&&(is_numeric($gross_year_earnings) && $gross_year_earnings >=0)
					 &&(is_numeric($total_year_holdings) && $total_year_holdings >= 0)){
						return true ;
					}	
		return false;
	}
       function insert($ssn,$year,$gross_year_earnings,$total_year_holdings){

		global $con ;
		$sql = "INSERT INTO AGGREGATED_FINANCIAL_DATA (SSN, year, gross_year_earnings, total_year_holdings) VALUES
			($ssn,$year,$gross_year_earnings,$total_year_holdings)";
		$suc = mysqli_query($con,$sql);
		mysqli_close($con);
		return $suc;
	}


	function update($SSN, $year, $gross_year_earnings, $total_year_holdings, $key1, $key2) {
		global $con;


		$res = mysqli_query($con, "UPDATE AGGREGATED_FINANCIAL_DATA SET SSN=" . "$SSN" . ", year=" . "$year" . 
					  ", gross_year_earnings=". "$gross_year_earnings" . ", total_year_holdings=" . "$total_year_holdings" . 
				    	  " WHERE SSN=" . "$key1" .
				    	  " AND year=" . "$key2" );
		mysqli_close($con);
		return $res;
	}

	function deleteFrom($SSN, $year) {
		global $con;

		$res = mysqli_query($con, "DELETE FROM AGGREGATED_FINANCIAL_DATA
               			     	   WHERE SSN = " . "$SSN" .
                                           " AND year = " . "$year" );


                mysqli_close( $con );
                return $res;
	}

	function getFields( $SSN, $year) {
		global $con;

		$sql = "SELECT *
                        FROM AGGREGATED_FINANCIAL_DATA
                        WHERE SSN=" . "$SSN" . " AND year =". "$year";
		

		$res = mysqli_query( $con, $sql);


		while ( $row = mysqli_fetch_array( $res ) )
                        $rows[] = $row;		

		mysqli_close( $con );
		return $rows;
	}
?>
