<? include "queries_header.php"; ?>

                        <th> Κωδικός Θέσης </th>
                        <th> Αριθμός ΜΜΕ  </th>
                   </tr>
                <? foreach ( $res as $row) {
                        echo "<tr>";
                        $pid = $row[ 'pid' ];
                        $num = $row[ 'num' ];
                        echo "<td>$pid</td>";
                        echo "<td>$num</td>";
                        echo "</tr>";
                   }

 include "queries_footer.php";?>
