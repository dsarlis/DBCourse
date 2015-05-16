<? include "views/form_header.php" ?>

	<img id="top" src="http:/images/top.png" alt="">
        <div id="form_container">
        <h1><a>Untitled Form</a></h1>

        <form "form_592464" class="appnitro" method="post" action="sort_array.php?array=<?echo $array?>">
                                        <div class="form_description">
                        <h2>Ερωτήματα ταξινόμησης</h2>
                        <p>Επιλέξτε το πεδίο ως προς το οποίο θέλετε να γίνει ταξινόμηση</p>

                 </div>

   	<input type = "radio" name = "field" value = "pid">Κωδικός Θέσης</input><br/>
   	<input type = "radio" name = "field" value = "media_id">Κωδικός Μέσου</input><br/>
   	<input type = "radio" name = "field" value = "publication_date">Ημερομηνία Δημοσίευσης</input><br/>
   	<input type = "radio" name = "field" value = "duration">Διάρκεια</input><br/>

<? include "views/select_fields_footer.php"; ?>

