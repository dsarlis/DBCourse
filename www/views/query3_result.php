<? include "queries_header.php"; ?>

                        <th> Έτος </th>
                        <th> Συνολικά έξοδα </th>
                   </tr>
                  <? foreach ( $res as $row) {
                        echo "<tr>";
                        $year = $row[ 'year' ];
                        $total_amount_spent = $row[ 'total_amount_spent' ];
                        echo "<td>$year</td>";
                        echo "<td>$total_amount_spent</td>";
                        echo "</tr>";
                   }

 include "queries_footer.php";?>
