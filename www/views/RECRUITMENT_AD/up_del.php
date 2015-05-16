<? include "../views/form_header.php" ?>

        <table>
            <tr>
                 <th> Κωδικός Θέσης </th>
                 <th> Κωδικός Μέσου </th>
                 <th> Ημερομηνία Δημοσίευσης </th>
                 <th> Διάρκεια </th>
            </tr>
                <? foreach ( $res as $row) {
                        echo "<tr>";
                        $pid = $row[ 'pid' ];
                        $med_id = $row[ 'media_id' ];
                        $publication_date = $row[ 'publication_date' ];
                        $duration = $row[ 'duration' ];
                        echo "<td>$pid</td>";
                        echo "<td>$med_id</td>";
                        echo "<td>$publication_date</td>";
                        echo "<td>$duration</td>";
                        echo "</tr>";
                   }?>
        </table>

        <img id="top" src="http:/images/top.png" alt="">
        <div id="form_container">
        <h1><a>Untitled Form</a></h1>

                <form id="form_592464" class="appnitro"  method="post" action="http:/controllers/RECRUITMENT_AD/<?echo $mode?>.php?array=RECRUITMENT_AD">
                                        <div class="form_description">
                        <h2>Αγγελίες Πρόσληψης</h2>
                        <p>Εισάγετε τις τιμές της καταχώρησης που θέλετε να επεξεργαστείτε</p>
                </div>
                        <ul >

                                        <li id="li_1" >
                <label class="description" for="element_1">Κωδικός Θέσης </label>
                <div>
                        <input id="element_1" name="pid" class="element text medium" type="text" maxlength="255" value=""/>
                </div>
                </li>           <li id="li_2" >
                <label class="description" for="element_2">Κωδικός Μέσου </label>
                <div>
                        <input id="element_2" name="media_id" class="element text medium" type="text" maxlength="255" value=""/>
                </div>
                </li> 		<li id="li_3">
                <div class = "left">
                <label class="description" for="date">Ημερομηνία Δημοσίευσης </label>
                <span>
                        <input id="element_11_1" name="month" class="element text" size="2" maxlength="2" value="" type="text"/>
                        <label for="element_11_1">Μήνας</label>
                </span>
                <span>
                         <input id="element_11_2" name="day" class="element text" size="2" maxlength="2" value="" type="text"/>
                        <label for="element_11_2">Ημέρα</label>
                </span>
                <span>
                        <input id="element_11_3" name="year" class="element text" size="4" maxlength="4" value="" type="text"/>
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
