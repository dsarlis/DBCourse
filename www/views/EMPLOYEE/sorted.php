<? include "views/queries_header.php"; ?>

			<th> ΑΦΜ </th>
			<th> Όνομα </th>
			<th> Επώνυμο </th>
			<th> Οδός </th>
			<th> Αριθμός </th>
			<th> TK </th>
			<th> Ειδικότητα </th>
			<th> Επίπεδο Ειδίκευσης </th>
			<th> Οικογενειακή Κατάσταση </th>
			<th> Αριθμός Τέκνων </th>
			<th> Hμ/νία Έναρξης </th>
		   </tr>
		<? foreach ( $res as $row) {
			echo "<tr>";
		        $SSN = $row[ 'SSN' ];
			$name = $row[ 'name' ];
			$surname = $row[ 'surname' ];
			$street = $row[ 'street' ];
			$number = $row[ 'number' ];
			$PC = $row[ 'PC' ];
			$specialization = $row[ 'specialization' ];
			$education_level = $row[ 'education_level' ];
			$marital_status = $row[ 'marital_status' ];
			$children_no = $row[ 'children_no' ];
			$from_date = $row[ 'from_date' ];
		        echo "<td>$SSN</td>";
			echo "<td>$name</td>";
			echo "<td>$surname</td>";
			echo "<td>$street</td>";
			echo "<td>$number</td>";
			echo "<td>$PC</td>";
			echo "<td>$specialization</td>";
			echo "<td>$education_level</td>";
			echo "<td>$marital_status</td>";
			echo "<td>$children_no</td>";
			echo "<td>$from_date</td>";
			echo "</tr>";
		   }
include "views/queries_footer.php";?>
