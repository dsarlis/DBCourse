<? include "queries_header.php"; ?>

			<th> Τμήμα  </th>
			<th> Μέσο Ημερομίσθιο </th>
		   </tr>
		<? foreach ( $res as $row) {
			echo "<tr>";
		        $department = $row[ 'department' ];
			$wage = round($row[ 'avg(wage)' ],2);
		        echo "<td>$department</td>";
			echo "<td> $wage</td>";
			echo "</tr>";
		   }
include "queries_footer.php";

?>
