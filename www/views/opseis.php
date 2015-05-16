<?php include "form_header.php" ?>
        <img id="top" src="http:/images/top.png" alt="">
        <div id="form_container">
        <h1><a>Untitled Form</a></h1>

                <form "form_592464" class="appnitro" method="post" action="http:/controllers/opseis.php">
                                        <div class="form_description">
                        <h2>Επιλογή μίας Όψης της Βάσης Δεδομένων</h2>
                        <p></p>
                </div>
                        <ul >

                        <input type = "radio" name="view" value="employees2012"> Προσληφθέντες Υπάλληλοι 2012</input><br/>
                
                        <input type = "radio" name="view" value="wage_stats"> Μέσο Ημερομίσθιο ανά Τμήμα</input><br/>

<? include "form_queries_footer.php" ?>
