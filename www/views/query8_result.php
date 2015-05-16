<? include "queries_header.php"; ?>

                        <th> Επώνυμο </th>
                        <th> Όνομα  </th>
                        <th> Αριθμός παιδιών </th>
                        <th> Μισθός </th>
                   </tr>
                <? foreach ( $res as $row) {
                        echo "<tr>";
                        $surname = $row[ 'surname' ];
                        $name = $row[ 'name' ];
                        $children_no = $row[ 'children_no' ];
                        $salary = $row[ 'salary' ];
                        echo "<td>$surname</td>";
                        echo "<td>$name</td>";
                        echo "<td>$children_no</td>";
                        echo "<td>$salary</td>";
                        echo "</tr>";
                   }

 include "queries_footer.php";?>
