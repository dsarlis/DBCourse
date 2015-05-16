<? include "views/form_header.php" ?>

	<img id="top" src="http:/images/top.png" alt="">
        <div id="form_container">
        <h1><a>Untitled Form</a></h1>

        <form "form_592464" class="appnitro" method="post" action="sort_array.php?array=<?echo $array?>">
                                        <div class="form_description">
                        <h2>Ερωτήματα ταξινόμησης</h2>
                        <p>Επιλέξτε το πεδίο ως προς το οποίο θέλετε να γίνει ταξινόμηση</p>

                 </div>	

   	<input type = "radio" name = "field" value = "SSN">ΑΦΜ</input><br/>
   	<input type = "radio" name = "field" value = "name">Όνομα</input><br/>
   	<input type = "radio" name = "field" value = "surname">Επώνυμο</input><br/>
   	<input type = "radio" name = "field" value = "street">Οδος</input><br/>
   	<input type = "radio" name = "field" value = "number">Αριθμός</input><br/>
   	<input type = "radio" name = "field" value = "PC">ΤΚ</input><br/>
   	<input type = "radio" name = "field" value = "specialization">Ειδικότητα</input><br/>
   	<input type = "radio" name = "field" value = "education_level">Επίπεδο Εκπαίδευσης</input><br/>
   	<input type = "radio" name = "field" value = "marital_status">Οικογενειακή Κατάσταση</input><br/>
   	<input type = "radio" name = "field" value = "children_no">Αριθμός Τέκνων</input></br>
   	<input type = "radio" name = "field" value = "from_date">Ημερομηνία Έναρξης</input><br/>
		
<? include "views/select_fields_footer.php"; ?>

