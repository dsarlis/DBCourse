<?      
	function fix_date($day,$month,$year){
		$sdate = NULL;
		if (empty($day)||empty($month)||empty($year)){
			return $sdate;
		}
		if (checkdate($month,$day,$year)==1){
			if (strlen($day)==1)
			  $day = '0'.$day;
			$sdate ="'".$year."-".$month."-".$day."'";
		}
		return $sdate;

	}
       function valid($ssn,$score,$date){
		 if(is_numeric($ssn) && $ssn >= 100000000 && $ssn <= 999999999 
			&& is_numeric($score) && $score >=0 && isset($date))
			{	
				return true ;
			}
		return false;
	}
       function insert($ssn,$score,$date){
		global $con ;
		$sql= "INSERT INTO EVALUATION (SSN,date,score) VALUES
			($ssn,$date,$score);";
		$suc = mysqli_query($con,$sql);
		mysqli_close($con);
		return $suc;
	}


	function update($SSN, $date, $score, $key1, $key2) {
                global $con;
		
                $res = mysqli_query($con, "UPDATE EVALUATION 
                                           SET SSN=" . "$SSN" . ",date=" . $date . ",score=" . "$score" .
                                         " WHERE SSN= " . "$key1" .
                                         " AND date= " . $key2 );
                return $res;
        }

        function deleteFrom($SSN, $date) {
                global $con;

                $res = mysqli_query($con, "DELETE FROM EVALUATION
                                           WHERE SSN = " . "$SSN" .
                                           " AND date =" . $date );


                mysqli_close( $con );
                return $res;
        }

        function getFields( $SSN, $date) {
                global $con;

                $res = mysqli_query( $con, "SELECT *
                        		    FROM EVALUATION
                        		    WHERE SSN = " . "$SSN" . 
				           " AND date = " . $date  );

                while ( $row = mysqli_fetch_array( $res ) )
                        $rows[] = $row;

                mysqli_close( $con );
                return $rows;
        }
?>
