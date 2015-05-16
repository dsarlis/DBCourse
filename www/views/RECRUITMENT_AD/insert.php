<?php include "../form_header.php" ?>
		<img id="top" src="http:/images/top.png" alt="">
        	<div id="form_container">
        	<h1><a>Untitled Form</a></h1>
	
		<form id="form_592464" class="appnitro"  method="post" action="../../controllers/RECRUITMENT_AD/insert.php?array=RECRUITMENT_AD">
					<div class="form_description">
			<h2>Αγγελίες Πρόσληψης</h2>
			<p>Εισάγετε μία νέα καταχώρηση</p>
		</div>						
			<ul >
			
		<li id="li_1" >
		<div class = "left">
			<label class="description" for="pid">Κωδικός Θέσης </label>
			<input id="element_1" name="pid" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 		
		<div class = "right">
		<label class="description" for="media_id">Κωδικός Μέσου</label>
			<input id="element_2" name="media_id" class="element text medium" type="text" maxlength="255" value=""/> 
		</div>
		<div class = "left">
                <label class="description" for="date">Ημερομηνία Δημοσίευσης </label>
                <span>
                        <input id="element_11_1" name="month" class="element text" size="2" maxlength="2" value="" type="text"> /
                        <label for="element_11_1">Μήνας</label>
                </span>
                <span>
                         <input id="element_11_2" name="day" class="element text" size="2" maxlength="2" value="" type="text"> /
                        <label for="element_11_2">Ημέρα</label>
                </span>
                <span>
                        <input id="element_11_3" name="year" class="element text" size="4" maxlength="4" value="" type="text">
                        <label for="element_11_3">Έτος</label>
                </span>

                <span id="calendar_1">
                        <img id="cal_img_1" class="datepicker" src="http:/images/calendar.gif" alt="">
                </span>
                <script type="text/javascript">
                        Calendar.setup({
                        inputField       : "element_11_3",
                        baseField    : "element_11",
                        displayArea  : "calendar_1",
                        button           : "cal_img_1",
                        ifFormat         : "%B %e, %Y",
                        onSelect         : selectDate
                        });
                </script>
                 </div>
		 <div class = "right">
                <label class="description" for="duration">Διάρκεια (Σε ημέρες)</label>
                        <input id="element_2" name="duration" class="element text medium" type="text" maxlength="255" value=""/> 
                </div>

		</li>
		<? include "../form_footer.php" ?>	
