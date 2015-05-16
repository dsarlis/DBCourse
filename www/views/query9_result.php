<? include "queries_header.php"; ?>

                        <th> Επώνυμο </th>
                        <th> Όνομα  </th>
                        <th> Ημερομηνία Πρόσληψης </th>
                        <th> Συνολικό σκορ </th>
                   </tr>
                <? foreach ( $res as $row) {
                        echo "<tr>";
                        $surname = $row[ 'surname' ];
                        $name = $row[ 'name' ];
                        $from_date = $row[ 'from_date' ];
                        $total_score = $row[ 'total_score' ];
                        echo "<td>$surname</td>";
                        echo "<td>$name</td>";
                        echo "<td>$from_date</td>";
                        echo "<td>$total_score</td>";
                        echo "</tr>";
                   }

 include "queries_footer.php";?>
