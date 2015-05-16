<? include "../views/form_header.php" ?>

        <table>
            <tr>
                 <th> ΑΦΜ </th>
                 <th> Όνομα  </th>
                 <th> Επώνυμο </th>
                 <th> Οδός </th>
		 <th> Αριθμός </th>
		 <th> ΤΚ </th>
		 <th> Ειδικότητα </th>
		 <th> Επίπεδο Εκπαίδευσης </th>
		 <th> Οικογενειακή Κατάσταση </th>
		 <th> Αριθμός Τέκνων </th>
		 <th> Κωδικός Θέσης </th>
		 <th> Ημερομηνία Έναρξης </th>
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
			$pid = $row[ 'pid' ];
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
			echo "<td>$pid</td>";
			echo "<td>$from_date</td>";
                        echo "</tr>";
                   }?>
        </table>

        <img id="top" src="http:/images/top.png" alt="">
        <div id="form_container">
        <h1><a>Untitled Form</a></h1>

                <form id="form_592464" class="appnitro"  method="post" action="http:/controllers/EMPLOYEE/<?echo $mode?>.php?array=EMPLOYEE">
                                        <div class="form_description">
                        <h2>Υπάλληλος</h2>
                        <p>Εισάγετε τις τιμές της καταχώρησης που θέλετε να επεξεργαστείτε</p>
                </div>
                        <ul >

                                        <li id="li_1" >
                <label class="description" for="element_1">Α.Φ.Μ. </label>
                <div>
                        <input id="element_1" name="SSN" class="element text medium" type="text" maxlength="255" value=""/>
                </div>
                </li>
<? include "../views/up_del_footer.php" ?>
