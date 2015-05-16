<?php include "../form_header.php" ?>
		<img id="top" src="../../images/top.png" alt="">
        	<div id="form_container">
        	<h1><a>Untitled Form</a></h1>


		<form id="form_592464" class="appnitro"  method="post" action="../../controllers/BENEFITS/insert.php?array=BENEFITS">
					<div class="form_description">
			<h2>Παροχές</h2>
			<p>Εισάγετε μία νέα καταχώρηση</p>
		</div>						
			<ul >
			
		<li id="li_1" >
		<label class="description" for="ben">Κωδικός Παροχών </label>
		<div>
			<input id="element_1" name="ben" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		
		<li id="li_2" >
		<label class="description" for="fund">Ταμείο Παροχών </label>
		<div>
			<input id="element_2" name="fund" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		
		<li id="li_3" >
		<label class="description" for="health_con"> Εισφορά Κλάδου Υγείας</label>
		<div>
			<input id="element_3" name="health_con" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		

		<li id="li_4" >
		<label class="description" for="pension_con">Εισφορά Σύνταξης </label>
		<div>
			<input id="element_4" name="pension_con" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>
	
		<li id="li_5" >
                <label class="description" for="lump">Εισφορά Εφάπαξ </label>
                <div>
                        <input id="element_5" name="lump" class="element text medium" type="text" maxlength="255" value=""/>        
                </div>
                </li>

		<li id="li_6" >
                <label class="description" for="health_tax"> Κρατήσεις Υγείας </label>
                <div>
                        <input id="element_6" name="health_tax" class="element text medium" type="text" maxlength="255" value=""/>        
                </div>
                </li>

		<li id="li_7" >
                <label class="description" for="pension_tax">Κρατήσεις Σύνταξης </label>
                <div>
                        <input id="element_7" name="pension_tax" class="element text medium" type="text" maxlength="255" value=""/>        
                </div>
                </li>


		<? include "../form_footer.php" ?>	
