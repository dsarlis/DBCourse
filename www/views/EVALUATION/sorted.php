<? include "views/queries_header.php"; ?>

                        <th> ΑΦΜ </th>
			<th> Ημερομηνία </th>
			<th> Σκορ </th>
                   </tr>
                <? foreach ( $res as $row) {
                        echo "<tr>";
                        $SSN = $row[ 'SSN' ];
                        $date = $row[ 'date' ];
                        $score = $row[ 'score' ];
                        echo "<td>$SSN</td>";
                        echo "<td>$date</td>";
                        echo "<td>$score</td>";
                        echo "</tr>";
                   }
include "views/queries_footer.php";?>

