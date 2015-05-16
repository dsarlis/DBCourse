<? include "queries_header.php"; ?>

                        <th> Τμήμα </th>
                        <th> Αριθμός κενών θέσεων </th>
                   </tr>
                <? foreach ( $res as $row) {
                        echo "<tr>";
                        $department = $row[ 'department' ];
                        $empty_spots_no = $row[ 'empty_spots_no' ];
                        echo "<td>$department</td>";
                        echo "<td>$empty_spots_no</td>";
                        echo "</tr>";
                   }

 include "queries_footer.php";?>
