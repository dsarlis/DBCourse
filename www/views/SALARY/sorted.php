<? include "views/queries_header.php"; ?>

                        <th> Ημερομίσθιο </th>
			<th> Ημέρες Εργασίας </th>
			<th> Φόρος </th>
			<th> Χαρτόσημο </th>
                   </tr>
                <? foreach ( $res as $row) {
                        echo "<tr>";
                        $wage = $row[ 'wage' ];
                        $work_days = $row[ 'work_days' ];
                        $tax = $row[ 'tax' ];
                        $stamp = $row[ 'stamp' ];
                        echo "<td>$wage</td>";
                        echo "<td>$work_days</td>";
                        echo "<td>$tax</td>";
                        echo "<td>$stamp</td>";
                        echo "</tr>";
                   }
include "views/queries_footer.php";?>

