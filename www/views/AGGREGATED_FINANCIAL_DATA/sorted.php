<? include "views/queries_header.php"; ?>

                        <th> ΑΦΜ </th>
                        <th> Έτος  </th>
                        <th> Μικτές Αποδοχές Έτους </th>
                        <th> Σύνολο Κρατήσεων Έτους </th>
                   </tr>
                <? foreach ( $res as $row) {
                        echo "<tr>";
                        $SSN = $row[ 'SSN' ];
                        $year = $row[ 'year' ];
                        $gross_year_earnings = $row[ 'gross_year_earnings' ];
                        $total_year_holdings = $row[ 'total_year_holdings' ];
                        echo "<td>$SSN</td>";
                        echo "<td>$year</td>";
                        echo "<td>$gross_year_earnings</td>";
                        echo "<td>$total_year_holdings</td>";
                        echo "</tr>";
                   }
include "views/queries_footer.php";?>

