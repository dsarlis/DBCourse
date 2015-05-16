<?      
	function valid($pid,$department,$role,$number,$is_empty,$sal_id,$ben_id){
		 if(is_numeric($pid) && $pid >=0 && !empty($department)&&!empty($role) && is_numeric($number)
			&& $number>=0 && is_numeric($is_empty) && $is_empty>=0 && is_numeric($sal_id) && $sal_id >=1
				&& is_numeric($ben_id) && $ben_id >=1)
				{	
					return true ;
				}
		return false;
	}
       function insert($pid,$department,$role,$number,$is_empty,$sal_id,$ben_id){
		global $con ;
		$sql= "INSERT INTO POSITION (pid,department,role,number,is_empty,sal_id,ben_id) VALUES
			($pid,'$department','$role',$number,$is_empty,$sal_id,$ben_id)";
		$suc = mysqli_query($con,$sql);
		mysqli_close($con);
		return $suc;
	}

	function update($pid, $department, $role, $number, $is_empty, $sal_id, $ben_id, $key) {
                global $con;

                $res = mysqli_query($con, "UPDATE POSITION
                                           SET pid=" . "$pid" . ",department='" . $department . "',role='" . $role . "',number=" . "$number" .
					  ",is_empty=" . "$is_empty" . ",sal_id=" . "$sal_id" . ",ben_id=" . "$ben_id" . 
                                          " WHERE pid= " . "$key" );
                return $res;
        }

        function deleteFrom( $pid ) {
                global $con;

                $res = mysqli_query($con, "DELETE FROM POSITION
                                           WHERE pid = " . "$pid" );


                mysqli_close( $con );
                return $res;
        }

        function getFields( $pid ) {
                global $con;

                $res = mysqli_query( $con, "SELECT *
                        		    FROM POSITION
                        		    WHERE pid = " . "$pid");

                while ( $row = mysqli_fetch_array( $res ) )
                        $rows[] = $row;

                mysqli_close( $con );
                return $rows;
        }
?>

