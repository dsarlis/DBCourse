<? include "views/form_header.php" ?>

	<img id="top" src="http:/images/top.png" alt="">
        <div id="form_container">
        <h1><a>Untitled Form</a></h1>

        <form "form_592464" class="appnitro" method="post" action="sort_array.php?array=<?echo $array?>">
                                        <div class="form_description">
                        <h2>Ερωτήματα ταξινόμησης</h2>
                        <p>Επιλέξτε το πεδίο ως προς το οποίο θέλετε να γίνει ταξινόμηση</p>

                 </div>

 	  <input type = "radio" name = "field" value = "ben_id">Κωδικός Παροχών</input><br/>
   	<input type = "radio" name = "field" value = "fund_benefits">Ταμείο Παροχών</input><br/>
   	<input type = "radio" name = "field" value = "health_contribution">Εισφορά Κλάδου Υγείας</input><br/>
   	<input type = "radio" name = "field" value = "pension_contribution">Εισφορά Σύνταξης</input><br/>
   	<input type = "radio" name = "field" value = "lump_sum_contribution">Εισφορά Εφάπαξ</input><br/>
   	<input type = "radio" name = "field" value = "health_tax">Κρατήσεις Υγείας</input><br/>
   	<input type = "radio" name = "field" value = "pension_tax">Κρατήσεις Σύνταξης</input><br/>

<? include "views/select_fields_footer.php"; ?>

