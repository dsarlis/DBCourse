<? include "views/queries_header.php"; ?>

                        <th> Τμήμα </th>
			<th> Ιδιότητα </th>
			<th> Αριθμός Θέσεων </th>
			<th> Κενές Θέσεις </th>
                   </tr>
                <? foreach ( $res as $row) {
                        echo "<tr>";
                        $department = $row[ 'department' ];
                        $role = $row[ 'role' ];
                        $number = $row[ 'number' ];
                        $is_empty = $row[ 'is_empty' ];
                        echo "<td>$department</td>";
                        echo "<td>$role</td>";
                        echo "<td>$number</td>";
                        echo "<td>$is_empty</td>";
                        echo "</tr>";
                   }
include "views/queries_footer.php";?>

