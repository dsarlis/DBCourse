<? include "queries_header.php"; ?>

                        <th> ΑΦΜ </th>
                        <th> Επώνυμο  </th>
                        <th> Όνομα </th>
                        <th> Καθαρές αποδοχές </th>
                   </tr>
                <? foreach ( $res as $row) {
                        echo "<tr>";
                        $SSN = $row[ 'SSN' ];
                        $surname = $row[ 'surname' ];
                        $name = $row[ 'name' ];
                        $net_salary = $row[ 'net_salary' ];
                        echo "<td>$SSN</td>";
                        echo "<td>$surname</td>";
                        echo "<td>$name</td>";
                        echo "<td>$net_salary</td>";
                        echo "</tr>";
                   }

 include "queries_footer.php";?>
