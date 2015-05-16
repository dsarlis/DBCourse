<?php include "form_header.php" ?>
        <img id="top" src="http:/images/top.png" alt="">
        <div id="form_container">
        <h1><a>Untitled Form</a></h1>

                <form "form_592464" class="appnitro" method="post" action="http:/controllers/queries.php">
                                        <div class="form_description">
                        <h2>Επιλογή ερωτήματος που θα πραγματοποιηθεί</h2>
                        <p>Επιλέξτε ένα από τα παρακάτω ερωτήματα για να πραγματοποιηθεί στη βάση δεδομένων</p>
                </div>
                        <ul >


                        <input type = "radio" name="query" value="sort"> Ταξινόμηση </input><br/>
                
                        <input type = "radio" name="query" value="query1"> Υπάλληλος με το μεγαλύτερο σκορ </input><br/>
    
                        <input type = "radio" name="query"  value="query2"> Υπάλληλοι με μισθό πάνω από το μέσο μισθό του τμήματός του</input><br/>
          
                        <input type = "radio" name="query"  value="query3"> Μικτές αποδοχές όλων των υπαλλήλων ανά έτος </input><br/>

                        <input type = "radio" name="query"  value="query4"> Άδειες θέσεις ανά τμήμα </input><br/>

                        <input type = "radio" name="query"  value="query5"> Καθαρές αποδοχές ανά υπάλληλο </input><br/>

                        <input type = "radio" name="query"  value="query6"> Αριθμός ΜΜΕ που έχουμε αναρτήσει αγγελία για μια θέση </input><br/>

                        <input type = "radio" name="query"  value="query7"> Υπάλληλοι με μισθό κάτω από 2000 και σκορ πάνω από 300 </input><br/>

                        <input type = "radio" name="query"  value="query8"> Πολύτεκνοι υπάλληλοι με μισθό κάτω από 2000 </input><br/>

                        <input type = "radio" name="query"  value="query9"> Υπάλληλοι με γρήγορη εξέλιξη </input><br/>


<? include "form_queries_footer.php" ?>

