<? include "views/queries_header.php"; ?>

                        <th> Όνομα  </th>
			<th> Είδος </th>
                   </tr>
                <? foreach ( $res as $row) {
                        echo "<tr>";
                        $name = $row[ 'name' ];
			$kind = $row[ 'kind' ];
                        echo "<td>$name</td>";
			echo "<td>$kind</td>";
                        echo "</tr>";
                   }
include "views/queries_footer.php";?>

