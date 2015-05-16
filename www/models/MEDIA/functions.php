<?      
	function valid($media_id,$name,$kind){
		 if(is_numeric($media_id) && $media_id >=0  
			&& !empty($name)&&!empty($kind))
			{	
				return true ;
			}
		return false;
	}
       function insert($media_id,$name,$kind){
		global $con ;
		$sql= "INSERT INTO MEDIA (media_id,name,kind) VALUES
			($media_id,'$name','$kind');";
		$suc = mysqli_query($con,$sql);
		mysqli_close($con);
		return $suc;
	}	

	function update($media_id, $name, $kind, $key) {
                global $con;

                $res = mysqli_query($con, "UPDATE MEDIA 
                                           SET media_id=" . "$media_id" .  ",name='" . $name . "',kind='" . $kind .
                                          "' WHERE media_id= " . "$key" );
                return $res;
        }

        function deleteFrom( $med_id ) {
                global $con;

                $res = mysqli_query($con, "DELETE FROM MEDIA
                                           WHERE media_id = " . "$med_id" );


                mysqli_close( $con );
                return $res;
        }

        function getFields( $media_id ) {
                global $con;

                $res = mysqli_query( $con, "SELECT *
                        		    FROM MEDIA
                        		    WHERE media_id=" . "$media_id");

                while ( $row = mysqli_fetch_array( $res ) )
                        $rows[] = $row;

                mysqli_close( $con );
                return $rows;
        }
?>
