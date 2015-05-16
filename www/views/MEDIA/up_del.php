<? include "../views/form_header.php" ?>

        <table>
            <tr>
                 <th> Κωδικός Μέσου </th>
                 <th> Όνομα  </th>
                 <th> Είδος </th>
            </tr>
                <? foreach ( $res as $row) {
                        echo "<tr>";
                        $media_id = $row[ 'media_id' ];
                        $name = $row[ 'name' ];
                        $kind = $row[ 'kind' ];
                        echo "<td>$media_id</td>";
                        echo "<td>$name</td>";
                        echo "<td>$kind</td>";
                        echo "</tr>";
                   }?>
        </table>

        <img id="top" src="http:/images/top.png" alt="">
        <div id="form_container">
        <h1><a>Untitled Form</a></h1>

                <form id="form_592464" class="appnitro"  method="post" action="http:/controllers/MEDIA/<?echo $mode?>.php?array=MEDIA">
                                        <div class="form_description">
                        <h2>MME</h2>
                        <p>Εισάγετε τις τιμές της καταχώρησης που θέλετε να επεξεργαστείτε</p>
                </div>
                        <ul >

                                        <li id="li_1" >
                <label class="description" for="element_1">Κωδικός Μέσου </label>
                <div>
                        <input id="element_1" name="media_id" class="element text medium" type="text" maxlength="255" value=""/>
                </div>
                </li>           <li id="li_2" >
<? include "../views/up_del_footer.php" ?>
