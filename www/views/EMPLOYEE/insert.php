<?php include "../form_header.php" ?>
		<img id="top" src="../../images/top.png" alt="">
        	<div id="form_container">
        	<h1><a>Untitled Form</a></h1>

		<form id="form_592464" class="appnitro"  method="post" action="http:/controllers/EMPLOYEE/insert.php?array=EMPLOYEE">
					<div class="form_description">
			<h2>Στοχεία Υπαλλήλου</h2>
			<p>Εισάγετε μία νέα καταχώρηση</p>
		</div>						
			<ul >
				
		<li id="li_1" >
		<div class = "left">
			<label class="description" for="name">Όνομα </label>
			<input id="element_1_1" name="name" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		
		<div class = "right">	
			<label class="description" for="surname">Επώνυμο </label>
			<input id="element_1_2" name="surname" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 		

                <div class ="left">
                        <label class="description" for="ssn">Α.Φ.Μ. </label>
                        <input id="element_2" name="ssn" class="element text medium" type="text" maxlength="255" value=""/> 
                </div> 

		<div class = "right">
			 <label class="description" for="street">Όδος </label>
			<input id="element_3" name="street" class="element text medium" type="text" maxlength="255" value=""/> 
		</div>			
	
		<div class = "left">
                         <label class="description" for="number">Αριθμός </label>
                        <input id="element_4" name="number" class="element text medium" type="text" maxlength="255" value=""/> 
                </div>      			
                <div class = "right">
			<label class="description" for="PC">Tαχυδρομικός Κώδικας </label>
                        <input id="element_5" name="PC" class="element text medium" type="text" maxlength="255" value=""/>
                </div>
       
		<div class = "left">
		  <label class="description" for="element_7">Oικογενειακή Κατάσταση</label>
		<select class="element select medium" id="element_7" name="marital_status" > 
			<!--<option value="unknowm" selected="-"></option> -->
			<option value="Married" >Έγγαμος</option>
			<option value="Single" >Άγαμος</option>

		</select>

		</div>
		<div class = "right">
                         <label class="description" for="children_no">Αριθμός Παιδιών </label>
                        <input id="element_8" name="children_no" class="element text medium" type="text" maxlength="255" value=""/>
                </div>

		 <div class = "left">
                         <label class="description" for="spec">Ειδικότητα </label>
			  <input id="element_9" name="spec" class="element text medium" type="text" maxlength="255" value=""/> 
                </div>                                          

                <div class = "right">
                         <label class="description" for="education">Επίπεδο Εκπαίδευσης </label>
                        <input id="element_10" name="education" class="element text medium" type="text" maxlength="255" value=""/>      
                </div>
		 <div>
                         <label class="description" for="pid">Κωδικός Θέσης </label>
                        <input id="element_8" name="pid" class="element text medium" type="text" maxlength="255" value=""/>
                </div>
		
		</li>

		<li id="li_5" >
		<div class = "left">
		<label class="description" for="date">Ημερομηνία Έναρξης </label>
		<span>
			<input id="element_11_1" name="month_start" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_11_1">Μήνας</label>
		</span>
		<span>
		         <input id="element_11_2" name="day_start" class="element text" size="2" maxlength="2" value="" type="text"> /
                        <label for="element_11_2">Ημέρα</label>
                </span>
     
		<span>
	 		<input id="element_11_3" name="year_start" class="element text" size="4" maxlength="4" value="" type="text">
			<label for="element_11_3">Έτος</label>
		</span>
	
		<span id="calendar_1">
			<img id="cal_img_1" class="datepicker" src="../../images/calendar.gif" alt="">	
		</span>
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "element_11_3",
			baseField    : "element_11",
			displayArea  : "calendar_1",
			button		 : "cal_img_1",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectDate
			});
		</script>
		 </div>
		
                <div class = "right">
                <label class="description" for="date_final">Ημερομηνία Λήξης </label>
                <span>
                        <input id="element_12_1" name="month_final" class="element text" size="2" maxlength="2" value="" type="text"> /
                        <label for="element_12_1">Μήνας</label>
                </span>
                <span>
                         <input id="element_12_2" name="day_final" class="element text" size="2" maxlength="2" value="" type="text"> /
                        <label for="element_12_2">Ημέρα</label>
                </span>

                <span>
                        <input id="element_12_3" name="year_final" class="element text" size="4" maxlength="4" value="" type="text">
                        <label for="element_12_3">Έτος</label>
                </span>

                <span id="calendar_2">
                        <img id="cal_img_2" class="datepicker" src="http:/images/calendar.gif" alt="">
                </span>
                <script type="text/javascript">
                        Calendar.setup({
                        inputField       : "element_12_3",
                        baseField    : "element_12",
                        displayArea  : "calendar_2",
                        button           : "cal_img_2",
                        ifFormat         : "%B %e, %Y",
                        onSelect         : selectDate
                        });
                </script>
                 </div>
                </li>

		<? include "../form_footer.php" ?>	
