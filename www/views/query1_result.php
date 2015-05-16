<? include "queries_header.php"; ?>

                        <th> Επώνυμο </th>
                        <th> Όνομα  </th>
                        <th> Ειδικότητα </th>
                        <th> Συνολικό Σκορ </th>
                   </tr>
                <? foreach ( $res as $row) {
                        echo "<tr>";
                        $surname = $row[ 'surname' ];
                        $name = $row[ 'name' ];
                        $specialization = $row[ 'specialization' ];
                        $max_score = $row[ 'max_score' ];
                        echo "<td>$surname</td>";
                        echo "<td>$name</td>";
                        echo "<td>$specialization</td>";
                        echo "<td>$max_score</td>";
                        echo "</tr>";
                   }
		
 include "queries_footer.php";?>
