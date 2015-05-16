<? include "../views/form_header.php" ?>

        <table>
            <tr>
                 <th> Κωδικός Παροχών </th>
                 <th> Ταμείο Παροχών  </th>
                 <th> Εισφορά Κλάδου Υγείας </th>
                 <th> Εισφορά Σύνταξης </th>
		 <th> Εισφορά Εφάπαξ </th>
		 <th> Κρατήσεις Υγείας </th>
		 <th> Κρατήσεις Σύνταξης </th>
            </tr>
                <? foreach ( $res as $row) {
                        echo "<tr>";
                        $ben_id = $row[ 'ben_id' ];
                        $fund_benefits = $row[ 'fund_benefits' ];
                        $health_contribution = $row[ 'health_contribution' ];
                        $pension_contribution = $row[ 'pension_contribution' ];
			$lump_sum_contribution = $row[ 'lump_sum_contribution' ];
			$health_tax = $row[ 'health_tax' ];
			$pension_tax = $row[ 'pension_tax' ];
                        echo "<td>$ben_id</td>";
                        echo "<td>$fund_benefits</td>";
                        echo "<td>$health_contribution</td>";
                        echo "<td>$pension_contribution</td>";
			echo "<td>$lump_sum_contribution</td>";
			echo "<td>$health_tax</td>";
			echo "<td>$pension_tax</td>";
                        echo "</tr>";
                   }?>
        </table>

        <img id="top" src="http:/images/top.png" alt="">
        <div id="form_container">
        <h1><a>Untitled Form</a></h1>

                <form id="form_592464" class="appnitro"  method="post" action="http:/controllers/BENEFITS/<?echo $mode?>.php?array=BENEFITS">
                                        <div class="form_description">
                        <h2>Παροχές</h2>
                        <p>Εισάγετε τις τιμές της καταχώρησης που θέλετε να επεξεργαστείτε</p>
                </div>
                        <ul >

                                        <li id="li_1" >
                <label class="description" for="element_1"> Κωδικός Παροχών </label>
                <div>
                        <input id="element_1" name="ben_id" class="element text medium" type="text" maxlength="255" value=""/>
                </div>
                </li>
<? include "../views/up_del_footer.php" ?>

