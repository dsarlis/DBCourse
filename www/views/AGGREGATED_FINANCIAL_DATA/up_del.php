<? include "../views/form_header.php" ?>

	<table class = "center">
	    <tr>
		 <th> ΑΦΜ </th>
                 <th> Έτος  </th>
                 <th> Μικτές Αποδοχές Έτους </th>
                 <th> Σύνολο Κρατήσεων Έτους </th>
            </tr>
                <? foreach ( $res as $row) {
                        echo "<tr>";
                        $SSN = $row[ 'SSN' ];
                        $year = $row[ 'year' ];
                        $gross_year_earnings = $row[ 'gross_year_earnings' ];
                        $total_year_holdings = $row[ 'total_year_holdings' ];
                        echo "<td>$SSN</td>";
                        echo "<td>$year</td>";
                        echo "<td>$gross_year_earnings</td>";
                        echo "<td>$total_year_holdings</td>";
                        echo "</tr>";
                   }?>
	</table>
	
	<img id="top" src="http:/images/top.png" alt="">
        <div id="form_container">
        <h1><a>Untitled Form</a></h1>

                <form id="form_592464" class="appnitro"  method="post" action="http:/controllers/AGGREGATED_FINANCIAL_DATA/<?echo $mode?>.php?array=AGGREGATED_FINANCIAL_DATA" >
                                        <div class="form_description">
                        <h2>Συγκρεντρωτικά Οικονομικά Στοιχεία</h2>
                        <p>Εισάγετε τις τιμές της καταχώρησης που θέλετε να επεξεργαστείτε</p>
                </div>
                        <ul >

                                        <li id="li_1" >
                <label class="description" for="element_1">Α.Φ.Μ. </label>
                <div>
                        <input id="element_1" name="SSN" class="element text medium" type="text" maxlength="255" value=""/>
                </div>
                </li>           <li id="li_2" >
                <label class="description" for="element_2">Έτος </label>
                <div>
                        <input id="element_2" name="year" class="element text medium" type="text" maxlength="255" value=""/>
                </div>
                </li>
<? include "../views/up_del_footer.php" ?>


