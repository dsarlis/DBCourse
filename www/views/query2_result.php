<? include "queries_header.php"; ?>

                        <th> Επώνυμο </th>
                        <th> Όνομα  </th>
                        <th> Ημερομηνία πρόσληψης </th>
                   </tr>
                <? foreach ( $res as $row) {
                        echo "<tr>";
                        $surname = $row[ 'surname' ];
                        $name = $row[ 'name' ];
                        $from_date = $row[ 'from_date' ];
                        echo "<td>$surname</td>";
                        echo "<td>$name</td>";
                        echo "<td>$from_date</td>";
                        echo "</tr>";
                   }

 include "queries_footer.php";?>
