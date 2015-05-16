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
       function valid($ssn,$name,$surname, $street,$number,$PC,$marital_status,$children_no,$specialization,$education,$pid,$sdate){
		;
		 if(is_numeric($ssn) && $ssn >= 100000000 && $ssn <= 999999999 
			&& !empty($name) && !empty($surname) && !empty($street) && !empty($number) && is_numeric($PC) && $PC >= 1 
				&& !empty($specialization) && !empty($education)  && is_numeric($pid) && $pid >= 1 && is_numeric($children_no)
					&& isset($sdate))
							{	
								return true ;
		
							}
		return false;
	}


       function insert($ssn,$name,$surname,$street,$number,$PC,$specialization,$education,$marital_status,$children_no,$pid,$from_date,$to_date){
		global $con ;
		if ($to_date ===NULL) {
		$sql= "INSERT INTO EMPLOYEE (`SSN`, `name`, `surname`, `street`, `number`, `PC`, `specialization`, `education_level`, `marital_status`, `children_no`, `pid`, `from_date`, `to_date`) VALUES
			($ssn, '$name', '$surname', '$street', '$number', $PC, '$specialization', '$education','$marital_status',$children_no,$pid,$from_date,NULL)";
		}
		else {
			$sql= "INSERT INTO EMPLOYEE (`SSN`, `name`, `surname`, `street`, `number`, `PC`, `specialization`, `education_level`, `marital_status`, `children_no`, `pid`, `from_date`, `to_date`) VALUES
                        ($ssn, '$name', '$surname', '$street', '$number', $PC, '$specialization', '$education','$marital_status',$children_no,$pid,$from_date,$to_date)";
		}
		$suc = mysqli_query($con,$sql);
		/*if (!$suc)
  		{
  			die('Error: ' . mysqli_error());
  		}*/
		mysqli_close($con);
		return $suc;
	}


	function update($SSN, $name, $surname, $street, $number, $PC, $specialization, $education_level, $marital_status, $children_no, $pid, $from_date, $to_date, $key) {
                global $con;

		if ($to_date != "") {

                	$res = mysqli_query($con, "UPDATE EMPLOYEE
                                           	   SET SSN=" . "$SSN" . ",name='" . $name . "',surname='" . $surname . "',street='" . $street .
				          	  "',number='" . $number . "',PC=" . "$PC" . ",specialization='" . $specialization . "',education_level='" .
					          $education_level . "',marital_status='" . $marital_status . "',children_no=" . "$children_no" . ",pid=" . "$pid" .
					          ",from_date=" . $from_date . ",to_date=" . $to_date .
                                                  " WHERE SSN= " . "$key" );

		}
		else { 
			
		      $res = mysqli_query($con, "UPDATE EMPLOYEE
                                                 SET SSN=" . "$SSN" . ",name='" . $name . "',surname='" . $surname . "',street='" . $street .
                                                "',number='" . $number . "',PC=" . "$PC" . ",specialization='" . $specialization . "',education_level='" .
                                                $education_level . "',marital_status='" . $marital_status . "',children_no=" . "$children_no" . ",pid=" . "$pid" .
                                                ",from_date=" . $from_date . ",to_date=NULL" .
                                                " WHERE SSN= " . "$key" );
		}
		
		mysqli_close( $con );
                return $res;
        }

        function deleteFrom($SSN) {
                global $con;

                $res = mysqli_query($con, "DELETE FROM EMPLOYEE
                                           WHERE SSN = " . "$SSN" );


                mysqli_close( $con );
                return $res;
        }

        function getFields( $SSN ) {
                global $con;

                $res = mysqli_query( $con, $sql = "SELECT *
                        			   FROM EMPLOYEE
                        			   WHERE SSN = " . "$SSN");

                while ( $row = mysqli_fetch_array( $res ) )
                        $rows[] = $row;

                mysqli_close( $con );
                return $rows;
        }
?>
