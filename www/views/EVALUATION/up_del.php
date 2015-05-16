<? include "../views/form_header.php" ?>

        <table>
            <tr>
                 <th> ΑΦΜ </th>
                 <th> Ημερομηνία  </th>
                 <th> Σκορ </th>
            </tr>
                <? foreach ( $res as $row) {
                        echo "<tr>";
                        $SSN = $row[ 'SSN' ];
                        $date = $row[ 'date' ];
                        $score = $row[ 'score' ];
                        echo "<td>$SSN</td>";
                        echo "<td>$date</td>";
                        echo "<td>$score</td>";
                        echo "</tr>";
                   }?>
        </table>

        <img id="top" src="http:/images/top.png" alt="">
        <div id="form_container">
        <h1><a>Untitled Form</a></h1>

                <form id="form_592464" class="appnitro"  method="post" action="http:/controllers/EVALUATION/<?echo $mode?>.php?array=EVALUATION">
                                        <div class="form_description">
                        <h2>Αξιολόγηση</h2>
                        <p>Εισάγετε τις τιμές της καταχώρησης που θέλετε να επεξεργαστείτε</p>
                </div>
                        <ul >

                                        <li id="li_1" >
                <label class="description" for="element_1">Α.Φ.Μ. </label>
                <div>
                        <input id="element_1" name="SSN" class="element text medium" type="text" maxlength="255" value=""/>
                </div>
                </li>           <li id="li_2" >
                 <div>
                <label class="description" for="date">Ημερομηνία </label>
                <span>
                        <input id="element_11_1" name="month" class="element text" size="2" maxlength="2" value="" type="text"> /
                        <label for="element_11_1">Μήνας</label>
                </span>
                <span>
                         <input id="element_11_2" name="day" class="element text" size="2" maxlength="2" value="" type="text"> /
                        <label for="element_11_2">Ημέρα</label>
                </span>

                <span>
                        <input id="element_11_3" name="year" class="element text" size="4" maxlength="4" value="" type="text">
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
<? include "../views/up_del_footer.php" ?>
