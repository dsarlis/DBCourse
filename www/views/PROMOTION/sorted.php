<? include "views/queries_header.php"; ?>

                        <th> Ημερομηνία </th>
			<th> ΑΦΜ </th>
			<th> Νέα Θέση </th>
                   </tr>
                <? foreach ( $res as $row) {
                        echo "<tr>";
                        $date = $row[ 'date' ];
			$SSN = $row[ 'SSN' ];
			$new_pos = $row[ 'new_pos' ];
                        echo "<td>$date</td>";
			echo "<td>$SSN</td>";
			echo "<td>$new_pos</td>";
                        echo "</tr>";
                   }
include "views/queries_footer.php";?>

