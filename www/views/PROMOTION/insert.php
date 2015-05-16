<?php include "../form_header.php" ?>
		<img id="top" src="http:/images/top.png" alt="">
        	<div id="form_container">
        	<h1><a>Untitled Form</a></h1>

		<form id="form_592464" class="appnitro"  method="post" action="../../controllers/PROMOTION/insert.php?array=PROMOTION">
					<div class="form_description">
			<h2>Προαγωγή</h2>
			<p>Εισάγετε μία νέα καταχώρηση</p>
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="SSN">Α.Φ.Μ. </label>
		<div>
			<input id="element_1" name="ssn" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_2" >
		<label class="description" for="new_pos">Κωδικός Νέα Θέσης </label>
		<div>
			<input id="element_2" name="new_pos" class="element text medium" type="text" maxlength="255" value=""/> 
		</div>
		<div>
                <label class="description" for="date">Ημερομηνία Προαγωγής </label>
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

		</li>
		<? include "../form_footer.php" ?>	
