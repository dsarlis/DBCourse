<?php include "../../views/form_header.php" ?>
        <img id="top" src="http:/images/top.png" alt="">
        <div id="form_container">
        <h1><a>Untitled Form</a></h1>

                <form id="form_592464" class="appnitro"  method="post" action="http:/controllers/AGGREGATED_FINANCIAL_DATA/updated.php?SSN=<?echo $SSN?>&year=<?echo $year?>">
                                        <div class="form_description">
                        <h2>Συγκρεντρωτικά Οικονομικά Στοιχεία</h2>
                        <p>Επεξεργαστείτε την καταχώρηση που επιλέξατε</p>
                </div>
                        <ul >

                                        <li id="li_1" >
                <label class="description" for="element_1">Α.Φ.Μ. </label>
                <div>
                        <input id="element_1" name="SSN" class="element text medium" type="text" maxlength="255" value="<? echo $SSN ?>"/>
                </div>
                </li>           <li id="li_2" >
                <label class="description" for="element_2">Έτος </label>
                <div>
                        <input id="element_2" name="year" class="element text medium" type="text" maxlength="255" value="<? echo $year ?>"/>
                </div>
                </li>           <li id="li_3" >
                <label class="description" for="element_3">Gross </label>
                <div>
                        <input id="element_3" name="gross_year_earnings" class="element text medium" type="text" maxlength="255" value="<? echo $gross_year_earnings ?>"/>
                </div>
                </li>           <li id="li_4" >
                <label class="description" for="element_4">Total </label>
                <div>
                        <input id="element_4" name="total_year_holdings" class="element text medium" type="text" maxlength="255" value="<? echo $total_year_holdings ?>"/>
                </div>
                </li>
<? include "../../views/up_del_footer.php" ?>
