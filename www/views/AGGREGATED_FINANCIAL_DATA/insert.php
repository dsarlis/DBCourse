<?php include "../form_header.php" ?>
		<img id="top" src="http:/images/top.png" alt="">
        	<div id="form_container">
        	<h1><a>Untitled Form</a></h1>
		
		<form id="form_592464" class="appnitro"  method="post" action="../../controllers/AGGREGATED_FINANCIAL_DATA/insert.php?array=AGGREGATED_FINANCIAL_DATA">
					<div class="form_description">
			<h2>Συγκρεντρωτικά Οικονομικά Στοιχεία</h2>
			<p>Εισάγετε μία νέα καταχώρηση</p>
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="SSN">Α.Φ.Μ. </label>
		<div>
			<input id="element_1" name="ssn" class="element text medium" type="text" maxlength="255" value=""/>
		</div> 
		</li>		<li id="li_2" >
		<label class="description" for="year">Έτος </label>
		<div>
			<input id="element_2" name="year" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_3" >
		<label class="description" for="gross">Mικτές Αποδοχές Έτους </label>
		<div>
			<input id="element_3" name="gross_year_earnings" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_4" >
		<label class="description" for="total">Σύνολο Κρατήσεων Έτους </label>
		<div>
			<input id="element_4" name="total_year_holdings" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>
		<? include "../form_footer.php" ?>	
