<!DOCTYPE HTML>

<?php include "form_header.php" ?>
        <img id="top" src="http:/images/top.png" alt="">
        <div id="form_container">
        <h1><a>Untitled Form</a></h1>

                <form "form_592464" class="appnitro" method="post" action="../select_field.php">
                                        <div class="form_description">
                        <h2>Ερωτήματα ταξινόμησης</h2>
                        <p>Επιλέξτε τον πίνακα στον οποίο θέλετε να γίνει ταξινόμηση</p>

		 </div>
                        <ul >

                                        <li id="li_1" >
                <label class="description" for="element_1"> Επιλογή πίνακα </label>
                <div>
                        <select id="element_1"  name="array">
			    <option value = "AGGREGATED_FINANCIAL_DATA"> AGGREGATED_FINANCIAL_DATA </option>
                   	    <option value = "BENEFITS"> BENEFITS </option>
                   	    <option value = "EMPLOYEE"> EMPLOYEE </option>
                   	    <option value = "EVALUATION"> EVALUATION </option>
                   	    <option value = "MEDIA"> MEDIA </option>
                   	    <option value = "POSITION"> POSITION </option>
                   	    <option value = "PROMOTION"> PROMOTION </option>
                   	    <option value = "RECRUITMENT_AD"> RECRUITMENT_AD </option>
                   	    <option value = "SALARY"> SALARY </option>
                	</select>

                </div>
                </li>

<? include "form_queries_footer.php" ?>
