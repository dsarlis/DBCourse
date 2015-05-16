<? include "views/queries_header.php"; ?>

                        <th> Ημ/νία Δημοσίευσης  </th>
			<th> Διάρκεια (μήνες) </th>
                   </tr>
                <? foreach ( $res as $row) {
                        echo "<tr>";
                        $publication_date = $row[ 'publication_date' ];
			$duration = $row[ 'duration' ];
                        echo "<td>$publication_date</td>";
			echo "<td>$duration</td>";
                        echo "</tr>";
                   }
include "views/queries_footer.php";?>

