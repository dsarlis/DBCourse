<? include "queries_header.php"; ?>

                        <th> Επώνυμο </th>
                        <th> Όνομα  </th>
                        <th> Ειδικότητα </th>
                        <th> Επίπεδο Εκπαίδευσης </th>
                   </tr>
                <? foreach ( $res as $row) {
                        echo "<tr>";
                        $surname = $row[ 'surname' ];
                        $name = $row[ 'name' ];
                        $specialization = $row[ 'specialization' ];
                        $education_level = $row[ 'education_level' ];
                        echo "<td>$surname</td>";
                        echo "<td>$name</td>";
                        echo "<td>$specialization</td>";
                        echo "<td>$education_level</td>";
                        echo "</tr>";
                   }

 include "queries_footer.php";?>
