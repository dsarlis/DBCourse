<? include "../views/form_header.php" ?>

        <table>
            <tr>
                 <th> Κωδικός Θέσης </th>
                 <th> Τμήμα  </th>
                 <th> Ιδιότητα </th>
                 <th> Αριθμός συνολικών θέσεων</th>
		 <th> Αριθμός Κενών Θέσεων </th>
		 <th> Κωδικός Μισθοδοσίας </th>
		 <th> Κωδικός Παροχών </th>
            </tr>
                <? foreach ( $res as $row) {
                        echo "<tr>";
                        $pid = $row[ 'pid' ];
                        $department = $row[ 'department' ];
                        $role = $row[ 'role' ];
                        $number = $row[ 'number' ];
			$is_empty = $row[ 'is_empty' ];
			$sal_id = $row[ 'sal_id' ];
			$ben_id = $row[ 'ben_id' ];
                        echo "<td>$pid</td>";
                        echo "<td>$department</td>";
                        echo "<td>$role</td>";
                        echo "<td>$number</td>";
			echo "<td>$is_empty</td>";
			echo "<td>$sal_id</td>";
			echo "<td>$ben_id</td>";
                        echo "</tr>";
                   }?>
        </table>

        <img id="top" src="http:/images/top.png" alt="">
        <div id="form_container">
        <h1><a>Untitled Form</a></h1>

                <form id="form_592464" class="appnitro"  method="post" action="http:/controllers/POSITION/<?echo $mode?>.php?array=POSITION">
                                        <div class="form_description">
                        <h2>Θέση</h2>
                        <p>Εισάγετε τις τιμές της καταχώρησης που θέλετε να επεξεργαστείτε</p>
                </div>
                        <ul >

                                        <li id="li_1" >
                <label class="description" for="element_1">Κωδικός Θέσης </label>
                <div>
                        <input id="element_1" name="pid" class="element text medium" type="text" maxlength="255" value=""/>
                </div>
                </li> 
<? include "../views/up_del_footer.php" ?>
