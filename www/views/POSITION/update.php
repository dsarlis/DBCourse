<?php include "../../views/form_header.php" ?>
                <img id="top" src="http:/images/top.png" alt="">
                <div id="form_container">
                <h1><a>Untitled Form</a></h1>

                <form id="form_592464" class="appnitro"  method="post" action="../../controllers/POSITION/updated.php?pid=<?echo $pid?>">
                                        <div class="form_description">
                        <h2>Στοιχεία Θέσης</h2>
                        <p>Επεξεργαστείτε την καταχώρηση που επιλέξατε</p>
                </div>
                        <ul >

                <li id="li_1" >
                <div>
                        <label class="description" for="pid">Κωδικός Θέσης</label>
                        <input id="element_1" name="pid" class="element text medium" type="text" maxlength="255" value="<?echo $pid?>"/>
                </div>
                </li>
                <li id="li_2" >
                <div class = "left">
                <label class="description" for="department">Τμήμα</label>
                        <input id="element_1" name="department" class="element text medium" type="text" maxlength="255" value="<?echo $department?>"/>
                </div>
                <div class = "right">
                        <label class="description" for="role">Ιδιότητα</label>
                        <input id="element_2" name="role" class="element text medium" type="text" maxlength="255" value="<?echo $role?>"/>
                </div>
                <div class = "left">
                        <label class="description" for="number">Αριθμός Συνολικών Θέσεων</label>
                        <input id="element_3" name="number" class="element text medium" type="text" maxlength="255" value="<?echo $number?>"/>
                </div>
                <div class = "right">
                        <label class="description" for="is_empty">Aριθμός Κενών Θέσεων</label>
                        <input id="element_4" name="is_empty" class="element text medium" type="text" maxlength="255" value="<?echo $is_empty?>"/>
                </div>
                <div class = "left">
                        <label class="description" for="sal_id">Κωδικός Μισθοδοσίας</label>
                        <input id="element_5" name="sal_id" class="element text medium" type="text" maxlength="255" value="<?echo $sal_id?>"/>
                </div>
                <div class = "right">
                        <label class="description" for="ben_id">Κωδικός Παροχών </label>                        	   <input id="element_6" name="ben_id" class="element text medium" type="text" maxlength="255" value="<?echo $ben_id?>"/>
                </div>

                </li>



                <? include "../../views/up_del_footer.php" ?>
