<?      
	function valid($sal_id,$wage,$workdays,$tax,$stamp){
		 if(is_numeric($sal_id) && $sal_id >= 1 && is_numeric($wage) && $wage > 0  &&
			 is_numeric($workdays) && $workdays >=1 && $workdays <=30 
			 	&& is_numeric($tax) && $tax >=0 && is_numeric($stamp) && $stamp >=0)
				{	
		
					return true ;
				}
		return false;
	}

       function insert($sal_id,$wage,$workdays,$tax,$stamp){
		global $con ;
		$sql= "INSERT INTO SALARY (`sal_id`, `wage`, `work_days`, `tax`, `stamp`) VALUES
			($sal_id,$wage,$workdays,$tax,$stamp)";
		$suc = mysqli_query($con,$sql);
		mysqli_close($con);
		return $suc;
	}

	function update($sal_id, $wage, $work_days, $tax, $stamp, $key) {
                global $con;

                $res = mysqli_query($con, "UPDATE SALARY 
                                           SET sal_id=" . "$sal_id" . ",wage=" . "$wage" . ",work_days=" . "$work_days" .
					  ",tax=" . "$tax" . ",stamp=" . "$stamp" .
                                          " WHERE sal_id= " . "$key" );
                return $res;
        }

        function deleteFrom( $sal_id ) {
                global $con;

                $res = mysqli_query($con, "DELETE FROM SALARY
                                           WHERE sal_id = " . "$sal_id" );


                mysqli_close( $con );
                return $res;
        }

        function getFields( $sal_id ) {
                global $con;

                $res = mysqli_query( $con, "SELECT *
                        		    FROM SALARY
                        		    WHERE sal_id=" . "$sal_id");

                while ( $row = mysqli_fetch_array( $res ) )
                        $rows[] = $row;

                mysqli_close( $con );
                return $rows;
        }
?>

