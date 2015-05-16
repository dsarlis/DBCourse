<?php include "../form_header.php" ?>
		<img id="top" src="http:/images/top.png" alt="">
        	<div id="form_container">
        	<h1><a>Untitled Form</a></h1>

		<form id="form_592464" class="appnitro"  method="post" action="../../controllers/MEDIA/insert.php?array=MEDIA">
					<div class="form_description">
			<h2>MME</h2>
			<p>Εισάγετε μία νέα καταχώρηση</p>
		</div>						
			<ul >
			
		<li id="li_1" >
		<label class="description" for="media_id">Κωδικός Μέσου</label>
		<div>
			<input id="element_1" name="media_id" class="element text medium" type="text" maxlength="255" value=""/> 
		</div>
		</li>
		<li id="li_2" >
                <label class="description" for="name">Όνομα Μέσου</label>
                <div>
                        <input id="element_1" name="name" class="element text medium" type="text" maxlength="255" value=""/>
                </div>
                </li>
		<li id="li_2" >
                <label class="description" for="kind">Είδος</label>
                <div>
                        <input id="element_1" name="kind" class="element text medium" type="text" maxlength="255" value=""/>
                </div>
                </li>



		<? include "../form_footer.php" ?>	
