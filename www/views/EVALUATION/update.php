<?php include "../../views/form_header.php" ?>
                <img id="top" src="http:/images/top.png" alt="">
                <div id="form_container">
                <h1><a>Untitled Form</a></h1>


                <form id="form_592464" class="appnitro"  method="post" action="../../controllers/EVALUATION/updated.php?SSN=<?echo $SSN?>&date=<?echo $date?>">
                                        <div class="form_description">
                        <h2>Αξιολόγηση</h2>
                        <p>Επεξεργαστείτε την καταχώρηση που επιλέξατε</p>
                </div>
                        <ul >

                                        <li id="li_1" >
                <label class="description" for="SSN">Α.Φ.Μ. </label>
                <div>
                        <input id="element_1" name="ssn" class="element text medium" type="text" maxlength="255" value="<?echo $SSN?>"/>
                </div>
                </li>           <li id="li_2" >
                <label class="description" for="score">Σκορ </label>
                <div>
                        <input id="element_2" name="score" class="element text medium" type="text" maxlength="255" value="<?echo $score?>"/>
                </div>
                <div>
                <label class="description" for="date">Ημερομηνία </label>
                <span>
                        <input id="element_11_1" name="month" class="element text" size="2" maxlength="2" value="<?echo $month?>" type="text"> /
                        <label for="element_11_1">Μήνας</label>
                </span>
                <span>
                         <input id="element_11_2" name="day" class="element text" size="2" maxlength="2" value="<?echo $day?>" type="text"> /
                        <label for="element_11_2">Ημέρα</label>
                </span>

                <span>
                        <input id="element_11_3" name="year" class="element text" size="4" maxlength="4" value="<?echo $year?>" type="text">
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
                <? include "../../views/up_del_footer.php" ?>

