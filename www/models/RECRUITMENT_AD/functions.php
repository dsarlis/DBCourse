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
       function valid($pid,$media_id,$duration,$date){
                 if(is_numeric($pid) && $pid >= 1  &&
                         is_numeric($media_id) && $media_id >=1 && isset($date)
                                 && is_numeric($duration) && $duration >=0)
                        {
                                return true ;
                        }
                return false;
        }
       function insert($pid,$media_id,$duration,$date){
                global $con ;
                $sql ="INSERT INTO `RECRUITMENT_AD` (`pid`, `media_id`, `publication_date`, `duration`) VALUES
                        ($pid,$media_id,'$date',$duration)";
                $suc = mysqli_query($con,$sql);
                mysqli_close($con);
                return $suc;
        }

        function update($pid, $media_id, $publication_date, $duration, $key1, $key2, $key3) {
                global $con;

                $res = mysqli_query($con, "UPDATE RECRUITMENT_AD
                                           SET pid=" . "$pid" . ",media_id=" . "$media_id" . ",publication_date=" .
                                           $publication_date . ",duration=" . "$duration" .
                                          " WHERE pid=" . "$key1" .
                                          " AND media_id=" . "$key2" .
                                          " AND publication_date=". $key3 );
                return $res;
        }

        function deleteFrom($pid, $media_id, $publication_date) {
                global $con;

                $res = mysqli_query($con, "DELETE FROM RECRUITMENT_AD
                                           WHERE pid = " . "$pid" .
                                           " AND media_id = " . "$media_id" .
                                           " AND publication_date = " . $publication_date );


                mysqli_close( $con );
                return $res;
        }

        function getFields( $pid, $media_id, $publication_date) {
                global $con;
                $res = mysqli_query( $con, "SELECT *
                                            FROM RECRUITMENT_ID
                                            WHERE pid =" . "$pid" .
                                           " AND media_id=" .  "$media_id" .
                                           " AND publication_date=" . $publication_date );
		if ($res) echo"done";
                while ( $row = mysqli_fetch_array( $res ) )
                        $rows[] = $row;
                mysqli_close( $con );
                return $rows;
        } 
?>
