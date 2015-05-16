<?php include "../../views/form_header.php" ?>
                <img id="top" src="http:/images/top.png" alt="">
                <div id="form_container">
                <h1><a>Untitled Form</a></h1>

                <form id="form_592464" class="appnitro"  method="post" action="../../controllers/SALARY/updated.php?sal_id=<?echo $sal_id?>">
                                        <div class="form_description">
                        <h2>Μισθοδοσία</h2>
                        <p>Επεξεργαστείτε την καταχώρηση που επιλέξατε</p>
                </div>
                        <ul >

                <li id="li_1" >
                <div class >
                        <label class="description" for="sal_id">Κωδικός Μισθοδοσίας </label>
                        <input id="element_1" name="sal_id" class="element text medium" type="text" maxlength="255" value="<?echo $sal_id?>"/>
                </div>
                </li>
                <li>
                <div class = "left">
                        <label class="description" for="wage">Ημερομίσθιο</label>
                        <input id="element_2" name="wage" class="element text medium" type="text" maxlength="255" value="<?echo $wage?>"/>
                </div>
                <div class = "right">
                        <label class="description" for="workdays">Ημέρες Εργασίας</label>
                        <input id="element_2" name="work_days" class="element text medium" type="text" maxlength="255" value="<?echo $work_days?>"/>
                </div>

                 <div class = "left">
                <label class="description" for="tax">Φόρος</label>
                        <input id="element_2" name="tax" class="element text medium" type="text" maxlength="255" value="<?echo $tax?>"/>
                </div>
                 <div class = "right">
                        <label class="description" for="stamp">Χαρτόσημο</label>
                        <input id="element_2" name="stamp" class="element text medium" type="text" maxlength="255" value="<?echo $stamp?>"/>
                </div>
                </li>
                <? include "../../views/up_del_footer.php" ?>

