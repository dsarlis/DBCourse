<? include "../views/form_header.php" ?>

        <table>
            <tr>
                 <th> Κωδικός Μισθοδοσίας </th>
                 <th> Ημερομίσθιο  </th>
                 <th> Ημέρες Εργασίας </th>
                 <th> Φόρος </th>
		 <th> Χαρτόσημο </th>
            </tr>
                <? foreach ( $res as $row) {
                        echo "<tr>";
                        $sal_id = $row[ 'sal_id' ];
                        $wage = $row[ 'wage' ];
                        $work_days = $row[ 'work_days' ];
                        $tax = $row[ 'tax' ];
			$stamp = $row[ 'stamp' ];
                        echo "<td>$sal_id</td>";
                        echo "<td>$wage</td>";
                        echo "<td>$work_days</td>";
                        echo "<td>$tax</td>";
			echo "<td>$stamp</td>";
                        echo "</tr>";
                   }?>
        </table>

        <img id="top" src="http:/images/top.png" alt="">
        <div id="form_container">
        <h1><a>Untitled Form</a></h1>

                <form id="form_592464" class="appnitro"  method="post" action="http:/controllers/SALARY/<?echo $mode?>.php?array=SALARY">
                                        <div class="form_description">
                        <h2>Μισθοδοσία</h2>
                        <p>Εισάγετε τις τιμές της καταχώρησης που θέλετε να επεξεργαστείτε</p>
                </div>
                        <ul >

                                        <li id="li_1" >
                <label class="description" for="element_1"> Κωδικός Μισθοδοσίας </label>
                <div>
                        <input id="element_1" name="sal_id" class="element text medium" type="text" maxlength="255" value=""/>
                </div>
                </li>
<? include "../views/up_del_footer.php" ?>
