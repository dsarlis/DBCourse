<? include "views/queries_header.php"; ?>

                        <th> Ταμείο Παροχών</th>
                        <th> Εισφορά Κλάδου Υγείας  </th>
                        <th> Εισφορά Σύνταξης </th>
                        <th> Εισφορά Εφάπαξ </th>
                        <th> Κρατήσεις Υγείας  </th>
                        <th> Κρατήσεις Σύνταξης </th>
                   </tr>
                <? foreach ( $res as $row) {
                        echo "<tr>";
                        $fund_benefits = $row[ 'fund_benefits' ];
                        $health_contribution = $row[ 'health_contribution' ];
                        $pension_contribution = $row[ 'pension_contribution' ];
                        $lump_sum_contribution = $row[ 'lump_sum_contribution' ];
                        $health_tax = $row[ 'health_tax' ];
                        $pension_tax = $row[ 'pension_tax' ];
                        echo "<td>$fund_benefits</td>";
                        echo "<td>$health_contribution</td>";
                        echo "<td>$pension_contribution</td>";
                        echo "<td>$lump_sum_contribution</td>";
                        echo "<td>$health_tax</td>";
                        echo "<td>$pension_tax</td>";
                        echo "</tr>";
                   }
include "views/queries_footer.php";?>

