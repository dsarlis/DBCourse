<?
	function sortArray( $array, $field, $order ) {
		global $con;
		$res = mysqli_query($con, "SELECT *
				           FROM " . $array .
				           " ORDER BY ". $field. " ". $order );
		
		while ( $row = mysqli_fetch_array( $res ) )
			$rows[] = $row;

		mysqli_close( $con );
		return $rows;
	}

	function present($array) {
		global $con;

		$res = mysqli_query($con, "SELECT *
					   FROM " . $array);

		while ( $row = mysqli_fetch_array( $res ) )
                        $rows[] = $row;

		mysqli_close($con);
		return $rows;
	}

	function query1(){
		global $con;
		
		$res = mysqli_query($con, "SELECT surname, name, specialization, sum(score) as max_score
					   FROM EMPLOYEE as e1, EVALUATION as ev1
					   WHERE e1.SSN = ev1.SSN and ISNULL(e1.to_date)
					   GROUP BY e1.SSN
					   HAVING sum(score) >= ALL (SELECT sum(score)
			  					     FROM EVALUATION as ev2
			  					     GROUP BY ev2.SSN)");
		 while ( $row = mysqli_fetch_array( $res ) )
                        $rows[] = $row;

                mysqli_close($con);
                return $rows;
	}

	function query2(){
                global $con;

                $res = mysqli_query($con, "select surname, name, from_date
					   from EMPLOYEE as e1, POSITION as p1, SALARY as s1
					   where e1.pid = p1.pid and p1.sal_id = s1.sal_id and ISNULL(e1.to_date) and s1.wage*s1.work_days > 
									(select avg(s.wage*s.work_days)
	 		 						 from EMPLOYEE as e2, POSITION as p, SALARY as s
	 		 						 where e2.pid = p.pid and p.sal_id = s.sal_id and p1.department = p.department
         		 						 group by p.department)");

                 while ( $row = mysqli_fetch_array( $res ) )
                        $rows[] = $row;

                mysqli_close($con);
                return $rows;
        }

	function query3(){
                global $con;

                $res = mysqli_query($con, "select year, sum(gross_year_earnings) as total_amount_spent
					   from AGGREGATED_FINANCIAL_DATA as afd
					   group by year");

                 while ( $row = mysqli_fetch_array( $res ) )
                        $rows[] = $row;

                mysqli_close($con);
                return $rows;
        }

	function query4(){
                global $con;

                $res = mysqli_query($con, "select department, count(is_empty) as empty_spots_no  
					   from POSITION as p
					   where p.is_empty > 0
					   group by p.department");

                 while ( $row = mysqli_fetch_array( $res ) )
                        $rows[] = $row;

                mysqli_close($con);
                return $rows;
        }

	function query5(){
                global $con;

                $res = mysqli_query($con, "select SSN, surname, name, (s.wage*s.work_days - s.tax - s.stamp - b.health_tax - b.pension_tax) as net_salary 
					   from EMPLOYEE as e, POSITION as p, SALARY as s, BENEFITS as b
					   where e.pid = p.pid and p.sal_id = s.sal_id and p.ben_id = b.ben_id and ISNULL(e.to_date)");

                 while ( $row = mysqli_fetch_array( $res ) )
                        $rows[] = $row;

                mysqli_close($con);
                return $rows;
        }

	function query6(){
                global $con;

                $res = mysqli_query($con, "select pid, count(media_id) as num
					   from	RECRUITMENT_AD as r
					   group by pid");

                 while ( $row = mysqli_fetch_array( $res ) )
                        $rows[] = $row;

                mysqli_close($con);
                return $rows;
        }

	function query7(){
                global $con;

                $res = mysqli_query($con, "select surname, name, specialization, education_level
					   from EMPLOYEE as e, EVALUATION as ev, POSITION as p, SALARY as s 
					   where e.pid = p.pid and e.SSN = ev.SSN and p.sal_id = s.sal_id and wage*work_days < 2500 and ISNULL(e.to_date)
					   group by e.SSN
					   having sum(score) >= 200");

                 while ( $row = mysqli_fetch_array( $res ) )
                        $rows[] = $row;

                mysqli_close($con);
                return $rows;
        }

	function query8(){
                global $con;

                $res = mysqli_query($con, "select surname, name, children_no , wage*work_days as salary
					   from EMPLOYEE as e, POSITION as p, SALARY as s
					   where e.pid = p.pid and s.sal_id = p.sal_id and e.children_no >= 3 and wage*work_days < 2000");

                 while ( $row = mysqli_fetch_array( $res ) )
                        $rows[] = $row;

                mysqli_close($con);
                return $rows;
        }

	function query9(){
                global $con;

                $res = mysqli_query($con, "select surname, name, from_date, sum(ev.score) as total_score
					   from EMPLOYEE as e, EVALUATION as ev
					   where e.SSN = ev.SSN 
					   group by e.SSN
					   having sum(ev.score) >= 200 and exists (select from_date
										   from EMPLOYEE as e2
										   where e.SSN = e2.SSN and from_date >= '2012-01-01')");

                 while ( $row = mysqli_fetch_array( $res ) )
                        $rows[] = $row;

                mysqli_close($con);
                return $rows;
        }

	function employees2012(){
		global $con;
		$res = mysqli_query($con,"CREATE OR REPLACE ALGORITHM=UNDEFINED DEFINER=`admin`@`localhost` SQL SECURITY DEFINER VIEW `employees_2012`
		 			  AS select `EMPLOYEE`.`name` AS `name`,`EMPLOYEE`.`surname` AS `surname`,`EMPLOYEE`.`street` AS `street`,
					  `EMPLOYEE`.`number` AS `number`,`EMPLOYEE`.`PC` AS `PC`,`EMPLOYEE`.`specialization` AS `specialization`,
					  `EMPLOYEE`.`education_level` AS `education_level`,`EMPLOYEE`.`marital_status` AS `marital_status`,
					  `EMPLOYEE`.`children_no` AS `children_no`,`EMPLOYEE`.`pid` AS `pid`,
					  `EMPLOYEE`.`from_date` AS `from_date` , `EMPLOYEE`.`SSN` AS `SSN` from `EMPLOYEE` 
					   where (`EMPLOYEE`.`from_date` between '2012-01-01' and '2012-12-31');");

		$res2 = mysqli_query($con,"SELECT * FROM `employees_2012`;");
		while ( $row = mysqli_fetch_array( $res2 ) ){
			$rows[] = $row;
		}
		mysqli_close($con);
		return $rows;
	}
	
	function wage_stats(){

		global $con;
                $res = mysqli_query($con,"CREATE OR REPLACE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `wage_stats` AS 
					  select `p`.`department` AS `department`,avg(`s`.`wage`) AS `avg(wage)` 
					  from (`SALARY` `s` join  POSITION` `p`) where (`s`.`sal_id` = `p`.`sal_id`) group by `p`.`department`;");
		$res2 = mysqli_query($con,"SELECT * FROM `wage_stats`;");
                while ( $row = mysqli_fetch_array( $res2 ) ){
                        $rows[] = $row;
                }
                mysqli_close($con);
                return $rows;
	}

	
?>
