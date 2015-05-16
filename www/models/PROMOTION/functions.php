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
       function valid($ssn,$new_pos,$date){
		 if(is_numeric($ssn) && $ssn >= 100000000 && $ssn <= 999999999 
			&& is_numeric($new_pos) && $new_pos >=0 && isset($date))
			{	
				return true ;
			}
		return false;
	}
       function insert($ssn,$new_pos,$date){
		global $con ;
		$sql= "INSERT INTO PROMOTION (date,SSN,new_pos) VALUES
			($date,$ssn,$new_pos);";
		$suc = mysqli_query($con,$sql);
		mysqli_close($con);
		return $suc;
	}
	
	function update($date, $SSN, $new_pos, $key1, $key2) {
                global $con;
		
                $res = mysqli_query($con, "UPDATE PROMOTION 
                                           SET date=" . $date . ",SSN=" . "$SSN" . ",new_pos=" . "$new_pos" .
                                         " WHERE date=" . $key1 .
                                         " AND SSN=" . "$key2" );
                return $res;
        }

        function deleteFrom($SSN, $date) {
                global $con;


                $res = mysqli_query($con, "DELETE FROM PROMOTION
                                           WHERE SSN = " . "$SSN" .
                                           " AND date =" . $date );


                mysqli_close( $con );
                return $res;
        }

        function getFields( $date, $SSN) {
                global $con;


                $res = mysqli_query( $con, "SELECT *
                        		    FROM PROMOTION
                        		    WHERE date =" . $date . 
                        		   " AND SSN =" . "$SSN");

                while ( $row = mysqli_fetch_array( $res ) )
                        $rows[] = $row;

                mysqli_close( $con );
                return $rows;
        }
?>
