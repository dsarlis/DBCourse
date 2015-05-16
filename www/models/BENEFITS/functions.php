<?      
	function valid($ben , $fund,$health_con, $pension_con,$lump,$health_tax,$pension_tax){
		if(is_numeric($ben) && $ben >= 1 && 
			is_numeric($health_con) && $health_con >= 0 &&
				is_numeric($pension_con) && $pension_con >= 0 &&
					is_numeric($lump) && $lump >= 0 && 
						is_numeric($health_tax) && $health_tax >= 0 &&
							is_numeric($pension_tax) && $pension_tax >= 0 )	
							{
								return true ;
		
							}
		return false;
	}
       function insert($ben , $fund,$health_con, $pension_con,$lump,$health_tax,$pension_tax){

		global $con ;
		$sql = "INSERT INTO BENEFITS (`ben_id`, `fund_benefits`, `health_contribution`, `pension_contribution`, 
			`lump_sum_contribution`, `health_tax`, `pension_tax`) VALUES 
			($ben , '$fund',$health_con, $pension_con,$lump,$health_tax,$pension_tax)";
		$suc = mysqli_query($con,$sql);
		/*if (!$suc)
  		{
  			die('Error: ' . mysqli_error());
  		}*/
		mysqli_close($con);
		return $suc;
	}


	function update($ben_id, $fund_benefits, $health_contribution, $pension_contribution, $lump_sum_contribution, $health_tax, $pension_tax, $key) {
                global $con;
              

                $res = mysqli_query($con, "UPDATE BENEFITS
                                           SET ben_id=" . "$ben_id" . ",fund_benefits='" . $fund_benefits . "',health_contribution=" . "$health_contribution" .  
				          ",pension_contribution=" . "$pension_contribution" . ",lump_sum_contribution=" . "$lump_sum_contribution" . 
					  ",health_tax=" . "$health_tax" . ",pension_tax=" . "$pension_tax" .
                                          " WHERE ben_id= " . "$key" );
                return $res;
        }

        function deleteFrom( $ben_id ) {
                global $con;

                $res = mysqli_query($con, "DELETE FROM BENEFITS 
                                           WHERE ben_id = " . "$ben_id");

                mysqli_close( $con );
                return $res;
        }

        function getFields( $ben_id) {
                global $con;


                $res = mysqli_query( $con, "SELECT *
                        	            FROM BENEFITS
                        	            WHERE ben_id = " . "$ben_id");

                while ( $row = mysqli_fetch_array( $res ) )
                        $rows[] = $row;         

                mysqli_close( $con );
                return $rows;
        }
?>
